import Vue from 'vue';
import Queues from './components/Queues.vue';
import Events from './components/Events.vue';

Vue.component('queues', Queues);
Vue.component('events', Events);

const app = new Vue({
    el: '#app',
});
