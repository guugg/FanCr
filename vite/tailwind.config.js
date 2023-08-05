/** @type {import('tailwindcss').Config} */
export  default {
  content: [
    "../*.php",
    "../app/*.php",
    "../parts/*.php",
    "../template/*.php",
    "../component/*.php",
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
    "./vue/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

