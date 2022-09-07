const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:
            {
                "primary": {
                        100: "#cee0cc",
                        200: "#9ec299",
                        300: "#6da366",
                        400: "#3d8533",
                        500: "#0c6600",
                        600: "#0a5200",
                        700: "#073d00",
                        800: "#052900",
                        900: "#021400"
                },
                "secondary": {
                        100: "#e0ccd0",
                        200: "#c299a1",
                        300: "#a36672",
                        400: "#853343",
                        500: "#660014",
                        600: "#520010",
                        700: "#3d000c",
                        800: "#290008",
                        900: "#140004"
                },
                "tertiary": {
                        100: "#dacccf",
                        200: "#b5999f",
                        300: "#91666e",
                        400: "#6c333e",
                        500: "#47000e",
                        600: "#39000b",
                        700: "#2b0008",
                        800: "#1c0006",
                        900: "#0e0003"
                },
                "text-secondary": {
                        100: "#ccdbe0",
                        200: "#99b8c2",
                        300: "#6694a3",
                        400: "#337185",
                        500: "#004d66",
                        600: "#003e52",
                        700: "#002e3d",
                        800: "#001f29",
                        900: "#000f14"
                },
                "text-primary": {
                        100: "#ccd7da",
                        200: "#99afb5",
                        300: "#668691",
                        400: "#335e6c",
                        500: "#003647",
                        600: "#002b39",
                        700: "#00202b",
                        800: "#00161c",
                        900: "#000b0e"
                },
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')],
};
