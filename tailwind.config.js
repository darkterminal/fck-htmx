/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {},
  },
  daisyui: {
    themes: ["light", "night"],
  },
  plugins: [
    require("@tailwindcss/typography"),
    require("daisyui")
  ],
}
