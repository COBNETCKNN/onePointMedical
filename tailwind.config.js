module.exports = {
    content: require('fast-glob').sync([
        './**/*.php'
    ]),
  theme: {
    screens: {
            'sm': '100%',
            'md': '100%',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1280px',
        },

    extend: {
      fontFamily: {
        'openSans': ['Open Sans'],
        'inter': ["Inter", "sans-serif"],
      },
      colors: {
        onePointRed: '#ff0000',
        onePointBrown: '#4b2323',

      },
    },
  },
  plugins: [],
}
