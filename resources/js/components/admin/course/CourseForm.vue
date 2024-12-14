<template>
    <div class="bg-white">
      <div class="container-fluid p-5">
        <div class="text-end">
          <router-link to="/admin" class="btn btn-outline-primary">Back to Course List</router-link>
        </div>
    
        <h2>Create New Course</h2>
        <form @submit.prevent="submitForm">
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="title">Title<span class="text-danger">*</span></label>
              <input v-model="course.title" id="title" type="text" class="form-control" placeholder="Course Title" required />
            </div>
  
            <div class="col-md-6 form-group">
              <label for="description">Description<span class="text-danger">*</span></label>
              <textarea v-model="course.description" id="description" class="form-control" placeholder="Course Description" required></textarea>
            </div>
          </div>
  
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="image">Image<span class="text-danger">*</span></label>
              <input @change="handleImageUpload" id="image" type="file" class="form-control" required/>
            </div>
  
            <div class="col-md-6 form-group">
              <label for="class_size">Class Size<span class="text-danger">*</span></label>
              <input v-model="course.class_size" id="class_size" type="number" class="form-control" placeholder="Class Size" required />
            </div>
          </div>
  
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="schedule">Schedule<span class="text-danger">*</span></label>
              <input v-model="course.schedule" id="schedule" type="text" class="form-control" placeholder="Class Schedule" required />
            </div>
  
            <div class="col-md-6 form-group">
              <label for="duration">Duration<span class="text-danger">*</span></label>
              <input v-model="course.duration" id="duration" type="text" class="form-control" placeholder="Class Duration" required />
            </div>
          </div>
  
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="start_date">Start Date<span class="text-danger">*</span></label>
              <input v-model="course.start_date" id="start_date" type="date" class="form-control" required />
            </div>
          </div>
  
          <button type="submit" class="btn btn-primary mt-3">Create Course</button>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        course: {
          title: '',
          description: '',
          image: null,  // Changed from '' to null for better file handling
          class_size: '',
          schedule: '',
          duration: '',
          start_date: ''
        }
      };
    },
    methods: {
      async submitForm() {
        try {
          const formData = new FormData();
          
          formData.append('title', this.course.title);
          formData.append('description', this.course.description);
          formData.append('class_size', this.course.class_size);
          formData.append('schedule', this.course.schedule);
          formData.append('duration', this.course.duration);
          formData.append('start_date', this.course.start_date);
  
          if (this.course.image) {
            formData.append('image', this.course.image);
          }
  
          const response = await axios.post('/admin/course/create', formData, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          });
  
          this.$router.push({ name: 'courses-list' });
        
          this.resetForm();

        } catch (error) {

          console.error(error);
        }
      },
      handleImageUpload(event) {
        const file = event.target.files[0];
        if (file) {
          this.course.image = file; 
        }
      },
      resetForm() {
        this.course = {
          title: '',
          description: '',
          image: null,
          class_size: '',
          schedule: '',
          duration: '',
          start_date: ''
        };

        const fileInput = document.getElementById('image');
        if (fileInput) fileInput.value = '';
      }
    }
  };
  </script>
  

  