/** @type {import('tailwindcss').Config} */
export const content = [
  './src/**/*.{html,js}',
  './index.php'
];
export const theme = {
  extend: {
    backgroundImage: {
      'background-main': 'url("../assets/images/background-main.jpg")',
    },
    colors: {
      'second': '#181C21',
      'main': '#BAA360',
    },
    fontFamily: {
      roboto: ['Roboto', 'sans-serif'],
    },
  },
};
export const plugins = [
  require('tailwindcss'),
  require('autoprefixer'),
];