<template>
    <div class="bg-white">
      <div class="container-fluid p-5">
        <h2>Apply courses List</h2>
        <!-- Table to display courses -->
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Aplly Course</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(list, index) in lists" :key="list.id">
              <td>{{ index + 1 }}</td>
              <td>{{ list.user.name }}</td>
              <td>{{ list.user.email}}</td>
              <td>{{ list.user.phone}}</td>
              <td>{{ list.course.title}}</td>
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
        lists: [] 
      };
    },
    mounted() {
      this.fetchCourses();
    },
    methods: {
      async fetchCourses() {
        try {
          const response = await axios.get('/admin/apply/list'); 
          this.lists = response.data.applyCourses;
        } catch (error) {
          console.error('There was an error fetching the courses:', error);
        }
      },
  
    }
  };
  </script>
  