/** @type {import('tailwindcss').Config} */

module.exports = {
    prefix: 'posthog-',
    darkMode: false, // or 'media' or 'class',
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
}
