module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    presets: [require("@acmecorp/base-tailwind-config")],
    theme: {
        colors: {
            "black-birent": "#0f032e",
            "primary-birent": "#3237d2",
            "primary-birent-hover": "#4045e7",
            "cta-login-birent": "#162F89",
            "google-primary": "#D52531",
            "google-hover-secondary": "#C11722",
            "text-primary-white": "#ffffff",
            "ratting-primary": "#3237d2",
            "text-error-notification": "#C70815",
            "gray-birent": "#e5e7eb",
            "gray-primary": "#7F8C9F",
            "text-primary": "#162F89",
            "tables-primary": "rgb(1, 26, 87)",
            "button-delete-primary": "rgb(192, 5, 5)",
            "hover-button-delete-primary": "rgb(134, 2, 2)",
            "button-add-primary": "rgb(1, 26, 87)",
            "hover-button-add-primary": "rgb(8, 59, 189)",
            "button-red": "#D52531",
            "button-red-hover": "#b71e28",
            "primary-birent-dark": "#162F89",
        },
        extend: {
            height: {
                45: "45rem",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
