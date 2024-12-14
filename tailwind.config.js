/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            keyframes: {
                typing: {
                    "0%": {
                        width: "0%",
                        visibility: "hidden"
                    },
                    "100%": {
                        width: "100%"
                    }  
                },
                blink: {
                    "50%": {
                        borderColor: "transparent"
                    },
                    "100%": {
                        borderColor: "white"
                    }  
                }
            },
            animation: {
                typing: "typing 2s steps(20) infinite alternate, blink .7s infinite"
            }
        },
        colors: {
            "a-pink": "e6618c",
            "a-green": "2aa451",
            "a-purple": "6d5fb4",
        },
    },
    plugins: [
        require("flowbite/plugin")({
            charts: true,
        }),
    ],
};
