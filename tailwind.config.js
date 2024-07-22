/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./**/**/*.{php,js}"],
    theme: {
        container: {
            center: true
        },
        extend: {
            colors: {
                primary: "#F8CC43",
                secondary: "#3A3A3A",
                gray: {
                    light: "#f4f4f4"
                }
            },
            fontFamily: {
                roboto: ["Roboto", "sans-serif"],
                sans: ["Open Sans", "sans-serif"],
            }
        },
    },
    plugins: [],
}

