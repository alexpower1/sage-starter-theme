// Import everything from autoload
import "./autoload/**/*";

// import external dependencies
import $ from "jquery";
// import local dependencies
import Router from "./util/Router";
import aboutUs from "./routes/about";
import common from "./routes/common";
import home from "./routes/home";

/** Populate Router instance with DOM routes */
const routes = new Router({
    // All pages
    common,
    // Home page
    home,
    // About Us page, note the change from about-us to aboutUs.
    aboutUs,
});

// Load Events
$(document).ready(() => routes.loadEvents());

let open = document.querySelector("#open-menu");
let close = document.querySelector("#close-menu");
let menu = document.querySelector("#menu");

open.addEventListener("click", function (e) {
    e.preventDefault();
    menu.classList.remove("hidden");
    setTimeout(() => {
        menu.classList.remove("opacity-0");
    }, 10);
});

close.addEventListener("click", function (e) {
    e.preventDefault();
    menu.classList.add("opacity-0");
    setTimeout(() => {
        menu.classList.add("hidden");
    }, 200);
});
