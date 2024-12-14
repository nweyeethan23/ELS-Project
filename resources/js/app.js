import $ from 'jquery';
window.$ = window.jQuery = $;
import 'admin-lte/dist/css/adminlte.min.css'; // AdminLTE CSS
import 'admin-lte/dist/js/adminlte.min.js'; // AdminLTE JS
import 'admin-lte';       
import './bootstrap';
import '../css/style.css'; // AdminLTE JS
import Swal from 'sweetalert2'
import { createApp } from 'vue';
import router from './router';
import { MotionPlugin } from '@vueuse/motion'
import NavComponent from './components/layout/nav.vue';
import FooterComponent from './components/layout/footer.vue';
import AdminNav from './components/admin/layout/nav.vue';
import LoginNav from './components/layout/LoginNav.vue';


const app = createApp({});
app.use(router);
app.use(MotionPlugin)
app.component('nav-component', NavComponent);
app.component('footer-component', FooterComponent);
app.component('admin-nav', AdminNav);
app.component('login-nav', LoginNav);
window.Swal = Swal;

app.mount('#app');
