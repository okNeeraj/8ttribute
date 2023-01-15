import { build, defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import purge from '@erbelion/vite-plugin-laravel-purgecss'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/Template/scss/app.scss',
                'resources/Template/js/app.js',
            ],
            // refresh: true,
            refresh: [
                'resources/Template/routes/**',
                'routes/**',
                'resources/Template/views/**',
            ],
        }),
    ],
    build: {
        plugins: [
            purge({
                templates: ['paths', 'resources/Template/views/**/*.blade.php']
                // paths: 'resources/Template/views/**/*.blade.php'
            }),
        ],
        cssCodeSplit : true
    },
    resolve: {
        alias: {
            '@': '/resources/Template',
        },
    },
    css: {
        devSourcemap: true,
    }
});
