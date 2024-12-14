<template>
    <div class="container register-container">
        <div class="register-form">
        <h2>Create an Account</h2>
        <form @submit.prevent="submitForm">
            <div class="form-group">
            <label for="name">Name</label>
              <input type="text" v-model="formData.name" id="name" required />
              <div class="form-text text-danger">{{ errorName }}</div>
            </div>
            <div class="form-group">
            <label for="email">Email</label>
              <input type="email" v-model="formData.email" id="email" aria-describedby="emailHelp" required />
              <div id="emailHelp" class="form-text text-danger">{{ errorEmail }}</div>
            </div>
            <div class="form-group">
            <label for="password">Password</label>
              <input type="password" v-model="formData.password" id="password" required />
              <div id="passwordHelp" class="form-text text-danger">{{ errorPassword }}</div>
              </div>
            <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" v-model="formData.phone" id="phone" />
            </div>
            <div class="form-group">
            <label>Gender</label>
            <div>
                <label for="male">
                <input type="radio" v-model="formData.gender" value="1" id="male" /> Male
                </label>
                <label for="female">
                <input type="radio" v-model="formData.gender" value="2" id="female" /> Female
                </label>
            </div>
            </div>
            <button type="submit">Register</button>
            <p v-if="errorMessage" class="error">{{ errorMessage }}</p>
        </form>
        </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        formData: {
          name: '',
          email: '',
          password: '',
          phone: '',
          gender: 1,
        },
        errorMessage: '',
        errorName:'',
        errorEmail:'',
        errorPassword:'',
      };
    },
    methods: {
      async submitForm() {
        try {
          const response = await axios.post('/register', this.formData);
          console.log(response.data);
          if (response.data.user.role === 'user') {
                localStorage.setItem('user', JSON.stringify(response.data.user));
                window.location.href = '/'; // Redirect to frontend user page
            }
        } catch (error) {
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
          if(error.response && error.response.data.errors && error.response.data.errors.name){
              this.errorName = error.response.data.errors.name[0];
          }else{
              this.errorName = '';
          }
          //this.errorMessage = error.response.data.message || 'Something went wrong';
        }
      }
    }
  };
  </script>
  
  <style scoped>
  .register-container{
        margin-top: 150px;
    }
  .register-form {
    max-width: 620px;
    margin: auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgb(0 0 0 / 52%);
    border: 1px solid #ffa600f4;
  }
  
  .form-group {
    margin-bottom: 15px;
  }
  
  input[type="text"],
  input[type="email"],
  input[type="password"],
  select {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
  }
  
  button {
    width: 100%;
    padding: 10px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #45a049;
  }
  
  .error {
    color: red;
    font-size: 14px;
    margin-top: 10px;
  }
  </style>
  