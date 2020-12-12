module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true
  },
  purge: [
    "../**.php",
    "../**/**.php",
    "./src/js/**.js"
  ],
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
}
