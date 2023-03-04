const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundColor: {
              'dark': '#914949',
              'custom': '#FF4066',
              'gray-custom': '#30333A',
              'gray-custom-two': '#1F292B',
            },
            textColor: {
              'custom': '#FF916C',
              'custom-clarity': '#FDB869',
              'custom-text-clarity': '#FC9968',
            },
            colors: {
              'custom-piel' : '#FECFA5',
              'custom-rose' : '#F16E7C',
              'custom-purple' : '#4E4376',
              'custom-blue' : '#2B5876',
              'custom-sky' : '#8DC6FF',
              'custom-pink' : '#DFC4FF',
              'custom-pink-secondary' : '#FEC1E9',
              'custom-purple-secondary' : '#A18CCF',
              'custom-purple-2' : '#D261E4',
              'custom-blue-2' : '#6F9ED8',
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
