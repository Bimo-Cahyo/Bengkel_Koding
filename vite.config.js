import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
=======
<<<<<<< HEAD
import tailwindcss from '@tailwindcss/vite';
=======
>>>>>>> c9393ac (ke-3)
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
=======
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
=======
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
<<<<<<< HEAD
=======
>>>>>>> c9393ac (ke-3)
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
    ],
});
