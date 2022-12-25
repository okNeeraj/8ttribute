import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import purge from '@erbelion/vite-plugin-laravel-purgecss'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/Dashboard/sass/app.scss',
                'resources/Dashboard/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
