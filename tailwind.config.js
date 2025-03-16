/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: [
                    "Instrument Sans",
                    "ui-sans-serif",
                    "system-ui",
                    "sans-serif",
                ],
            },
            colors: {
                primary: {
                    50: "#eff6ff", // Biru sangat muda
                    100: "#dbeafe", // Biru muda
                    200: "#bfdbfe", // Biru sedikit lebih gelap
                    300: "#93c5fd", // Biru medium
                    400: "#60a5fa", // Biru cerah
                    500: "#3b82f6", // Biru standar
                    600: "#2563eb", // Biru lebih gelap
                    700: "#1d4ed8", // Biru tua
                    800: "#1e40af", // Biru sangat tua
                    900: "#1e3a8a", // Biru pekat
                },
            },
        },
    },
    plugins: [],
};

