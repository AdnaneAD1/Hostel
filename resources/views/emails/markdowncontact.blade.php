<x-mail::message>
    # Nouveau message de contact de: {{ $name }}

    **E-mail**:``{{ $email }}`` <br>
    **Objet**:``{{ $subject }}`` <br>
    **Message**: <br> {{ $message }}


    Merci,<br>
    {{ config('app.name') }}
</x-mail::message>
