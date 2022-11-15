const dotenv = require("dotenv");
dotenv.config();
module.exports = {
    plugins: {
        "postcss-import": {},
        "tailwindcss/nesting": {},
        tailwindcss: {},
        autoprefixer: {},
        ...(process.env.APP_ENV === "production" ? { cssnano: {} } : {}),
    },
};
