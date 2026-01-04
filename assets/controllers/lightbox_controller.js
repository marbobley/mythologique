import { Controller } from '@hotwired/stimulus';
import { Modal } from 'bootstrap';

export default class extends Controller {
    static targets = ['modal', 'image'];

    connect() {
        // Initialisation de la modale Bootstrap
        this.bsModal = new Modal(this.modalTarget);
    }

    open(event) {
        const imgSrc = event.currentTarget.getAttribute('src');
        const imgAlt = event.currentTarget.getAttribute('alt');

        this.imageTarget.src = imgSrc;
        this.imageTarget.alt = imgAlt;

        this.bsModal.show();
    }
}
