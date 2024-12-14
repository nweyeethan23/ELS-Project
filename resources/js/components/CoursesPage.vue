<template>
    <div class="couse-section mt-5 mb-5">
      <h1>Course List</h1>
      <div class="row">
        <div class="col-md-6"  v-for="course in courses" :key="course.id">
            <div class="course">
                <div class="course-image">
                <img :src="course.image ? `/courseimg/${course.image}` : null"  alt="Course Image" class="course-image">
                </div>
                <div class="course-info">
                    <div class="course-body" style="height: 290px ;width: 400px;">
                        <h2>{{ course.title}}</h2>
                        <p>{{ course.description.length > 200 ? course.description.substring(0, 200) + '...' : course.description }}</p>
                        <p><strong>Class Size:</strong> {{ course.class_size }}</p>
                        <p><strong>Schedule:</strong> {{ course.schedule }}</p>
                        <p><strong>Duration:</strong> {{ course.duration }}</p>
                        <p><strong>Start Date:</strong> {{ course.start_date }}</p>
                    </div>

                    <div class="course-footer text-end">
                        <button class="btn btn-primary text-center" 
                            v-if="isAuthenticated"  
                            @click="applyNow(course.id)"
                            :disabled="hasApplied(course.id)">
                            Apply Now
                        </button>
                        <button class="btn btn-primary text-center" @click="loginClick" v-else>Apply Now</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        courses: [],
        appliedCourses: [],
        user: JSON.parse(localStorage.getItem('user')),
        userId:{
               userId:'',
        }
      };
    },
    mounted() {
      this.fetchCourses();
      this.fetchAppliedCourses();
    },
    computed: {
      isAuthenticated() {
        return this.user !== null;  // Check if user is logged in
      },
    },
    methods: {
      async fetchCourses() {
        try {
          const response = await axios.get('/course/list');
          this.courses =  response.data.courses;
          
        } catch (error) {
          console.error('Error fetching courses:', error);
        }
      },
      async fetchAppliedCourses() {
        if (this.isAuthenticated) {
            try {
            const response = await axios.get(`/user/${this.user.id}/applied_courses`);
            this.appliedCourses = response.data.appliedCourses;
            console.log(response.data.appliedCourses);
            } catch (error) {
            console.error('Error fetching applied courses:', error);
            }
        }
     },
      loginClick() {
        window.location.href = '/login'; 
      },
      applyNow(id) {
        const courseId = id;
        this.userId.userId = this.user.id;
        try {
            
          const response = axios.post(`/apply_course/${courseId}`,this.userId);
          this.fetchAppliedCourses();
          Swal.fire({
                title: "Success apply course",
                icon: "success"
            });
        } catch (error) {
          console.log(error);
        }
      },
      hasApplied(courseId) {
            return this.appliedCourses.some(course => course.id === courseId);
        },
    },
    
  };
  </script>
  

  