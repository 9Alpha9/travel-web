/** @type {import('tailwindcss').Config} */
module.exports = {
    purge: ["./resources/views/**/*.blade.php"],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            transparent: "transparent",
            "black-birent": "#0f032e",
            "primary-birent": "#3237d2",
            "primary-birent-hover": "#4045e7",
            "cta-login-birent": "#162F89",
            "google-primary": "#D52531",
            "google-hover-secondary": "#C11722",
            "text-primary-white": "#ffffff",
        },
    },
    plugins: [],
};
