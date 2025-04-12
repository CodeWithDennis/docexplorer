/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: [
        // Framework colors - using arbitrary value syntax
        'border-[#ff2d20]', 'text-[#ff2d20]', 'bg-[#ff2d20]', 'from-[#ff2d20]', 'to-[#ff2d20]', 'hover:bg-[#ff2d20]', 'hover:text-[#ff2d20]',
        'border-[#f47316]', 'text-[#f47316]', 'bg-[#f47316]', 'from-[#f47316]', 'to-[#f47316]', 'hover:bg-[#f47316]', 'hover:text-[#f47316]',
        'border-[#fb70a9]', 'text-[#fb70a9]', 'bg-[#fb70a9]', 'from-[#fb70a9]', 'to-[#fb70a9]', 'hover:bg-[#fb70a9]', 'hover:text-[#fb70a9]',
        'border-[#3b82f6]', 'text-[#3b82f6]', 'bg-[#3b82f6]', 'from-[#3b82f6]', 'to-[#3b82f6]', 'hover:bg-[#3b82f6]', 'hover:text-[#3b82f6]',
    ],
    theme: {
        extend: {
            animation: {
                'float': 'float 3s ease-in-out infinite',
                'power-up': 'power-up 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%': { transform: 'translateY(-10px)' },
                },
                'power-up': {
                    '0%': {
                        opacity: '0',
                        transform: 'scale(0.3) translateY(100px)',
                        filter: 'brightness(2)',
                    },
                    '50%': {
                        opacity: '1',
                        transform: 'scale(1.2) translateY(-20px)',
                        filter: 'brightness(1.5)',
                    },
                    '75%': {
                        transform: 'scale(0.9) translateY(10px)',
                        filter: 'brightness(1.2)',
                    },
                    '100%': {
                        transform: 'scale(1) translateY(0)',
                        filter: 'brightness(1)',
                    }
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
