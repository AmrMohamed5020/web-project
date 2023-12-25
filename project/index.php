<?php
session_start();
include "includes/header.php";
include "includes/models.php";

?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/1.jpeg)">
          <div class="container">
            <h2>Welcome to <span>Acculife Pharmacy</span></h2>
            <p>We are pleased to be your pharmacy of choice and we pledge to continually work to advance the care we provide to the next level with the same passion, commitment and experience that our patients have come to expect.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/5.jpeg)">
          <div class="container">
            <h2>Healthcare</h2>
            <p> It is compassion of our highly skilled and devoted caregivers that truly defines us.Their commitment to advancing frontier healthcare and their approach to care has earned the trust of patients and their loved ones for a long time.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/2.jpeg)">
          <div class="container">
            <h2>Welcome to <span>Acculife Pharmacy</span></h2>
            <p>We are pleased to be your pharmacy of choice and we pledge to continually work to advance the care we provide to the next level with the same passion, commitment and experience that our patients have come to expect.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4 class="title"><a href="">Medication</a></h4>
              <p class="description">We provide certified medicines in which good health is guaranteed</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4 class="title"><a href="">Care</a></h4>
              <p class="description">We offer full-Time support to our patients and clients</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-thermometer"></i></div>
              <h4 class="title"><a href="">Consultation</a></h4>
              <p class="description">Proffessional health advice is one of our core duties</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4 class="title"><a href="">Quality</a></h4>
              <p class="description">Quality and assurance is our token of good faith to our clients</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>In an emergency? Need help now?</h3>
          <p> Are you stack and do not know where to get reliable medication services. We are here for you.</p>
          <a class="cta-btn scrollto" href="#contact">Call US</a>
        </div>

      </div>
    </section><!-- End Cta Section -->



    

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>categories</h2>
          <p>We have variety of products and are all legal and licenced. We provide consultation and help clients achieve the highest quality patient outcomes. We also provide other proffessional pharmacy services in community</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title">
              <a href="viewCat.php?id=1">
                Cold & Cough
              </a>
            </h4>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title">
              <a href="viewCat.php?id=2">
                Creams
              </a>
            </h4>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4 class="title">
              <a href="viewCat.php?id=3" >
                Baby Care
              </a>
            </h4>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title">
              <a href="viewCat.php?id=4">
                Ear, Nose & Throat
              </a>
            </h4>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4 class="title">
              <a href="5">
                Personal Care
              </a>
            </h4>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title">
              <a href="6">
                Antipain
              </a>
            </h4>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

   

   



    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Need help? We are here for you!<br>We have got everything covered for your needs. Reach us by phone or email. </p>
        </div>

      </div>


      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Sinbillawain - Mansoura - Egypt
                    <br> Code 14126</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@acculifepharma.co.tz</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>Mobile: +020 1096 8052 05<br>Whatsapp: +020 1096 8052 05</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="functions/massages/insert.php" class="php-email-form" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                  <div>  
                    <?php 
                      if (isset($_SESSION['error']['name'])) {
                          echo "<hr>";
                          echo '<div class = "alert alert-danger">' . $_SESSION['error']['name'] . '</div>';
                      }     
                    ?>
                  </div>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                  <div>  
                    <?php 
                      if (isset($_SESSION['error']['email'])) {
                        echo "<hr>";  
                        echo '<div class = "alert alert-danger">' . $_SESSION['error']['email'] . '</div>';
                      }     
                    ?>
                  </div>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                <div>  
                    <?php 
                      if (isset($_SESSION['error']['subject'])) {
                          echo "<hr>";
                          echo '<div class = "alert alert-danger">' . $_SESSION['error']['subject'] . '</div>';
                      }     
                    ?>
                  </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message"></textarea>
                <div>  
                    <?php 
                      if (isset($_SESSION['error']['massage'])) {
                          echo "<hr>";
                          echo '<div class = "alert alert-danger">' . $_SESSION['error']['massage'] . '</div>';
                      }     
                      unset($_SESSION['error']);
                    ?>
                  </div>
              </div>
              <br>
              <div style="text-align: center;">
                <button type="submit">Send Message</button>
              </div>
              <div>
                <?php
                  if(isset($_SESSION['done'])){
                    echo "<hr>";
                    echo $_SESSION['done'];
                    unset($_SESSION['done']);
                  }
                ?>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 <?php 
    include "includes/footer.php";
 ?>