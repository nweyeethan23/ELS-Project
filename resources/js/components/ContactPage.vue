<template>
    <iframe class="responsive-iframe mt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2919.353178018696!2d47.4802444157619!3d42.97083340430253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404ea15ce9e13f9f%3A0x42eb5720271dadf4!2sUlitsa%20Engel&#39;sa%2C%2030%2C%20Makhachkala%2C%20Respublika%20Dagestan%2C%20367015!5e0!3m2!1sen!2sru!4v1621256990741!5m2!1sen!2sru" width="100%" height="600" allowfullscreen="" loading="lazy">
    </iframe>
    <div  class="sec-container">
        <h1 class="fw-bold">CONTACT US</h1>
        <p class="fs-5">Contact ELS today to find out how our English programmes can help you achieve your goals.</p>
        
        <div class="row mt-5 mb-5 ">
            <div class="col-md-4">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="/image/facebook.png" alt="facebook" class="fade-element" width="100%">
                        </div>
                        <div class="col-md-10 p-2">
                            <h4>FACEBOOK</h4>
                            <p>@ELSMalaysia</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="/image/whatsapp.png" alt="whatsapp" class="fade-element" width="100%">
                        </div>
                        <div class="col-md-10 p-2">
                            <h4>WHATSAPP</h4>
                            <p>(+6011) 3551 5873</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="/image/wechat.jpg" alt="wechat" class="fade-element" width="100%">
                        </div>
                        <div class="col-md-10 p-2">
                            <h4>WECHAT</h4>
                            <p>ELS-Malaysia</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="/image/line.png" alt="line" class="fade-element" width="100%">
                        </div>
                        <div class="col-md-10 p-2">
                            <h4>LINE</h4>
                            <p>ELSMalaysia</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container mt-5">
                    <div class="custom-form-container" >
                        <h3 class="mb-4 fw-bold text-center">ENQUIRE NOW</h3>
                        <form class="row g-3 justify-content-center" @submit.prevent="createContact">
                            <div class="col-12">
                                <label for="name" class="form-label">Full Name (As in IC/ Passport)<span class="text-danger fs-5">*</span></label>
                                <input v-model="formData.name" type="text" class="form-control" id="name" placeholder="" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nationality" class="form-label">Nationality<span class="text-danger">*</span></label>
                                <select v-model="formData.nationality" id="nationality" class="form-select" required>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Korea">Korea</option>
                                    <option value="China">China</option>
                                    <option value="USA">USA</option>
                                    <option value="UK">UK</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="age" class="form-label">Age<span class="text-danger">*</span></label>
                                <input v-model="formData.age" type="number" class="form-control" id="age"  min="1" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone_number" class="form-label">Phone number<span class="text-danger">*</span></label>
                                <input v-model="formData.phone" type="number" class="form-control" id="phone" required>
                            </div>
                            <div class="col-md-6">
                                <label for="social_id" class="form-label">WeChat/ LINE ID (if any)</label>
                                <input v-model="formData.social_id" type="text" class="form-control" id="social_id">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                <input v-model="formData.email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                            </div>
                            <div class="col-12">
                                <label for="course" class="form-label">ELS Programmes</label>
                                <select v-model="formData.course_id" id="course" class="form-select" >
                                    <option v-for="course in courses" :key="course.id" :value="course.id">{{ course.title }}</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="about" class="form-label">How did you hear about ELS?<span class="text-danger">*</span></label>
                                <input v-model="formData.hear_about" type="text" class="form-control" id="about" required>
                            </div>
                            <div class="col-12">
                                <label for="selected" class="form-label">If you have selected Other in the above field, please specify how you have heard about ELS here</label>
                                <input v-model="formData.specify_heard_about" type="text" class="form-control" >
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Any questions or messages for us?<span class="text-danger">*</span></label>
                                <textarea  v-model="formData.question" class="form-control" id="message" required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                <input v-model="formData.check_read_status"  class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                    I have read and understood and hereby consent to the collection and processing of my Personal Data and Sensitive Personal Data as defined under the Personal Data Protection Act 2010 (“PDPA”)<span class="text-danger">*</span>
                                </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-warning">ENQUIRE NOW</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</template>
<script>
export default {
    data() {
        return {
            courses: [],
            formData: {
                name: '',
                nationality: '',
                age: '',
                phone: '',
                social_id: '',
                email: '',
                course_id:'',
                hear_about:'',
                specify_heard_about:'',
                question:'',
                check_read_status:''
            },
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
        async createContact() {
            try { 
                const response = await axios.post('/contacts', this.formData);
                console.log(response);
                this.formData.name = '';
                this.formData.naltionality = '';
                this.formData.age = '';
                this.formData.phone = '';
                this.formData.social_id = '';
                this.formData.email = '';
                this.formData.course_id = '';
                this.formData.hear_about = '';
                this.formData.specify_heard_about = '';
                this.formData.question = ''; 
                this.formData.check_read_status = '';
                Swal.fire({
                    title: "Success",
                    icon: "success"
                });
            } catch (error) {
                console.log(error.response);
            }

        },
    },
};
</script>
<style scoped>
.sec-container{
      padding-left: 100px;
      padding-right: 100px;
      padding-top: 100px;

    }
.custom-form-container {
    background-color: #f8f9fa;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0px 0px 4px 6px rgba(0, 0, 0, 0.1);
}
</style>