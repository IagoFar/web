import './bootstrap';
import '@fortawesome/fontawesome-free/js/all.js';
import PerfectScrollbar from 'perfect-scrollbar';
import 'perfect-scrollbar/css/perfect-scrollbar.css';


document.addEventListener('DOMContentLoaded', function() {
    const body = document.querySelector('body');
    new PerfectScrollbar(body);
});
