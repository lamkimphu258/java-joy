import { fadeInUpOb, fadeInLeftOb, fadeInRightOb } from "./observerAnimation";

// Observer animation
const titleWrapper = document.querySelector(".title-wrapper");
fadeInUpOb.observe(titleWrapper);

const productList = document.querySelector(".product-container");
fadeInUpOb.observe(productList);

const infoContent = document.querySelector(".info-content");
fadeInUpOb.observe(infoContent);

const menuIntroduction = document.querySelector(".menu-introduction");
fadeInLeftOb.observe(menuIntroduction);

const menuRightSide = document.querySelector(".menu-right-side");
fadeInRightOb.observe(menuRightSide);

const testimonial = document.querySelector(".testimonial-container");
fadeInUpOb.observe(testimonial);

const recentPostSectionTitle = document.querySelector(
    "#recent-posts .section-title",
);
fadeInUpOb.observe(recentPostSectionTitle);

const post = document.querySelector("#recent-posts .post-container");
fadeInUpOb.observe(post);

const contactUs = document.querySelector("#contact-us");
const footerLogo = document.querySelector("#logo");
const openHour = document.querySelector("#open-hour");
fadeInLeftOb.observe(contactUs);
fadeInUpOb.observe(footerLogo);
fadeInRightOb.observe(openHour);

// Testimonials
const arrowLeft = document.querySelector("#arrow-left");
const arrowRight = document.querySelector("#arrow-right");
const quote1 = document.querySelector("#quote-1");
const quote2 = document.querySelector("#quote-2");

arrowLeft.addEventListener("click", () => {
    quote1.classList.toggle("hidden");
    quote1.classList.toggle("animate__bounceIn");
    quote2.classList.toggle("hidden");
    quote2.classList.toggle("animate__bounceIn");
});

arrowRight.addEventListener("click", () => {
    quote1.classList.toggle("hidden");
    quote1.classList.toggle("animate__bounceIn");
    quote2.classList.toggle("hidden");
    quote2.classList.toggle("animate__bounceIn");
});
