/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                lightGreen: "#BFFFBA",
                normalGreen: "#2FB866",
                blackGreen: "#161E14",
                lightBrown: "#D8BE9F",
                lightBlue: "#A4B9EE",
                lightGrey: "#D1D1D1",
            },
            fontFamily: {
                poppins: ["Poppins", "sans"],
                beVietnam: ["Be Vietnam Pro", "sans-serif"],
            },
        },
    },
    plugins: [],
};
