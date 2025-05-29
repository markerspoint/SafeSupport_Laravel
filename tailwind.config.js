import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                safegreen: '#0b6043', // ← your custom color
            },

            // Add this block for fluid font sizes
            fontSize: {
                'fluid-xl': 'clamp(1.75rem, 5vw, 3.75rem)',
                'fluid-lg': 'clamp(1.5rem, 4vw, 3rem)',
                'fluid-md': 'clamp(1.25rem, 3vw, 2.5rem)',
            },

            screens: {
                'navbreak': '920',
            },
        },
    },

    plugins: [forms],
};
