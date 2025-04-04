// tailwind.config.js
module.exports = {
  content: [
    "./src/**/*.{html,js,php,jsx,ts}",
    "./node_modules/flowbite/**/*.js",
  ],
  
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')({
      datatables: true,

      }),]
}
