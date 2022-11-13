import { defineConfig, loadEnv } from "vite";
import laravel from "laravel-vite-plugin";
import fs from "fs";
const path = require("path");

export default ({ mode }) => {
    // Load env file based on `mode` in the current working directory.
    // Set the third parameter to '' to load all env regardless of the `VITE_` prefix.
    const env = loadEnv(mode, process.cwd(), "");
    const host = env.APP_URL.replace(/(^\w+:|^)\/\//, "");
    return defineConfig({
        // vite config
        server: {
            host: "app",
            hmr: { host: host },
            https: {
                key: fs.readFileSync(`./docker/nginx/ssl/${host}.key`),
                cert: fs.readFileSync(`./docker/nginx/ssl/${host}.crt`),
            },
        },
        resolve: {
            alias: {
                "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
            },
        },
        plugins: [
            laravel({
                input: ["resources/js/app.js"],
                refresh: true,
            }),
        ],
    });
};
