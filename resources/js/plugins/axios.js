import axios from 'axios';

const AxiosPlugin = {
  install(app) {
    app.config.globalProperties.$axios = axios;
  },
};

export default AxiosPlugin;
