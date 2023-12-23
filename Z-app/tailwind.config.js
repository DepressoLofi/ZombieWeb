/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
      extend: {
          colors: {
              'orange': '#FFA500',
              'lightorange': '',
              'navyblue': '#0000ff',
              'cnblue': '#1650c4',
              'banana': '#ffff00',
              'dirt': '#c4c416'
        }

    },
  },
  plugins: [],
}

