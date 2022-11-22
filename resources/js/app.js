import "./bootstrap";
import { setTimezone } from "./cookieHelper";
import Alpine from "alpinejs";

// Sets the timezone locally how many days
(function () {
    setTimezone(365);
})();

window.Alpine = Alpine;

Alpine.start();
