import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/scss/app.scss",
                "resources/scss/custom-pagination.scss",
                "resources/scss/partials/footer.scss",
                "resources/scss/partials/navbar.scss",
                "resources/scss/components/button.scss",
                "resources/scss/components/featured-product.scss",
                "resources/scss/components/recent-post.scss",
                "resources/scss/pages/about.scss",
                "resources/scss/pages/welcome.scss",
                "resources/scss/pages/posts/index.scss",
                "resources/scss/pages/posts/show.scss",
                "resources/scss/pages/products/index.scss",
                "resources/scss/pages/products/show.scss",
                "resources/js/app.js",
                "resources/js/observerAnimation.js",
                "resources/js/welcome.js",
            ],
            refresh: true,
        }),
    ],
});
