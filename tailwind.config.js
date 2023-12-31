/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{php,js}", "./index.php"],
  theme: {
    extend: {
      fontFamily:{
        'inter':'Inter'
      },
      colors: {
        'primaryColor': '#00A9B8',
        // 'secondaryColor':'#03002C',
        'vektorColor':'#F9F6EE',
      },
      boxShadow: {
        'vektorShadow':'0px 4px 4px 2px rgba(0, 0, 0, 0.25)'
      },
      screens: {
        // => @media (max-width: 425px) untuk tampilan mobile
        'hp':{'max': '425px'}
      },
    },
  },
  plugins: [],
}

