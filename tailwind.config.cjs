/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            animation: {
                'float': 'float 3s ease-in-out infinite',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%': { transform: 'translateY(-10px)' },
                }
            },
            colors: {
                'background': '#1A1A2E',
            },
            fontFamily: {
                'press-start': ['"Press Start 2P"', 'cursive'],
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
