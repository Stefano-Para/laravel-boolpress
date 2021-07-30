window.Vue = require('vue');
// import globale di axios
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import App from './App.vue';

const app = new Vue(
    {
        el: '#root',
        render: h => h(App)
    }
);