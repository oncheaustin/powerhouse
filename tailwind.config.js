/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        inter: "Inter",
        ledger: "Ledger",
        inknut:['Inknut Antiqua']
      }
    },
  },
  plugins: [],
}

