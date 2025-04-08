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
        // Blue color for "All Frameworks" option
        'border-[#3b82f6]', 'text-[#3b82f6]', 'bg-[#3b82f6]', 'from-[#3b82f6]', 'to-[#3b82f6]', 'hover:bg-[#3b82f6]', 'hover:text-[#3b82f6]',
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
