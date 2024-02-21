/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary: '#0083C9',
        secondary: '#00B4E5',
        btnsec: '#E0E0E0',
        backcolor: '#FAFAFA',
        primaryDark: '#006699',
        herotext: '#01679B',
        secondaryDark: '#0088b3',
        tooltipBg: '#00aaff',
        colorText: '#363636',
        iconColor: '#909090'
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

