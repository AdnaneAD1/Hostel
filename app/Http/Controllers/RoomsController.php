<?php

namespace App\Http\Controllers;

use App\Models\Room;
use FedaPay\FedaPay;
use Omnipay\Omnipay;
use FedaPay\Transaction;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoomsController extends Controller
{
    //Passerel de paiement
    protected $gateway;

    public function __construct()
    {
        // Configuration Omnipay gateway pour PayPal ou Stripe
        $this->gateway = Omnipay::create('PayPal_Express'); // Changer 'Stripe' pour Stripe
        $this->gateway->setUsername(env('PAYPAL_API_USERNAME'));
        $this->gateway->setPassword(env('PAYPAL_API_PASSWORD'));
        $this->gateway->setSignature(env('PAYPAL_API_SIGNATURE'));
        $this->gateway->setTestMode(true); // mettre false pour le déploiement
    }

    // page d'acceuil
    public function indexpage()
    {
        return view('welcome');
    }

    // liste des chambres
    public function roomlist()
    {
        return view('rooms/roomslist');
    }

    public function roomlist2()
    {
        return view('rooms/roomslist2');
    }

    public function roomdetails($id)
    {
        // Récupérer les informations de la chambre depuis la base de données
        $room = Room::findOrFail($id);
        Session::put('id', $id);

        // Récupéretion des dates de réservation
        $reservations = Reservation::where('room_id', $id)
            ->select('check_in', 'check_out')
            ->get();

        $reservedDates = [];
        foreach ($reservations as $reservation) {
            $period = new \DatePeriod(
                new \DateTime($reservation->check_in),
                new \DateInterval('P1D'),
                (new \DateTime($reservation->check_out))->modify('+1 day')
            );

            foreach ($period as $date) {
                $reservedDates[] = $date->format('Y-m-d');
            }
        }

        // Récupérer le prix par nuit de la chambre
        $roomPricePerNight = $room->amount;

        // Passer les données à la vue
        return view('rooms/roomsdetails', compact('room', 'reservedDates', 'roomPricePerNight'));
    }

    // contact
    public function contact()
    {
        return view('rooms/contact');
    }

    // Générer un identifiant unique
    private function generateUniqueID($length = 10)
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    // Réservation et paiment
    public function store(Request $request)
    {
        $request->validate([
            'date_range' => 'required|string',
            'email' => 'required|email',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'tel' => 'required|string|max:20',
            'adults' => 'required|integer|min:1',
            'children' => 'required|integer|min:0',
            'payment_method' => 'required|string',
            'fedapay_phone' => 'required_if:payment_method,==,fedapay|nullable|string',
        ]);

        // Récupération id de la session
        $room_id = Session::get('id');
        // Calcul du total amount
        $dateRange = explode(' to ', $request->date_range);
        $check_in = new \DateTime($dateRange[0]);
        $check_out = new \DateTime($dateRange[1]);
        $daysDifference = $check_out->diff($check_in)->days;
        $roomPricePerNight = Room::where('id', $room_id)->amount; // A remplacer
        $totalAmount = $daysDifference * $roomPricePerNight;

        // Conversion
        $tauxDeConversion = 655.957; // Taux de conversion fixe
        $totalAmountXOF = $totalAmount * $tauxDeConversion;

        do {
            $ID_reservation = $this->generateUniqueID();
        } while (Reservation::where('id', $ID_reservation)->exists());

        // Création de la réservation
        $reservation = new Reservation([
            'id' => $ID_reservation,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'email' => $request->email,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'tel' => $request->tel,
            'adults' => $request->adults,
            'children' => $request->children,
            'payment_method' => $request->payment_method,
            'amount' => $totalAmount,
            'room_id' => $room_id,
        ]);

        $paymentMethod = $request->payment_method;
        $response = null;

        if ($paymentMethod == 'paypal') {
            // PayPal payment
            $response = $this->gateway->purchase([
                'amount' => $totalAmount,
                'currency' => 'EUR',
                'returnUrl' => route('payment.success', [$reservation]),
                'cancelUrl' => route('payment.cancel'),
            ])->send();

            if ($response->isRedirect()) {
                return $response->redirect(); // Redirect de PayPal pour le paiement
            } else {
                return response()->json(['error' => $response->getMessage()], 400);
            }
        } elseif ($paymentMethod == 'fedapay') {
            // FedaPay payment
            FedaPay::setApiKey(config('fedapay.api_key'));
            FedaPay::setEnvironment(config('fedapay.environment'));

            try {
                $transaction = Transaction::create([
                    'description' => 'Paiement de réservation',
                    'amount' => $totalAmountXOF * 100, // Montant en centimes
                    'currency' => ['iso' => 'XOF'],
                    'customer' => [
                        'firstname' => $request->prenom,
                        'lastname' => $request->nom,
                        'email' => $request->email,
                        'phone_number' => ['number' => $request->fedapay_phone]
                    ],
                ]);

                $transaction->sendNow();

                // Enregistrement des informations de réservation dans la base de données
                $reservation->save();

                return redirect()->route('roomdetails')->with('success', 'Votre paiement a été traité avec succès.');
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 400);
            }
        } else {
            return response()->json(['error' => 'Méthode de paiement non prise en charge.'], 400);
        }
    }

    public function paymentSuccess($reservation)
    {
        // payment success et sauvegarde reservation
        $reservation->save();
        return redirect()->route('roomdetails')->with('success', 'Votre paiement a été traité avec succès.');
    }

    public function paymentCancel()
    {
        return redirect()->route('roomdetails')->with('error', 'Votre paiement a été annulé.');
    }
}
