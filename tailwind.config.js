/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                // Brand tokens for Bypass Grill, pulled from the smoked-meat / char / corn-rice
                // color world in the shop's own menu photography.
                char: {
                    DEFAULT: '#1B1410', // deep charcoal-brown, the char on the ribs
                    light: '#2A211B',
                    soft: '#3A2E25',
                },
                ember: {
                    DEFAULT: '#C4531A', // burnt-orange ember / bbq glaze
                    light: '#E07A3C',
                    dark: '#8F3B10',
                },
                corn: {
                    DEFAULT: '#E8B23D', // the yellow rice / buttered corn
                    light: '#F2CD73',
                },
                sauce: {
                    DEFAULT: '#6B1E1E', // deep bbq sauce maroon
                    light: '#8C2C2C',
                },
                paper: '#F4ECD8', // butcher paper cream
                smoke: '#B8A990', // muted warm grey for secondary text on dark
            },
            fontFamily: {
                display: ['"Staatliches"', 'cursive'],
                body: ['"Work Sans"', 'sans-serif'],
            },
            boxShadow: {
                ember: '0 12px 30px -10px rgba(196, 83, 26, 0.45)',
            },
        },
    },
    plugins: [],
}
