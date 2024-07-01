// Formulaire de réservation

document.addEventListener("DOMContentLoaded", function () {
    const reservedDates = JSON.parse(document.getElementById('reserved-dates').textContent);
    const roomPricePerNight = parseFloat(document.getElementById('room-price-per-night').textContent);

    flatpickr("#date-range", {
        mode: "range",
        dateFormat: "Y-m-d",
        minDate: "today",
        disable: reservedDates,
        locale: "fr",
        onDayCreate: function (dObj, dStr, fp, dayElem) {
            if (dayElem.classList.contains("flatpickr-disabled")) {
                dayElem.style.backgroundColor = "#939597";
                dayElem.style.color = "white";
            }
        }
    });

    const bookingForm = document.querySelector('#reservation-form');
    const paymentDetails = document.querySelector('#payment-details');
    const nextStepButton = document.querySelector('#next-step');
    const paymentMethodSelect = document.querySelector('#payment-method');
    const paymentFields = document.querySelectorAll('.payment-fields');

    nextStepButton.addEventListener('click', function (event) {
        event.preventDefault(); // Empêcher la soumission du formulaire par défaut

        // Validation des champs du formulaire de réservation
        const dateRange = document.querySelector('#date-range').value.trim();
        const email = document.querySelector('#email').value.trim();
        const nom = document.querySelector('#nom').value.trim();
        const prenom = document.querySelector('#prenom').value.trim();
        const tel = document.querySelector('#tel').value.trim();
        const adults = document.querySelector('#adults').value.trim();
        const children = document.querySelector('#children').value.trim();

        if (!dateRange || !email || !nom || !prenom || !tel || !adults || !children) {
            alert('Veuillez remplir tous les champs du formulaire de réservation.');
            return;
        }

        // Calcul du montant total à payer
        const [start, end] = dateRange.split(' to ');
        const startDate = new Date(start);
        const endDate = new Date(end);
        const daysDifference = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24)); // Calcul du nombre de jours entre les deux dates

        const totalAmount = daysDifference * roomPricePerNight;
        document.querySelector('#amount-value').textContent = totalAmount.toFixed(2); // Affichage du montant total

        // Masquer le formulaire de réservation
        document.querySelector('#reservation-form-fields').style.display = 'none';

        // Afficher le formulaire de paiement
        paymentDetails.style.display = 'block';
    });

    paymentMethodSelect.addEventListener('change', function () {
        const selectedMethod = this.value;

        if (selectedMethod === 'fedapay') {
            document.getElementById('fedapay-fields').style.display = 'block';
        } else {
            paymentFields.forEach(field => field.style.display = 'none');
        }
    });
});

// Affichage des chambres
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.chambre').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const roomId = this.getAttribute('value');
            window.location.href = `/roomdetails/${roomId}`;
        });
    });
});
