<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashbord()
    {

        if (!Auth::user()) {
            Auth::logout();
            return redirect()->route('login');
        }
        // Réservation de la semaine précédente
        $previousWeekReservation = Reservation::whereBetween('created_at', [now()->subWeeks(2), now()->subWeek()])->count();

        // Réservation de cette semaine
        $currentWeekReservation = Reservation::whereBetween('created_at', [now()->subWeek(), now()])->count();

        // Calculer le pourcentage de croissance
        if ($previousWeekReservation > 0) {
            $percentageGrowth = (($currentWeekReservation - $previousWeekReservation) / $previousWeekReservation) * 100;
        } else {
            $percentageGrowth = 0; // Ou toute autre valeur appropriée
        }
        // Récupérer toutes les réservations avec les champs nécessaires et la jointure sur les noms des chambres
        $reservations = Reservation::select('reservation.id', 'reservation.check_in', 'reservation.check_out', 'reservation.amount', 'reservation.room_id', 'room.name as room_name')
            ->join('room', 'reservation.room_id', '=', 'room.id')
            ->get();

        // Calculer le nombre total de clients
        $totalClients = Reservation::distinct('email')->count('email');

        // Calculer le montant total payé
        $totalAmountPaid = round(Reservation::sum('amount'));

        // Calculer le nombre de chambres disponibles
        $totalRooms = Room::count();
        $reservedRooms = Reservation::distinct('room_id')->count('room_id');
        $availableRooms = $totalRooms - $reservedRooms;

        // Récupérer les nouvelles réservations et les chambres réservées
        $newReservations = Reservation::where('created_at', '>=', now()->subDay())->count();
        $roomsReserved = Reservation::distinct('room_id')->count('room_id');

        // Montant total payé aujourd'hui
        $totalAmountPaidToday = round(Reservation::whereDate('created_at', '>=', now()->subDay())->sum('amount'));

        // Préparer les données pour les graphiques
        $dailySales = Reservation::selectRaw('DATE(created_at) as date, SUM(amount) as total')
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        return view(
            'admin/dashbord',
            compact(
                'percentageGrowth',
                'currentWeekReservation',
                'reservations',
                'totalClients',
                'totalAmountPaid',
                'availableRooms',
                'newReservations',
                'roomsReserved',
                'totalAmountPaidToday',
                'dailySales'
            )
        );
    }

    public function deconnexion()
    {
        if (Auth::user()) {
            Auth::logout();
        }
        return redirect()->route('login');
    }

    public function createadmin()
    {
        if (Auth::check()) {
            return view('auth.register');
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
    }
}
