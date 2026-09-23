import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { bunny } from "laravel-vite-plugin/fonts";
import tailwindcss from "@tailwindcss/vite";
import path from 'path';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",

                // JS
                "resources/js/entrypoints/app.ts",
                "resources/js/entrypoints/development/javascript-test.ts",
            ],
            refresh: true,
            fonts: [
                bunny("Instrument Sans", {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
        vue(),
    ],
    server: {
        host: "0.0.0.0",
        port: 5173,
        hmr: {
            host: "localhost",
            port: 5173, // ← 追加
            clientPort: 5173, // ← 明示的に指定(念のため両方書くと確実)
        },
        watch: {
            usePolling: true,
            interval: 300,
            ignored: ["**/storage/framework/views/**"],
        },
    },
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        },
    },
});
