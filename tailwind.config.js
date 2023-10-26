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
                nomralGreen: "#2FB866",
                blackGreen: "#161E14",
            },
            fontFamily: {
                poppins: ["Poppins", "sans"],
            },
        },
    },
    plugins: [],
};
