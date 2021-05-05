const defaultTheme = require('tailwindcss/defaultTheme');
// const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
                DEFAULT: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
                md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
                lg: '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
                xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
                '2xl': '0 2px 10px -2px rgba(0, 0, 0, 0.6)',
                '3xl': '0 30px 50px -12px rgba(0, 0, 0, 0.7)',
                inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
                none: 'none'
            },
            scale: {
                '120': '1.15'
            }
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            gray: {
                lightest: '#E5E7EB',
                light: '#9CA3AF',
                DEFAULT: '#4B5563',
                dark: '#1F2937',
            },
            blue: {
                lightest: '#BFDBFE',
                light: '#60A5FA',
                DEFAULT: '#2563EB',
                dark: '#1E40AF',
            },
            purple: {
                lightest: '#E9D5FF',
                light: '#C084FC',
                DEFAULT: '#9333EA',
                dark: '#6B21A8',
            },
            indigo: {
                lightest: '#C7D2FE',
                light: '#818CF8',
                DEFAULT: '#4F46E5',
                dark: '#3730A3',
            },
            green: {
                lightest: '#BBF7D0',
                light: '#4ADE80',
                DEFAULT: '#16A34A',
                dark: '#16A34A',
            },
            yellow: {
                lightest: '#FEF08A',
                light: '#FACC15',
                DEFAULT: '#CA8A04',
                dark: '#854D0E',
            },
            red: {
                lightest: '#FECACA',
                light: '#F87171',
                DEFAULT: '#DC2626',
                dark: '#991B1B',
            },
            black: {
                DEFAULT: '#000000',
            },
            white: {
                DEFAULT: '#FFFFFF',
            },
            primary: {
                light: '#E2E8F0',
                DEFAULT: '#1E293B',
                hover: '#475569',
            },
            secondary:{
                light: '#C7D2FE',
                DEFAULT: '#6366F1',
                hover: '#4338CA',
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
