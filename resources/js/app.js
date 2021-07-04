require('./bootstrap');
window.Vue = require('vue');

import Datepicker from 'vuejs-datepicker';
import VueMask, {VueMaskDirective} from 'v-mask';
import Vue from 'vue';
import Snotify, { SnotifyPosition } from 'vue-snotify'

require('./Components');

Vue.use(VueMask, Snotify, {
  toast: {
    timeout: 3000,
    showProgressBar: true,
    position: SnotifyPosition.right
  }
});

Vue.config.productionTip = false

export default {
  el: '#app',
  components: {
    Datepicker,
  }
}