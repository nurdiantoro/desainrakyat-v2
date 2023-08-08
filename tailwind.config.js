/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/views/**/*.{html,js,php}"],
    theme: {
        container: {
            center: true,
            padding: '8rem',
        },
        extend: {
            colors: {
                'warna-01': '#3A77BB',
                'warna-02': '#40BFEF',
                'warna-03': '#F26921',

                'black-45': '#8C9194',
                'black-60': '#6C6C6C',
                'black-90': '#363535',
                'white-01': '#EDFBFF',

                'tokopedia': '#84C468',
                'whatsapp': '#0DC143',
                'youtube': '#E62117',
            },
            dropShadow: {
                // DEFAULT: '0px 4px 4px rgba(0, 0, 0, 0.25)',
                // 'md': '0px 4px 20px rgba(0, 0, 0, 0.25)',
                // 'sm': '10px 10px 40px rgba(0, 0, 0, 0.05)',
                '01': '0px 10px 15px rgba(181, 205, 218, 0.18)'
            },
        },
    },
    plugins: [],
}
