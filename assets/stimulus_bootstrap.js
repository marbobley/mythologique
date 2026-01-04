import { startStimulusApp } from '@symfony/stimulus-bundle';
import LightboxController from 'lightbox_controller';

const app = startStimulusApp();
// register any custom, 3rd party controllers here
app.register('lightbox', LightboxController);
