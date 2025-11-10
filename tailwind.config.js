/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        // Thêm font Times New Roman
        times: ['"Times New Roman"', 'serif'],
      },
    },
  },
  plugins: [],
}
