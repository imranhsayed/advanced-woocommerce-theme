module.exports = {
  purge: [
    // Paths to your templates...
    "../**.php",
    "../**/**.php",
    "./src/js/**.js"
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    maxWidth: {
      '1280': '1280px'
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
