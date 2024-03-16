/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"

  ],
  theme: {
    extend: {},
  },
  "tailwindCSS.includeLanguages": {
    plaintext: "php",
  },

  plugins: [
    require('flowbite/plugin')
  ],
  darkMode: "class",
  theme: {
    extend: {
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
      colors :{
        'primary' :{
          100: '#044F02',
          200: '#066F04',
          300: '#0C8408',
          400: '#04A900'
        } ,
        'orange' : {
            100: '#FF4601',
            200: '#FE672F',
            300: '#FF7440',
            400: '#F9DBD0'
          } ,
          'dark' : {
            100: '#121212',
            200: '#232323',
            300: '#161616',
            400: '#232323',
          } ,
      }
    },
  },
};