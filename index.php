<?php 
require dirname(__FILE__).'\views\header.php';
?>

<!-- Silder section start -->

<section class="slider">
  <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?php echo url.'assets/images/slider/4.png' ?>" alt="Slide 2"> 
        </div>
        <div class="swiper-slide">
          <img src="<?php echo url.'assets/images/slider/1.png' ?>" alt="Slide 1"> 
        </div>
        <div class="swiper-slide">
          <img src="<?php echo url.'assets/images/slider/2.png' ?>" alt="Slide 2"> 
        </div>
        <div class="swiper-slide">
          <img src="<?php echo url.'assets/images/slider/3.png' ?>" alt="Slide 3"> 
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Silder section End -->

<!-- Courses section start -->

<section class="courses">
  <div class="container mt-5"> 
    <div class="row">
      <div class="col-md-12 head">
        <h2>Courses Available</h2>
        <p class="text-center"><h3 class="text-center"><i class="bi bi-mortarboard-fill" style="color: #fff;"></i></h3></p>
      </div>
      <div class="col-md-4 course-card">
        <div class="card">
          <img class="img-fluid mx-auto d-flex" src="<?php echo url.'assets/images/courses/pic1.png' ?>">
          <div class="card-body">
            <h4 class="card-title">After 10<sup>th</sup></h4>
            <p class="card-text">Courses you can pursue after 10<sup>th</sup></p>
            <a type="button" class="btn" href="#">Click here</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 course-card">
        <div class="card">
          <img class="img-fluid mx-auto d-flex" src="<?php echo url.'assets/images/courses/pic1.png' ?>">
          <div class="card-body">
            <h4 class="card-title">After 12<sup>th</sup></h4>
            <p class="card-text">Courses you can pursue after 12<sup>th</sup></p>
            <a type="button" class="btn" href="#">Click here</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 course-card">
        <div class="card">
          <img class="img-fluid mx-auto d-flex" src="<?php echo url.'assets/images/courses/pic1.png' ?>">
          <div class="card-body">
            <h4 class="card-title">After Graduation</h4>
            <p class="card-text">Courses you can pursue after Graduation</p>
            <a type="button" class="btn" href="#">Click here</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        
      </div>
      <div class="col-md-4 course-card">
        <div class="card">
          <img class="img-fluid mx-auto d-flex" src="<?php echo url.'assets/images/courses/pic1.png' ?>">
          <div class="card-body">
            <h4 class="card-title">After PG</h4>
            <p class="card-text">Courses you can pursue after PG</p>
            <a type="button" class="btn" href="#">Click here</a>
          </div>
        </div>
      </div> 
      <div class="col-md-4">
        
      </div>
    </div>
  </div>
</section>
<!-- Course section end -->

<!-- About Section start -->
<div class="pb-5 about">
    <div class="container">
      <div class="col-md-12 head">
        <h2>About us</h2>
        <p class="text-center"><h3 class="text-center"><i class="bi bi-file-person-fill" style="color: #fff;"></h3></i></p>
      </div>
      <div class="row">
        <div class="col-md-6 mt-3 about-text pe-5">
          <h4>SPECSS - <span>A Gyaannirudra Initiative</span></h4>
          <hr>
          <p>So, you finally here ! , We are really happy that you are in search of <br>right career path for yourself . Nowadays in this 21st century <br>choosing a right career path is really tough because there are so <br>many options available and no one knows which path suits them <br>unless they have any idea about that. 
          We need a mentor or guide <br>who guides us in our journey of successful career. Even few of us <br>may have such mentors in our journey. But the way, we are living in <br>this 21st century, it becomes the quite old school thought that we <br>could get guided through our parents ....
          </p>
          <a href="#" class="btn" type="button">Read More</a>
        </div>  
        <div class="col-md-6 mt-3">
          <div class="choose-image p-3">
            <div>
              <img src="assets/images/slider/4.png">
            </div>
          </div>
        </div>      
      </div>
    </div>
</div>
<!-- About section end -->


<!-- Team section start -->
<section class="team">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-5 head">
        <h2>Our Team</h2>
        <p class="text-center"><h3 class="text-center"><i class="bi bi-person-square" style="color: #132736;"></i></h3></p>
      </div>
    </div>
    <!-- Swiper -->
    <div class="swiper teamSwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="team-card">
            <img src="<?php echo url.'assets/images/team/Raunak_Gupta.webp' ?>" alt="Team-1">
            <div class="team-overlay">
              <div class="team-info">
                <h4 class="text-center text-white">Mr. Raunak Gupta </h4>
                <h6 class="text-center text-white text-uppercase"><i>Creator & Crafter</i></h6>
                <ul>
                  <li><a href="javascript:void(0)"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-globe"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="team-card">
            <img src="<?php echo url.'assets/images/team/Deeksha_Gupta.webp' ?>" alt="Team-1">
            <div class="team-overlay">
              <div class="team-info">
                <h4 class="text-center text-white">Mrs. Deeksha Gupta </h4>
                <h6 class="text-center text-white text-uppercase"><i>Co-Creator & Crafter</i></h6>
                <ul>
                  <li><a href="javascript:void(0)"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-globe"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="team-card">
            <img src="<?php echo url.'assets/images/team/Sanjay_Gupta.webp' ?>" alt="Team-1">
            <div class="team-overlay">
              <div class="team-info">
                <h4 class="text-center text-white">Mr. Sanjay Gupta</h4>
                <h6 class="text-center text-white text-uppercase"><i>Mentor</i></h6>
                <ul>
                  <li><a href="javascript:void(0)"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-globe"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="team-card">
            <img src="<?php echo url.'assets/images/team/Ayush_Verma.webp' ?>" alt="Team-1">
            <div class="team-overlay">
              <div class="team-info">
                <h4 class="text-center text-white">Mr. Ayush Verma</h4>
                <h6 class="text-center text-white text-uppercase"><i>Web Development Partner</i></h6>
                <ul>
                  <li><a href="javascript:void(0)"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-globe"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      <div class="swiper-slide">
          <div class="team-card">
            <img src="<?php echo url.'assets/images/team/Lakshita_Sethi.webp' ?>" alt="Team-1">
            <div class="team-overlay">
              <div class="team-info">
                <h4 class="text-center text-white">Ms.Lakshita Sethi</h4>
                <h6 class="text-center text-white text-uppercase"><i>Web Development Associate</i></h6>
                <ul>
                  <li><a href="javascript:void(0)"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-globe"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="team-card">
            <img src="<?php echo url.'assets/images/team/Priya_Verma.webp' ?>" alt="Team-1">
            <div class="team-overlay">
              <div class="team-info">
                <h4 class="text-center text-white">Ms.Priya Verma </h4>
                <h6 class="text-center text-white text-uppercase"><i>Web Development Associate</i></h6>
                <ul>
                  <li><a href="javascript:void(0)"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-globe"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="team-card">
            <img src="<?php echo url.'assets/images/team/Ishika_Nandy.webp' ?>" alt="Team-1">
            <div class="team-overlay">
              <div class="team-info">
                <h4 class="text-center text-white">Ms. Ishika Nandy</h4>
                <h6 class="text-center text-white text-uppercase"><i>Digital Marketing Associate</i></h6>
                <ul>
                  <li><a href="javascript:void(0)"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-globe"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="team-card">
            <img src="<?php echo url.'assets/images/team/Kriti.webp' ?>" alt="Team-1">
            <div class="team-overlay">
              <div class="team-info">
                <h4 class="text-center text-white">Ms.Kriti</h4>
                <h6 class="text-center text-white text-uppercase"><i>Digital Marketing Associate</i></h6>
                <ul>
                  <li><a href="javascript:void(0)"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-globe"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="team-card">
            <img src="<?php echo url.'assets/images/team/Sandipta_Bhadra.webp' ?>" alt="Team-1">
            <div class="team-overlay">
              <div class="team-info">
                <h4 class="text-center text-white">Ms.Sandipta Bhadra</h4>
                <h6 class="text-center text-white text-uppercase"><i>Digital Marketing Associate</i></h6>
                <ul>
                  <li><a href="javascript:void(0)"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-globe"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>
<!-- Team section end -->

<!-- contact us start -->

<div class="main-contact-details">
  <div class="container">
    <div class="row">
      <div class="col-md-12 head heading">
        <h2>Get in touch</h2>
        <p class="text-center"><h3 class="text-center"><i class="bi bi-person-lines-fill" style="color: #fff;"></i></h3></p>
      </div>
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="contact-details-col ">
          <h4 class="mt-4">Phone:</h4>
          <p id="phone_contact"><a href="tel:097210 56160">097210 56160</a></p>
          <h4 class="mt-4">E-mail:</h4>
          <p id="email_contact"><a href="mailto:rudrasupport@gyaannirudra.com">rudrasupport@gyaannirudra.com</a></p>
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="contact-details-col">
          <hr>
          <div class="form-details">
            <form>
            <div class="name-details">
              <input class="form-control border-radius-0" type="text" name="" placeholder="Name*" required>
              <input type="number" name="" placeholder="Mob*" required>
            </div>
            <div class="name-details">
              <input type="email" name="" placeholder="Email">
              <input type="text" name="" placeholder="Address">
            </div>
            <textarea placeholder="Message"></textarea>
            <input type="submit" name="">
           </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- =============== contact us end =================== -->


<?php 
require dirname(__FILE__).'\views\footer.php';
 ?>
