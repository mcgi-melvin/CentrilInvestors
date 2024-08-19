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
                    primary: "#f4f4f4",
                    secondary: "#EAEAEA",
                    tertiary: "#d9d9d9"
                }
            },
            fontFamily: {
                roboto: ["Roboto", "sans-serif"],
                sans: ["Open Sans", "sans-serif"],
            }
        },
        screens: {
            'sm': '640px',
            // => @media (min-width: 640px) { ... }

            'md': '768px',
            // => @media (min-width: 768px) { ... }

            'mmd': '992px',
            // => @media (min-width: 992px) { ... }

            'lg': '1024px',
            // => @media (min-width: 1024px) { ... }

            'xl': '1280px',
            // => @media (min-width: 1280px) { ... }

            '2xl': '1440px',
            // => @media (min-width: 1536px) { ... }
        }
    },
    plugins: [],
}

