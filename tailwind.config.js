/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./**/**/*.{php,js}"],
    theme: {
        extend: {
            colors: {
                primary: "#F8CC43",
                secondary: "#3A3A3A",
            },
            fontFamily: {
                roboto: ["Roboto", "sans-serif"],
                sans: ["Open Sans", "sans-serif"],
            }
        },
    },
    plugins: [],
}

