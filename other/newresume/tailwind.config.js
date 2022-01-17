const plugin = require('tailwindcss/plugin')
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    fontFamily: {
      sans: ['Noto Sans TC', 'sans-serif'],
      serif: ['Noto Serif Display', 'serif'],
    },
    screens: {
      
      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    }
    ,
    extend: {
      height: {
        '95vh': '95vh',
      },
      colors: {
        'navy': '#2c3e50',
        'orange': '#ff5c31',
      },

    },
    fontSize: {
      'xs': '.75rem',
      'sm': '.875rem',
      'tiny': '.875rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.875rem',
      '4xl': '2.25rem',
      '5xl': '3rem',
      '6xl': '4rem',
      '7xl': '5rem',
    },
    fontWeight: {
      hairline: 100,
      'extra-light': 100,
      thin: 200,
      light: 300,
      normal: 400,
      medium: 500,
      semibold: 600,
      bold: 700,
      extrabold: 800,
      'extra-bold': 800,
      black: 900,
    }
  },
  plugins: [
    plugin(function({ addBase, theme }) {
      addBase({
        'h1': { fontSize: theme('fontSize.2xl'), fontWeight: theme('fontWeight.black')},
        'h2': { fontSize: theme('fontSize.xl'), fontWeight: theme('fontWeight.extrabold') },
        'h3': { fontSize: theme('fontSize.lg'), fontWeight: theme('fontWeight.bold') },
        'h4': { fontSize: theme('fontSize.base'), fontWeight: theme('fontWeight.semibold') },
        'h5': { fontSize: theme('fontSize.sm'), fontWeight: theme('fontWeight.medium') },
        'h6': { fontSize: theme('fontSize.xs'), fontWeight: theme('fontWeight.normal') },
      })
    }),
    require('@tailwindcss/aspect-ratio'),

  ],
}