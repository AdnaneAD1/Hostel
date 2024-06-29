<x-mail::message>
    # Confirmation de Réservation

    Chère/Cher {{ $name }},

    Nous sommes ravis de vous informer que votre réservation a été bien effectuée avec succès ! Nous vous remercions de
    choisir **RIVER OF LAND** pour votre prochain séjour.

    Nous nous réjouissons de vous accueillir et de vous offrir une expérience inoubliable. Si vous avez des questions ou
    des demandes particulières avant votre arrivée, n'hésitez pas à nous contacter. Nous sommes ici pour rendre votre
    séjour aussi agréable que possible.

    Ci-dessous l'id de votre réservation:
    ``{{ $id }}``

    Nous vous remercions de votre confiance et avons hâte de vous accueillir bientôt.

    Chaleureusement,<br>
    {{ config('app.name') }}
</x-mail::message>
