const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'dgrey': '#2B2D42',
                'grey' : '#8D99AE',
                'lgrey': '#EDF2F4',
                'mred' : '#EF233C',
                'dred' : '#D90429',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
