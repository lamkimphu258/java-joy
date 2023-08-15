const fadeInUpOb = new IntersectionObserver((payload) => {
    if (payload[0].isIntersecting) {
        payload[0].target.classList.add("animate__fadeInUp");
        fadeInUpOb.unobserve(payload[0].target);
    }
});

const fadeInLeftOb = new IntersectionObserver((payload) => {
    if (payload[0].isIntersecting) {
        payload[0].target.classList.add("animate__fadeInLeft");
        fadeInUpOb.unobserve(payload[0].target);
    }
});

const fadeInRightOb = new IntersectionObserver((payload) => {
    if (payload[0].isIntersecting) {
        payload[0].target.classList.add("animate__fadeInRight");
        fadeInUpOb.unobserve(payload[0].target);
    }
});

export { fadeInUpOb, fadeInRightOb, fadeInLeftOb };
