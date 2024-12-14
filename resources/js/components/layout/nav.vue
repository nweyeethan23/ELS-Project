<template>
    <nav class="navbar navbar-expand-lg fixed-top bg-light nav-main">
      <div class="container-fluid">
        <router-link to="/" class="navbar-logo">
          <img src="/image/logo2.png" alt="g1" class="logo" width="100px" >
        </router-link>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <router-link to="/" class="nav-link " :class="{ active: $route.path === '/' }">HOME</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/about" class="nav-link" :class="{ active: $route.path === '/about' }">ABOUT US</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/courses" class="nav-link" :class="{ active: $route.path === '/courses' }">COURSES</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/contact" class="nav-link" :class="{ active: $route.path === '/contact' }">CONTACT US</router-link>
            </li>
            
          </ul>
        </div>
            <span class="nav-link" v-if="isAuthenticated">{{ user.email }}</span>
            <button class="btn btn-outline-primary" @click="loginClick" v-else>Login</button>
            <button  class="btn btn-outline-warning" @click="logout"  v-if="isAuthenticated">Logout</button>
      </div>
    </nav>
    
</template>
  
  <script>
  export default {
    name: 'Navbar',
    data() {
      return {
        user: JSON.parse(localStorage.getItem('user')),  // Retrieve user from localStorage
      };
    },
    computed: {
      isAuthenticated() {
        return this.user !== null;  // Check if user is logged in
      },
    },
    methods:{
      async logout(){
        try {
          const response = await axios.post('/user/logout');
          if(response.data.message == 'success'){
            localStorage.removeItem('user');
            window.location.href = '/';
          }
        } catch (error) {
          console.log(error);
        }
      },
      loginClick() {
        window.location.href = '/login'; 
      },
    }
   
  };
  
  </script>
  <style scoped>
  .nav-main{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.07), 0 6px 20px 0 rgba(0, 0, 0, 0.07);
    padding-right: 50px;
    padding-left: 50px;
  }
  .nav-main .nav-link {
        margin-left: 30px;
        margin-right: 30px;
    }

  .nav-main .nav-link:hover:before  {
     width: 50px;
  }
  .nav-main .nav-link:before {
        content: "";
        position: absolute;
        width: 0;
        height: 3px;
        bottom: 25px;
        background-color: orange;
        transition: .2s all;
    }

    .nav-main .nav-link.active {
      color:orange;
      font-weight: bold;
  }

</style>
  
 