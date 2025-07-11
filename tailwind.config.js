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
      'primary': '#baa360',
      'second': '#181C21',
    },
    fontFamily: {
      chevrola: ['chevrola', 'sans-serif'],
      poppins: ['Poppins', 'sans-serif'],
    },
  },
};
export const plugins = [
  require('tailwindcss'),
  require('autoprefixer'),
];