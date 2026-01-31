    <!-- Contact Section -->
    <section id="contact" class="contact section ">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>15/7 T Nagar ,Chennai</p>
                  <p>Tamil Nadu, 600017</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p><a href="tel:+917540030577">91 75400 30577</a></p>
                  <!-- <p>+1 6678 254445 41</p> -->
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p><a href="mailto:info@devwarrios.in">info@devwarrios.in</a></p>
                  <!-- <p>contact@example.com</p> -->
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>24/7 Support</h3>
                  <!-- <p>Monday - Saturday</p>
                  <p>9:00AM - 06:00PM</p> -->
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

<div class="col-lg-6">
  <div class="contact-form-wrapper bordered-form">
    <div class="text-center">
      <h3>Ask your question here</h3>
    </div>
    <form action="#" method="POST" class="ajax-form"  data-url="{{ route('contact.submit') }}" data-aos="fade-up" data-aos-delay="200">
      @csrf
      <div class="row gy-4">

        <div class="col-md-6">
          <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>

        <div class="col-md-6">
          <input type="tel" name="mobile" class="form-control" placeholder="Your Mobile" required>
        </div>
<!-- 
        <div class="col-12">
          <input type="text" name="subject" class="form-control" placeholder="Subject" required>
        </div> -->

        <div class="col-12">
          <textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
        </div>

        <!-- <div class="col-12 text-center">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>

          <button type="submit" class="btn btn-primary btn-lg mt-2">Send Message</button>
        </div> -->

        <div class="col-12 text-center">
           
    <button type="submit" class="btn btn-primary submit-btn">
        <span class="btn-text">Send Message</span>
        <span class="btn-loader d-none">Sending...</span>
    </button>

    <div class="alert alert-success mt-3 d-none success-msg"></div>
    <div class="alert alert-danger mt-3 d-none error-msg"></div>
        </div>

      </div>
    </form>
  </div>
</div>


        </div>

      </div>

    </section><!-- /Contact Section -->