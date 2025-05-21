// Load Styles
import '../js/slide.js';
import '../js/sidebar.js';
import '../js/slick.js';
import '../js/service.js';
// Load Bootstrap init
import {initBootstrap} from "./bootstrap.js";

// Loading bootstrap with optional features
initBootstrap({
  tooltip: true,
  popover: true,
  toasts: true,
});

// Your app code
console.log(`Hello ${process.env.HELLO}`);
