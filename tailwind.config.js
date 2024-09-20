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
            sans: ['Montserrat', 'sans-serif'],
            heading: ['Mulish', 'sans-serif']
        },
        colors: {
            orange: '#FBB13C',
            black: '#191919',
            lightGray: '#CAC6C6',
            whiteBackground: '#FBF8F4',
            purple: '#B8AFDA',
            red: '#FB5E3C',
        }
    },
  },
  plugins: [],
}

