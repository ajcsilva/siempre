// https://tailwindcss.com/docs/configuration
import type { Config } from 'tailwindcss';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

export default {
  content: [
    './app/**/*.php',
    './resources/**/*.{php,js,ts,tsx,vue}',
    './resources/views/**/*.php',
    './public/content/themes/radicle/index.php',
  ],
  theme: {
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      fontFamily: {
        'joly-headline': ['joly-headline', 'serif'],
        forma: ['forma-djr-display', 'sans-serif'],
      },
    },
  },
  plugins: [forms, typography],
} satisfies Config;
