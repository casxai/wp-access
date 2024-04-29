/** @type {import('tailwindcss').Config} */
module.exports = {
content: ["./*.{php,html,js}","./templates/*.{php,html,js}","./includes/*.{php,html,js}"],
  theme: {
    extend: {
      fontFamily: {
        'outfit': ['"Outfit"', 'sans-serif'],
        'inter': ['"Inter"', 'sans-serif'],
      },
      colors: {
        'primary': '#0454C4',
        'primary-light': '#F0F9FC',
        'primary-dark': '#010F36',
        'secondary': '#067D57',
        'text-color': '#0B1324'
      },
      screens: {
        'mediumscreen': { 'max': '1366px' },
        'smallscreen': { 'max': '1280px' },
        'laptop': { 'max': '1199px' },
        'tablet': { 'max': '991px' },
        'mobile': { 'max': '480px' },
      },
    },
  },
  plugins: [
    require('daisyui'),
  ],
  theme: {
    extend: {
      fontFamily: {
        'outfit': ['"Outfit"', 'sans-serif'],
        'inter': ['"Inter"', 'sans-serif'],
      },
      colors: {
        'primary': '#0454C4',
        'primary-light': '#F0F9FC',
        'primary-dark': '#010F36',
        'secondary': '#067D57',
        'text-color': '#0B1324'
      },
      screens: {
        'mediumscreen': { 'max': '1366px' },
        'smallscreen': { 'max': '1280px' },
        'laptop': { 'max': '1199px' },
        'tablet': { 'max': '991px' },
        'mobile': { 'max': '480px' },
      },
    },
  },
  daisyui: {
    themes: false, // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
    darkTheme: "dark", // name of one of the included themes for dark mode
    base: true, // applies background color and foreground color for root element by default
    styled: true, // include daisyUI colors and design decisions for all components
    utils: true, // adds responsive and modifier utility classes
    prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
    logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
    themeRoot: ":root", // The element that receives theme color CSS variables
  },
}