/** @type {import('tailwindcss').Config} */
module.exports = {
    purge: {
        content: [
            './resources/views/*.blade.php',
            './resources/views/**/*.blade.php',
            './resources/js/*.vue',
            './resources/js/**/*.vue',
            './resources/css/*.css',
        ],
    },
    theme: {
        extend: {},
    },
    plugins: [require("tailwindcss-animated")],
};
