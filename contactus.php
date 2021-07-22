
<?php 
  session_start();
  require_once 'core/init.php';
  include 'includes/header.php'; 
?>


<body>
  
  <section class="mb-4">

      <!--Section heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4 mt-5" style="color:#00a7e1">Contact us</h2>
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5 mt-5">Do you have any questions? Please do not hesitate to contact us
          directly. Our team will come back to you within
          a matter of hours to help you.</p>

      <div style="max-width: 1100px; margin: auto;" class="row">

          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
              <form id="contact" name="contact" action="https://formspree.io/f/xpzkrbag" method="POST">

                  <!--Grid row-->
                  <div class="row">
                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="text" id="name" name="name" placeholder="Your name" class="form-control"
                                  required>
                          </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="text" id="email" name="email" placeholder="Email" class="form-control" required>
                          </div>
                      </div>
                      <!--Grid column-->

                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">
                      <div class="col-md-12">
                          <div class="md-form mb-0">
                              <input type="text" id="subject" name="subject" placeholder="Subject"
                                  class="form-control" required>
                          </div>
                      </div>
                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-12">

                          <div class="md-form">
                              <textarea type="text" id="message" name="message" rows="2"
                                  class="form-control md-textarea" placeholder="Your message" required></textarea>
                          </div>

                      </div>
                  </div>
                  <!--Grid row-->
                  <div class="text-center text-md-left">
                      <button class="btn btn-primary text-center" name="submit" type="submit"></button>
                  </div>
              </form>


          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div style="padding-right: 20px;" class="col-md-3 text-center">
              <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-map-marker-alt fa-2x"></i>
                      <p>San Francisco, CA 94126, USA</p>
                  </li>

                  <li><i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>+ 01 234 567 89</p>
                  </li>

                  <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>contact@gmail.com</p>
                  </li>
              </ul>
          </div>
          <!--Grid column-->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15887.931668026793!2d100.322455!3d5.4195653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa9ad76b9c61d0bd3!2sUOW%20Malaysia%20KDU%20Penang%20University%20College!5e0!3m2!1sen!2smy!4v1624089311753!5m2!1sen!2smy"
            width="100%" height="450" style="border:0;" allowfullscreen="yes" loading="lazy" class="mx-auto mt-5" style="width: 100%;">
        </iframe>
      </div>
  </section>


  <?php include 'includes/footer.php'; ?>
