import { createApp } from 'vue'
import test from './components/test.vue';
import test2 from './components/test2.vue';
import form from './components/Form.vue';

const app = createApp({
  components: {
    'test': test,
    'test2': test2,
    'form-vue': form
  }
});

app.mount('#app');

//require('./bootstrap');