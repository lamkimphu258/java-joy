import "./bootstrap";

window.addEventListener('livewire:navigated', () => {
    window.scrollTo({ top: 0 });
});

const hamburgerMenu = document.querySelector("#hamburger-menu");
const mobileMenu = document.querySelector("#mobile-menu");
hamburgerMenu.addEventListener("click", () => {
    hamburgerMenu.classList.toggle("open");
    mobileMenu.classList.toggle("open");
});
