<template>
    <div class="login-container container">
        <div class="row">
            <div class="col-md-8 offset-2 p-5">
                <div class="login-form-container">
                    <h1 class="text-center mb-5">Login</h1>
                    <form @submit.prevent="submitLogin">
                        <span class="fs-6 text-danger">{{ bothError }}</span>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input v-model="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required >
                            <div id="emailHelp" class="form-text text-danger">{{ errorEmail }}</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input v-model="password" type="password" class="form-control" id="password" aria-describedby="passwordHelp">
                            <div id="passwordHelp" class="form-text text-danger" >{{ errorPassword }}</div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mb-3">Submit</button>

                        <div class="mb-3">
                          <router-link to="/register" class="form-check-label" >Register Here</router-link>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
       
    </div>
</template>
<script>
export default {
    name: 'login',
    data() {
      return {
        email: '',
        password: '',
        errorEmail:'',
        errorPassword:'',
        bothError:''
      };
    },
  methods: {
    async submitLogin() {
      try {
        const response = await axios.post('/login', {
          email: this.email,
          password: this.password,
        });
        if (response.data.user.role === 'admin') {

          localStorage.setItem('admin', JSON.stringify(response.data.user));
          window.location.href = '/admin'; // Redirect to admin dashboard

        } 
        if (response.data.user.role === 'user') {

          localStorage.setItem('user', JSON.stringify(response.data.user));
          window.location.href = '/'; // Redirect to frontend user page
        }
      } catch (error) {
       // console.log(error.response);
        if(error.response && error.response.data.errors && error.response.data.errors.email){
            this.errorEmail = error.response.data.errors.email[0];
        }else{
            this.errorEmail = '';
        }
        if(error.response && error.response.data.errors && error.response.data.errors.password){
            this.errorPassword = error.response.data.errors.password[0];
        }else{
            this.errorPassword = '';
        }
        if(error.response && error.response.data.error){
            this.bothError = error.response.data.error;
        }else{
            this.bothError = '';
        }
      }
    },
  },
};
</script>

<style scoped>
 .login-container{
    margin-top: 120px;
 }
 .login-form-container{
    background: lightgray;
    border: 1px solid #ffa600f4;
    border-radius: 25px;
    padding: 70px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
 
</style>