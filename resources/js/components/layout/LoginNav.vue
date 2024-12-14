<template>
    <nav class="navbar navbar-expand-lg fixed-top bg-light nav-main-login">
      <div class="container-fluid">
        <div class="navbar-logo">
          <img src="/image/logo2.png" alt="g1" class="logo" width="100px" @click="homeClick">
        </div>
      </div>
    </nav>
    
</template>
<script>
export default {
  methods:{
    homeClick() {
      window.location.href = '/'; 
    },
  }
 
};
</script>
<style scoped>
    .nav-main-login{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.07), 0 6px 20px 0 rgba(0, 0, 0, 0.07);
        margin-bottom: 100px;
    }
</style>
 