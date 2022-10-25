/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'custom-blue': '#220068',
        'custom-green': '#00BC13',
        'green-hover': '#0aad1b',
        'custom-orange': '#EF9A47'
      }
    },
  },
  plugins: [
  ],
}
