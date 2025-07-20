import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    optimizeDeps: {
        include: ["gsap", "gsap/ScrollTrigger", "gsap/TextPlugin", "gsap/ScrollToPlugin", "sweetalert2", "aos"],
      },
      build: {
        rollupOptions: {
          output: {
            manualChunks: {
              gsap: ["gsap", "gsap/ScrollTrigger", "gsap/TextPlugin", "gsap/ScrollToPlugin"],
              vendor: ["sweetalert2", "aos"],
            },
          },
        },
      },
    server: {
        cors: true,
    },
});