import flatpickr from "flatpickr";

document.addEventListener('DOMContentLoaded', function() {
    // Select date fields
    const startDateInput = document.querySelector('.ovabrw_start_date');
    const endDateInput = document.querySelector('.ovabrw_end_date');

    // Disable manual input and set up date pickers
    startDateInput.addEventListener('keydown', (e) => e.preventDefault());
    endDateInput.addEventListener('keydown', (e) => e.preventDefault());

    flatpickr(startDateInput, {
        dateFormat: 'd-m-Y',
        defaultDate: 'today',
        minDate: 'today',
    });

    flatpickr(endDateInput, {
        dateFormat: 'd-m-Y',
        minDate: 'today',
    });

    console.log('Form script loaded');
});
