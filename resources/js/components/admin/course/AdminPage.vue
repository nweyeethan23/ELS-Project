<template>
  <div class="bg-white">
    <div class="container-fluid p-5">
      <h2>Courses List</h2>
      <router-link to="/admin/course" class="btn btn-primary m-3">Create Course</router-link>
      <!-- Table to display courses -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th width="25%">Description</th>
            <th>Class Size</th>
            <th width="15%">Schedule</th>
            <th >Duration</th>
            <th>Start Date</th>
            <th  width="10%">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(course, index) in courses" :key="course.id">
            <td>{{ index + 1 }}</td>
            <td>{{ course.title }}</td>
            <td>{{ course.description.length > 50 ? course.description.substring(0, 50) + '...' : course.description }}</td>
            <td>{{ course.class_size }}</td>
            <td>{{ course.schedule }}</td>
            <td>{{ course.duration }}</td>
            <td>{{ course.start_date }}</td>
            <td>
              <!-- Edit button -->
              <button @click="editCourse(course.id)" class="btn btn-warning btn-sm">Edit</button>

              <!-- Delete button -->
              <button @click="deleteCourse(course.id)" class="btn btn-danger btn-sm ml-2">Delete</button>
            </td>
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
      courses: [] 
    };
  },
  mounted() {
    this.fetchCourses();
  },
  methods: {
    async fetchCourses() {
      try {
        const response = await axios.get('/course/list'); 
        this.courses = response.data.courses;
      } catch (error) {
        console.error('There was an error fetching the courses:', error);
      }
    },

    async editCourse(courseId) {
      this.$router.push({ name: 'edit-course', params: { id: courseId } });
    },

    async deleteCourse(courseId) {
      try {
 
        const result = await Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!"
        });

        if (result.isConfirmed) {

          await axios.delete(`/admin/course/${courseId}`);
          this.fetchCourses();
        }

      } catch (error) {
        console.error('Error deleting course:', error);
      }
      
    }
  }
};
</script>
