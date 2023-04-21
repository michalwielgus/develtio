// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
    },

    fontFamily: {
      sans: ['Lato', 'sans-serif'],
      headings: ['Quicksand', 'sans-serif'],
    },
  },
  plugins: [],
};
