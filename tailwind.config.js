/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/views/**/*.blade.php"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Oswald", "sans-serif"],
                mono: ["Inconsolata", "monospace"],
            },
            colors: {
                primaryColor: "#FFF2E6",
                primaryBlack: "#010101",
            },
        },
    },
    plugins: [],
};
