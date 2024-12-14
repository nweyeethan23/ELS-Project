import { createRouter, createWebHistory } from 'vue-router';
import HomePage from '../components/HomePage.vue';
import AboutPage from '../components/AboutPage.vue';
import ServicesPage from '../components/CoursesPage.vue';
import ContactPage from '../components/ContactPage.vue';
import LoginPage from '../components/LoginPage.vue';
import RegisterPage from '../components/RegisterForm.vue';
import AdminPage from '../components/admin/course/AdminPage.vue';
import CourseForm from '../components/admin/course/CourseForm.vue';
import EditCourse from '../components/admin/course/EditCourse.vue';
import ContactList from '../components/admin/ContactList.vue';
import ApplyCourses from '../components/admin/ApplyCourses.vue';

const routes = [
    { path: '/', component: HomePage },
    { path: '/about', component: AboutPage },
    { path: '/courses', component: ServicesPage },
    { path: '/contact', component: ContactPage },
    { path: '/login', component: LoginPage },
    { path: '/register', component: RegisterPage },
    { path: '/admin', component: AdminPage , name: 'courses-list'},
    { path: '/admin/course', component: CourseForm },
    { path: '/admin/course/edit/:id', name: 'edit-course',component: EditCourse, props: true },
    { path: '/admin/contact/list', component: ContactList },
    { path: '/admin/apply/courses', component: ApplyCourses },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
