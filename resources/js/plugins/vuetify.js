import '@mdi/font/css/materialdesignicons.css'
import 'vuetify/styles'

const vuetify = createVuetify({
  ssr: true,
  theme: {
    themes: {
      light: {
        dark: false,
        colors: {
          primary: colors.teal, // #E53935
        }
      },
    },
  },
})
