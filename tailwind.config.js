/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.{html,js}"],
  theme: {

    screens: {
      'mobile': '700px',
    },

    fontFamily: {
      inter: ['inter', 'sans-serif'],
      roboto: ['roboto', 'serif'],
    },
    extend: {
      colors: {
        'blue': '#004C93',
        'white': '#ffffff',
        'light-blue': '#F3FBFF',
      },
      content: {
        'contBurger': "+",
      },

      backgroundImage: {
        'burger': "url('../img/burger.svg')",
      },

      backgroundSize: {
        '38': '38px',

        width: {
          nav: "63%",
          container: "1150px",
          contMob: "605px",
          "50": "200px",
        },

        height: {
          "112": "448px",
          "75.5": "290px",
        },

        margin: {
          "38": "150px",
        },

        padding: {
          "2.75": "11px",
          "10.75": "43px",
        },

      },
    },
    plugins: [],
  }
}

