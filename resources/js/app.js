import "./bootstrap";
import { setTimezone } from "./cookieHelper";
import Alpine from "alpinejs";
import Swiper from 'swiper';
import 'swiper/css';

// Sets the timezone locally how many days
(function () {
    setTimezone(365);
})();

window.Alpine = Alpine;

Alpine.start();

const swiper = new Swiper('.swiper', {
    // configure Swiper to use modules
    modules: [Navigation, Pagination],
  });