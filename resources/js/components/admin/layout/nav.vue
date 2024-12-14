<template>
     <nav class="main-header navbar navbar-expand navbar-white navbar-light justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item d-none d-sm-inline-block" v-if="isAuthenticated">
                    <button @click="logout" class="nav-link btn btn-primary text-white">Logout</button>
                </li>
            </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <span v-if="isAuthenticated" class="brand-text font-weight-light">{{ admin.name }}</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                      <router-link to="/admin" class="nav-link " :class="{ active: $route.path === '/admin' || $route.path.startsWith('/admin/course') }">Course</router-link>
                    </li>
                    <li class="nav-item mt-3">
                      <a  @click="checkNoti" class="nav-link position-relative" :class="{ active: $route.path === '/admin/contact/list' }">Contact Info noti

                        <span class="position-absolute start-90 translate-middle badge rounded-pill bg-danger">
                          {{ count }}
                        </span>
                      </a>
                    </li>
                    <li class="nav-item mt-3">
                      <router-link to="/admin/apply/courses" class="nav-link " :class="{ active: $route.path === '/admin/apply/courses' }">Apply courses</router-link>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
</template>
<script>
export default {
  name: 'AdminNav',
  data() {
    return {
      admin: JSON.parse(localStorage.getItem('admin')),
      count:'',
    };
  },
  computed: {
    isAuthenticated() {
      return this.admin !== null;
    },
  },
  mounted() {
    this.fetchContact();
  },
  methods:{
    async fetchContact() {
      try {
        const response = await axios.get('/admin/contact/getlist');
        this.count = response.data.count;
      } catch (error) {
        console.error('There was an error fetching the courses:', error);
      }
    },
    async logout(){
        try {
          const response = await axios.post('/admin/logout');
          if(response.data.message == 'success'){
              localStorage.removeItem('admin');
              window.location.href = '/login';
          }
        } catch (error) {
          console.log(error);
        }
      },
      async checkNoti(){
        try {
          const response = await axios.get('/admin/contact/update');
          window.location.href = '/admin/contact/list'; 
          
        } catch (error) {
          console.log(error);
        }
      }
  }
 
};

</script>
