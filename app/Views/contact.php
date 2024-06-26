<?php include(APPPATH . 'Views/navbar.php'); ?>
<?php include(APPPATH . 'Views/cdn.php'); ?>

<section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 class="text-center m-3">Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Sangamner,A.nagar,Maharashtra</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>GrapesRestro@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3758.846683777398!2d74.19908405000001!3d19.591068000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd00397252abcf%3A0xd20ce49a3e572889!2sSangamner%20College%2C%20Balajinagar%2C%20Sangamner%2C%20Maharashtra%20422605!5e0!3m2!1sen!2sin!4v1712772700220!5m2!1sen!2sin"frameborder="0" style="border:0; width: 100%; height: 310px;" allowfullscreen></iframe>
                </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="#" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="4" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center "><button type="submit" class="btn btn-info">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

    <?php include(APPPATH . 'Views/footer.php'); ?>