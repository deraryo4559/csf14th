/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx}"],
  corePlugins: {
    preflight: false, // Tailwindのリセットを無効化（元のCSSを優先）
  },
  theme: {
    extend: {
      fontFamily: {
        noto: ["Noto Sans JP", "sans-serif"],
        inter: ["Inter", "sans-serif"],
        karla: ["Karla", "sans-serif"],
        makinas: ["makinas", "sans-serif"],
      },
    },
  },
  plugins: [],
};
