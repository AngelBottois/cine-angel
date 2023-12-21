/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.{html,php}',
  './assets/templates/*.{html,php}',
  './assets/js/*.{html,js}',
],
  theme: {
    extend: {
      maxWidth: {
        'screen-2xl': '1600px',
        'screen-xl': '1361px',
      },
      backgroundImage: {
        
      },
      colors: {
        fondohf: '#020510',
        fondo: '#0A031C',
        white: '#FFF',
      }
    },
    fontFamily: {
      'poppins': ['Poppins'],
    },
    fontSize:{
      precio: '60px',
      titulo: '50px',
      subtitulo: '40px',
      subtitulosmall: '30px',
      letra: '18px',
      letrasmall: '16px',
    },
    fontWidth:{
      normal: '400',
      bold: '700',
    },
    container: {
      center: true,
    },
    },
  plugins: [],
}

