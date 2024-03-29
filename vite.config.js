import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/main.min.css', 'resources/js/app.js','resources/js/script.js','resources/css/hamburgers.css','resources/js/cards.js'],
            refresh: true,
        }),
    ],
});
