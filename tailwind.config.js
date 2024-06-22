module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {
        colors: {
          primary: '#065f46'
        }
      },
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }