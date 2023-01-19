 <?php
?>
  <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="assets/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated">
      <h2>Welcome to <span>GateWay</span></h2>
      <p>Get Resources that improves Your grade by 2x <br> Over 10,000 exam questions grouped by Speciality</p>
      <div class="d-flex">
        <a href="https://www.youtube.com/embed/ZUxGqK-oJ6w" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
      
    </div>
  </section>

  <main id="main">

   
  

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>Success RoadMap</h3>
                <p class="fst-italic">
                 Sample HND questions from 2017 are now available in this Platform.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Past exams are made available so that you can view and become familiar with the styles of question that you may face in your exam.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Register for full Access to Past Question PDFs.</li>
                 
                </ul>
                
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/hnd.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 1 -->

          
        

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-header">
          <h2>Departments</h2>
         
        </div>

        <div class="row gy-5">

          <?php
          
          include 'getHomeCourse.php';
          
          ?>

         

        </div>

      </div>
    </section><!-- End Services Section -->
   <!-- ======= view more Section ======= -->
   <div class='view-more text-center'>
    <button class='btn btn-secondary'><a href="http://localhost/gateways/hnd/index.php?page=allCourses">View More</a></button>
   </div>


  <!-- ======= end of view more Section ======= -->
    

    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
         
        </div>

      </div>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d509555.5876045934!2d11.291399355735383!3d3.830978930022066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcf7a309a7977%3A0x7f54bad35e693c51!2zWWFvdW5kw6k!5e0!3m2!1sen!2scm!4v1666768019469!5m2!1sen!2scm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <p>Got a technical
            issue? Want to send feedback about a beta feature? Need details about our website? Let us know.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Yaounde - Center <br>
                Region, Cameroon</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>atohdenise123@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+237 - 672-674-786</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="index.php?page=home" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
             
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->