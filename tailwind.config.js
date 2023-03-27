/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      lineHeight: {
        '5.5': '1.375rem',
        '6.1': '1.563rem',
        '6.2': '1.875rem',
        '4.1': '1.063rem',
      },
      letterSpacing: {
        'wide-3': '.03em',
        'wide-2': '.02em',
        'wide-1': '.01em',
      },
      fontSize:{
        'xl-1.5': '1.375rem',
      },
      colors: {
        'mountain': '#5A696A',
        'white-gray': '#EBF6F6',
        'white-gray-2': '#DCE5E6',
        'aside-bg': '#E4F6F8',
        'steam': '#DDDDDD',
        'black-gray': '#4F5555',
        'gray-light': '#7B7F80',
        'hatteras-gray': '#949E9E',
        'waterpark': '#C8E2E3',
        'bathgreen': '#0B646B',
        'vapro': '#F2FEFF',
        'distant': '#F3F9FA',
        'silver-mistral': '#B4BBBB',
        'silver-super': '#EEEEEE',
        'cold-front-green': '#81B1B4',
        'sparking': '#F4FFFF',
        'dr-white': '#FAFAFA',
        'pink-zahri': '#EF7272',
        'separator': 'rgba(220, 229, 230, 0.4)',
        'bg-otp': 'rgba(1, 33, 32, 0.6)',
        'btn-icon': 'rgba(0, 0, 0, 0.24)',
        'input-border': 'rgba(220, 229, 230, 1)',
        'input-w-border': 'rgba(90, 105, 106, 0.6)',
        'input-header': 'rgba(11, 100, 107, 0.24)',
        'bg-top': 'rgba(71, 208, 218, 1)',
        'bg-bottom': 'rgba(11, 100, 107, 1)',
        'input-placeholder': '#393E46',
        
      },
      width: {
        'container': 'calc(100% - 256px)',
        'container-2': 'calc(100% - 128px)',
        'container-3': 'calc(100% - 352px)',
        '11/12.5': '93%',
      },
      height: {
        '14.8': '60px',
        '5.5': '22px',
      },
      maxHeight: {
        'calc': 'calc(100vh - 104px)',
      },
      margin: {
        '4.5': '18px',
        '5.5': '22px',
        '26': '104px',
      },
      padding: {
        '12.2': '52px',
        '4.5': '18px',
        '8.5': '34px',
      },
      borderWidth: {
        '0.5': '0.5px',
      },
      borderRadius: {
        '4xl': '32px',
        '1.5xl': '14px',
      },
      boxShadow: {
        'shadow-otp': 'rgba(255, 255, 255, 1)',
        'shadow-table': '0px 12px 24px rgba(11, 100, 107, 0.04)',
      },
      screens: {
        'extra-sm': '520px',
      },
      
    },
  },
  plugins: [],
}