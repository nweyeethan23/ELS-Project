<template>
    <div class="home-carousel">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="/image/img1.jpg" alt="img1" class="w-100 h-60" >
                <div class="carousel-caption d-none d-md-block">
                    <p class="title">Certified Intensive English Programme (CIEP)</p>
                    <p class="text">Some representative placeholder content for the first slide.</p>
                    <a href="/" class="btn btn-primary"> View Course </a>
                    
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                <img src="/image/img2.jpg" alt="img2" class="w-100 h-60">
                <div class="carousel-caption d-none d-md-block">
                    <p class="title">Online Certified Intensive English Programme</p>
                    <p class="text">Some representative placeholder content for the first slide.</p>
                    <a href="/" class="btn btn-primary"> View Course </a>  
                </div>
                </div>
                <div class="carousel-item">
                <img src="/image/img3.jpg" alt="img3" class="w-100 h-60">
                <div class="carousel-caption d-none d-md-block ">
                    <p class="title">Corporate English Training</p>
                    <p class="text">Some representative placeholder content for the first slide.</p>
                    <a href="/" class="btn btn-primary"> View Course </a>  
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> 
    </div>
    <div  class="sec-container">
        <div class="row g-0 mb-5" v-motion-slide-visible-bottom :delay="200" :duration="800">
            <div class="col-md-12">
                <div class="row sec-row">
                    <div class="col-md-6 img" v-motion-slide-visible-bottom :delay="200" :duration="800">
                        <img src="/image/about_ministry2.png" alt="g1" class="fade-element" width="100%" height="100%">
                    </div>
                    <div class="col-md-6 flex-container">
                      <div class="sec-text">
                        <h2 class="title fw-bold mb-5" v-motion-slide-visible-bottom :delay="200" :duration="800">OUR COURSES</h2>  
                        <div class="body mb-5 fs-5">
                          <p v-motion-slide-visible-bottom :delay="200" :duration="800"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis in soluta doloribus aperiam ut laudantium dolorem, eligendi illo harum animi, quo, vitae vero optio possimus asperiores quasi recusandae nesciunt officia!
                            . Enhance your Career and Workplace prospects with our Communicative English Programme and Company Training programmes. Our Special Programmes include those for Student Mobility
                          </p>
                        </div>
                        <h4 class="fw-bold mb-5" v-motion-slide-visible-bottom :delay="200" :duration="800">I'm Looking For</h4>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" v-motion-slide-visible-bottom :delay="200" :duration="800">
                          <option selected>Choose a Course</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0 mb-5 third-row" v-motion-slide-visible-bottom :delay="200" :duration="800">
          <h1 class="fw-bold mb-5">Our Top Courses</h1>
          <div class="col-md-4 p-2 box" v-motion-slide-visible-bottom :delay="200" :duration="800">
            <img src="/image/img1.jpg" class="card-img-top" alt="image description">
            <div class="text-body p-2">
              <div class="m-3 text-center">
                <h4 class="card-text text-center">Certified Intensive English Programme (CIEP)</h4>
                <h5 class="text-danger">University Pathway</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas modi totam et fuga cum ad animi deserunt nisi dolor? Aspernatur debitis</p>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success rounded-pill" >View</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 p-2 box" v-motion-slide-visible-bottom :delay="200" :duration="800">
            <img src="/image/img2.jpg" class="card-img-top" alt="image description">
            <div class="text-body p-2">
              <div class="m-3 text-center">
                <h4 class="card-text text-center">Online Certified Intensive English Programme (CIEP Online)</h4>
                <h5 class="text-danger">University Pathway</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas modi totam et fuga cum ad animi deserunt nisi dolor? Aspernatur debitis</p>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success rounded-pill" >View</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 p-2 box" v-motion-slide-visible-bottom :duration="800">
            <img src="/image/img3.jpg" class="card-img-top" alt="image description">
            <div class="text-body gb-white p-2">
              <div class="m-3 text-center">
                <h4 class="card-text text-center">Corporate English Training Programme (CIEP Online)</h4>
                <h5 class="text-danger">University Pathway</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas modi totam et fuga cum ad animi deserunt nisi dolor? Aspernatur debitis</p>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success rounded-pill" >View</button>
              </div>
             </div>
          </div>
        </div>
    </div>
    <div class="about-section">
        <div class="sec-container">
          <div class="row g-0 row-4">
            <div class="col-md-4 p-5">
              <h2 class="title fw-bold mb-5" v-motion-slide-visible-bottom :delay="200" :duration="800">ABOUT US</h2>  
              <div class="body mb-5 fs-5">
                  <p v-motion-slide-visible-bottom :delay="200" :duration="800"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis in soluta doloribus aperiam ut laudantium dolorem, eligendi illo harum animi, quo, vitae vero optio possimus asperiores quasi recusandae nesciunt officia!
                              </p>
                  <button class="btn btn-success rounded-pill">Discover More</button>
              </div>
            </div>
            <div class="col-md-8">
              <img src="/image/about.jpg" alt="about" class="fade-element" width="100%">
            </div>
          </div>
        </div>
    </div>
    <div class="choosing-section">
      <div class="sec-container">
        <div class="row g-0 row-5">
          <div class="col-md-12 align-self-center text-center">
            <h1 class="fw-bold p-3">Why Choose ELS?</h1>
            <p class="fs-5 p-3">As a quality English language service provider, here are the reasons are why ELS can help you achieve the level of English proficiency you need.</p>
          </div>
          <div class="col-md-12 pb-5">
            <ul class="nav nav-pills mb-3 nav-pills-wrapper" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation" style="width: 20%;">
                <button class="nav-link active text-uppercase" id="pills-home-tab1" data-bs-toggle="pill" data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact1" aria-selected="true">Accreditation</button>
              </li>
              <li class="nav-item" role="presentation" style="width: 20%;">
                <button class="nav-link text-uppercase" id="pills-home-tab2" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false">Curriculum</button>
              </li>
              <li class="nav-item" role="presentation" style="width: 20%;">
                <button class="nav-link text-uppercase" id="pills-home-tab3" data-bs-toggle="pill" data-bs-target="#pills-contact3" type="button" role="tab" aria-controls="pills-contact3" aria-selected="false">Instructors & Staff</button>
              </li>
              <li class="nav-item" role="presentation" style="width: 20%;">
                <button class="nav-link text-uppercase" id="pills-home-tab4" data-bs-toggle="pill" data-bs-target="#pills-contact4" type="button" role="tab" aria-controls="pills-contact4" aria-selected="false">Student Support</button>
              </li>
              <li class="nav-item" role="presentation" style="width: 20%;">
                <button class="nav-link text-uppercase" id="pills-home-tab5" data-bs-toggle="pill" data-bs-target="#pills-contact5" type="button" role="tab" aria-controls="pills-contact5" aria-selected="false">Latest Technology</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-contact1" role="tabpanel" aria-labelledby="pills-home-tab1" tabindex="0">
                <div class="row g-0">
                  <div class="col-md-6">
                    <div class="image" style="height: 100%;" >
                      <img src="/image/stu1.jpg" alt="facebook" class="fade-element rounded" width="100%" style="height: 100%;" >
                    </div>
                    
                  </div>
                  <div class="col-md-6">
                    <div class="text-group">
                      <div class="icon">
                        <img src="/image/accreditation.png" alt="accreditation" class="fade-element rounded">
                      </div>
                      <div class="text">
                        <h4 class="fw-bold text-uppercase">Accreditation</h4>
                        <div class="body">
                          <p class="fs-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam culpa obcaecati excepturi sit, saepe nobis amet voluptates dolores omnis laboriosam assumenda tempore deleniti dicta consequatur ad ex fugit, molestiae illo.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-home-tab2" tabindex="0">
                <div class="row g-0">
                  <div class="col-md-6">
                    <div class="image" height="100%" >
                      <img src="/image/stu2.jpg" alt="facebook" class="fade-element rounded" width="100%" style="height: 100%;" >
                    </div>
                    
                  </div>
                  <div class="col-md-6">
                    <div class="text-group">
                      <div class="icon">
                        <img src="/image/curriculum.png" alt="accreditation" class="fade-element rounded">
                      </div>
                      <div class="text">
                        <h4 class="fw-bold text-uppercase">Curriculum</h4>
                        <div class="body">
                          <p class="fs-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam culpa obcaecati excepturi sit, saepe nobis amet voluptates dolores omnis laboriosam assumenda tempore deleniti dicta consequatur ad ex fugit, molestiae illo.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-home-tab3" tabindex="0">
                <div class="row g-0">
                  <div class="col-md-6">
                    <div class="image">
                      <img src="/image/stu3.jpg" alt="facebook" class="fade-element rounded" width="100%" height="100%">
                    </div>
                    
                  </div>
                  <div class="col-md-6">
                    <div class="text-group">
                      <div class="icon">
                        <img src="/image/staff.svg" alt="accreditation" class="fade-element rounded">
                      </div>
                      <div class="text">
                        <h4 class="fw-bold text-uppercase">Instructors & Staff</h4>
                        <div class="body">
                          <p class="fs-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam culpa obcaecati excepturi sit, saepe nobis amet voluptates dolores omnis laboriosam assumenda tempore deleniti dicta consequatur ad ex fugit, molestiae illo.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-contact4" role="tabpanel" aria-labelledby="pills-home-tab4" tabindex="0">
                <div class="row g-0">
                  <div class="col-md-6">
                    <div class="image">
                      <img src="/image/stu4.jpg" alt="facebook" class="fade-element rounded" width="100%" height="100%">
                    </div>
                    
                  </div>
                  <div class="col-md-6">
                    <div class="text-group">
                      <div class="icon">
                        <img src="/image/social-care.png" alt="accreditation" class="fade-element rounded">
                      </div>
                      <div class="text">
                        <h4 class="fw-bold text-uppercase">Student Support</h4>
                        <div class="body">
                          <p class="fs-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam culpa obcaecati excepturi sit, saepe nobis amet voluptates dolores omnis laboriosam assumenda tempore deleniti dicta consequatur ad ex fugit, molestiae illo.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-contact5" role="tabpanel" aria-labelledby="pills-home-tab5" tabindex="0">
                <div class="row g-0">
                  <div class="col-md-6">
                    <div class="image">
                      <img src="/image/img1.jpg" alt="facebook" class="fade-element rounded" width="100%" height="100%">
                    </div>
                    
                  </div>
                  <div class="col-md-6">
                    <div class="text-group">
                      <div class="icon">
                        <img src="/image/project-management.png" alt="accreditation" class="fade-element rounded">
                      </div>
                      <div class="text">
                        <h4 class="fw-bold text-uppercase">Latest Technology & Facilities</h4>
                        <div class="body">
                          <p class="fs-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam culpa obcaecati excepturi sit, saepe nobis amet voluptates dolores omnis laboriosam assumenda tempore deleniti dicta consequatur ad ex fugit, molestiae illo.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="achievements-section">
      <div class="achievements-container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="row justify-content-center text-center">
                  <h1 class="fw-bold p-3 text-uppercase">Recognition & Achievements</h1>
                  <div class="col-md-2">
                    <img src="/image/nes.png" alt="img3" width="132" height="132">
                  </div>
                  <div class="col-md-2">
                    <img src="/image/star.png" alt="img3" width="132" height="132">
                  </div>
                  <div class="col-md-2">
                    <img src="/image/star.png" alt="img3" width="132" height="132">
                  </div>
                  <div class="col-md-2">
                    <img src="/image/star.png" alt="img3" width="132" height="132">
                  </div>
                  <div class="col-md-2">
                    <img src="/image/award1.png" alt="img3" width="132" height="132">
                  </div>
                  <div class="col-md-2">
                    <img src="/image/award1.png" alt="img3" width="132" height="132">
                  </div>
                  <div class="col-md-2">
                    <img src="/image/award4.png" alt="img3" width="132" height="132">
                  </div>
                  <div class="col-md-2">
                    <img src="/image/award3.png" alt="img3" width="132" height="132">
                  </div>
                  <div class="col-md-2">
                    <img src="/image/award2.png" alt="img3" width="132" height="132">
                  </div>
                  <div class="col-md-2">
                    <img src="/image/award2.png" alt="img3" width="132" height="132">
                  </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="join-section">
      <div class="join-container">
        <div class="row">
          <h1 class="fw-bold p-3 text-uppercase mb-5">Why our students join us</h1>
            <div class="col-md-3 p-3">
              <img src="/image/g1.png" alt="about" class="fade-element" width="100%">
            </div>
            <div class="col-md-3">
              <div class="text-body-container">
                <p class="fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus sint modi sapiente inventore quasi earum, molestiae accusantium nihil minus, tempora illum, a exercitationem? Voluptatem</p>
              </div>
              <p class="text-uppercase fw-bold">ALICE</p>
              <p>China</p>
            </div>
            <div class="col-md-3 p-3">
              <img src="/image/g1.png" alt="about" class="fade-element" width="100%">
            </div>
            <div class="col-md-3">
              <div class="text-body-container">
                <p class="fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus sint modi sapiente inventore quasi earum, molestiae accusantium nihil minus, tempora illum, a exercitationem? Voluptatem</p>
              </div>
              <p class="text-uppercase fw-bold">ALICE</p>
              <p>China</p>
            </div>
        </div>
      </div>
    </div>
    <contact-section></contact-section>
</template>
<script>
export default {
  name: 'HomePage',
  
};
</script>
