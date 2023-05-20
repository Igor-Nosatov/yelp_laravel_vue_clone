
import './bootstrap';

import {createApp} from 'vue'
import { createPinia } from 'pinia'

import App from './layouts/App.vue'
import router from './routing/router'

// Vuetify
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

import '@mdi/font/css/materialdesignicons.css';
import 'vuetify/dist/vuetify.min.css';

const vuetify = createVuetify({
    components,
    directives,
  })

const vue = createApp(App);

vue.use(createPinia());
vue.use(router());
vue.use(vuetify);
vue.mount('#app');
