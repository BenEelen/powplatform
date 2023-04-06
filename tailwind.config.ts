// https://tailwindcss.com/docs/configuration
import type { Config } from 'tailwindcss';
import forms from '@tailwindcss/forms';

export default {
  content: [
    './app/**/*.php',
    './resources/**/*.{php,js,ts,vue}',
    './resources/views/**/*.php',
    './public/content/themes/radicle/index.php',
  ],
  theme: {
    extend: {
      colors: {},
    },
  },
  plugins: [
    forms,
  ],
} satisfies Config;
