<template>
    <div class="bg-white">
      <div class="container-fluid p-5">
        <h2>Contact List</h2>
        <!-- Table to display courses -->
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>name</th>
              <th>Nationality</th>
              <th>Age</th>
              <th>Phone</th>
              <th>email</th>
              <th width="15%">Hear about</th>
              <th width="15%">Specify heard about</th>
              <th width="15%">Question</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(contact, index) in contacts" :key="contact.id">
              <td>{{ index + 1 }}</td>
              <td>{{ contact.name }}</td>
              <td>{{ contact.nationality}}</td>
              <td>{{ contact.age }}</td>
              <td>{{ contact.phone }}</td>
              <td>{{ contact.email }}</td>
              <td>{{ contact.hear_about }}</td>
              <td>{{ contact.specify_heard_about }}</td>
              <td>{{ contact.question }}</td>
            </tr>
          </tbody>
        </table>
  
  
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'courses-list',
    data() {
      return {
        contacts: [] 
      };
    },
    mounted() {
      this.fetchCourses();
    },
    methods: {
      async fetchCourses() {
        try {
          const response = await axios.get('/admin/contact/getlist'); 
          this.contacts = response.data.list;
        } catch (error) {
          console.error('There was an error fetching the courses:', error);
        }
      },
  
    }
  };
  </script>
  