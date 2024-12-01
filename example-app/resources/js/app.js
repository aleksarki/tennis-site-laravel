require('./bootstrap');
//import './scss/styles.scss';
//import 'bootstrap';

const bootstrap = require('bootstrap/dist/js/bootstrap.bundle.js');


const downloadButton = document.getElementById('downloadButton');
const dowloadToast = document.getElementById('downloadToast');

if (downloadButton) {
    const toast = bootstrap.Toast.getOrCreateInstance(dowloadToast);
    downloadButton.addEventListener('click', () => {
        toast.show();
    });
}


const infoModal = document.getElementById('infoModal');

if (infoModal) {
    infoModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget;
        const name = button.getAttribute('data-bs-name');
        const family = button.getAttribute('data-bs-family');
        const other = button.getAttribute('data-bs-other');
        const game = button.getAttribute('data-bs-game');

        const modalTitle = infoModal.querySelector('.modal-title');
        modalTitle.textContent = `${name}`;

        const modalFamily = infoModal.querySelector('.family');
        modalFamily.textContent = `${family}`

        const modalOther = infoModal.querySelector('.other');
        modalOther.textContent = `${other}`

        const modalGame = infoModal.querySelector('.game');
        modalGame.textContent = `${game}`
    })
}


const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
