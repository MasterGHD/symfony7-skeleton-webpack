// Import CSS files
import './app.css';
import 'mdb-ui-kit/css/mdb.min.css';

// Import MDB UI Kit
import * as mdb from 'mdb-ui-kit';

window.mdb = mdb;

document.addEventListener('DOMContentLoaded', () => {
    console.log('Assets loaded successfully');

    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-mdb-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new mdb.Tooltip(tooltipTriggerEl);
    });

    // Initialize popovers
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-mdb-toggle="popover"]'));
    popoverTriggerList.map(function (popoverTriggerEl) {
        return new mdb.Popover(popoverTriggerEl);
    });

    // Toast button
    const toastBtn = document.getElementById('showToast');
    const toastEl = document.getElementById('liveToast');
    if (toastBtn && toastEl) {
        toastBtn.addEventListener('click', function() {
            const toast = new mdb.Toast(toastEl);
            toast.show();
        });
    }
});
