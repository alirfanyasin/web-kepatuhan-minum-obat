import "./bootstrap";
// import { initTailwindConfig } from "./theme";

// Initialize Tailwind config immediately (before DOM is interactive)
// initTailwindConfig();

// ----------------------------------------------------------------------------
// core UI logic for sidebar, theme, dropdowns, date, and scroll animation
// this file is loaded as a ES module by Vite (`type="module"`) so nothing
// is exposed to the global scope automatically. inline `onclick` handlers
// in the Blade templates therefore cannot see our functions unless we
// explicitly attach them to `window`.
// ----------------------------------------------------------------------------

// let html, sidebar, overlay;
// let sidebarOpen = false;

// function cacheElements() {
//     html = document.documentElement;
//     sidebar = document.getElementById("sidebar");
//     overlay = document.getElementById("sidebarOverlay");
// }

// // Set current date
// function setCurrentDate() {
//     const dateElement = document.getElementById("currentDate");
//     if (dateElement) {
//         const options = {
//             weekday: "long",
//             year: "numeric",
//             month: "long",
//             day: "numeric",
//         };
//         dateElement.textContent = new Date().toLocaleDateString(
//             "id-ID",
//             options,
//         );
//     }
// }

// // Initialize theme
// function initTheme() {
//     const savedTheme = localStorage.getItem("medicare-theme");
//     const systemPrefersDark = window.matchMedia(
//         "(prefers-color-scheme: dark)",
//     ).matches;

//     if (savedTheme === "dark" || (!savedTheme && systemPrefersDark)) {
//         html.classList.add("dark");
//     } else {
//         html.classList.remove("dark");
//     }
// }

// // Toggle theme
// function toggleTheme() {
//     html.classList.toggle("dark");
//     const isDark = html.classList.contains("dark");
//     localStorage.setItem("medicare-theme", isDark ? "dark" : "light");
// }

// // Toggle sidebar
// function toggleSidebar() {
//     sidebarOpen = !sidebarOpen;

//     if (!sidebar || !overlay) {
//         // if elements are missing, run cacheElements and abort
//         cacheElements();
//         return;
//     }

//     if (sidebarOpen) {
//         sidebar.classList.remove("-translate-x-full");
//         overlay.classList.remove("hidden");
//         document.body.style.overflow = "hidden";
//     } else {
//         sidebar.classList.add("-translate-x-full");
//         overlay.classList.add("hidden");
//         document.body.style.overflow = "";
//     }
// }

// // Toggle dropdown
// function toggleDropdown(button) {
//     const dropdown = button.parentElement;
//     const menu = dropdown.querySelector(".dropdown-menu");
//     const arrow = button.querySelector("svg:last-child");

//     menu.classList.toggle("open");
//     arrow.style.transform = menu.classList.contains("open")
//         ? "rotate(180deg)"
//         : "rotate(0deg)";
// }

// // keyboard shortcuts
// window.addEventListener("keydown", (e) => {
//     if (e.key === "Escape" && sidebarOpen) {
//         toggleSidebar();
//     }
// });

// // run after DOM is ready
// window.addEventListener("DOMContentLoaded", () => {
//     cacheElements();
//     initTheme();
//     setCurrentDate();

//     // Animate elements on scroll
//     const observerOptions = {
//         threshold: 0.1,
//         rootMargin: "0px 0px -50px 0px",
//     };

//     const observer = new IntersectionObserver((entries) => {
//         entries.forEach((entry) => {
//             if (entry.isIntersecting) {
//                 entry.target.style.animationPlayState = "running";
//                 observer.unobserve(entry.target);
//             }
//         });
//     }, observerOptions);

//     document.querySelectorAll(".animate-slide-up").forEach((el) => {
//         el.style.animationPlayState = "paused";
//         observer.observe(el);
//     });
// });

// // expose globals so that inline onclick handlers work
// window.toggleTheme = toggleTheme;
// window.toggleSidebar = toggleSidebar;
// window.toggleDropdown = toggleDropdown;
