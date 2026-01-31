    <!-- Enquire Section -->
    <section id="contact" class="contact section" >

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2></h2>
        <p>Enquire your needs here</p>
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

                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p><a href="mailto:info@devwarrios.in">info@devwarrios.in</a></p>

                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>24/7 Support</h3>

                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6 bordered-form">
            

<form id="enquireForm"
      class="ajax-form"
      data-url="{{ route('enquire.submit') }}"
     action="#"
      method="POST">

    @csrf
    <div class="row gy-4">
        <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="col-md-6">
            <input type="tel" name="mobile" class="form-control" pattern="[6-9][0-9]{9}" placeholder="Your Mobile" required>
        </div>
        <div class="col-12">
            <select class="form-control" name="subject" required>
                <option value="" disabled selected>Choose Subject</option>
                <option value="general">General Enquiry</option>
                <option value="support">Support</option>
                <option value="sales">Sales</option>
                <option value="feedback">Feedback</option>
            </select>
        </div>
        <div class="col-12">
            <select class="form-control" name="service" required>
                <option value="" disabled selected>Choose Service</option>
                <option value="custom_software">Custom Software</option>
                <option value="branding_site">Branding Websites</option>
                <option value="business_site">Business Websites</option>
                <option value="mobileapp">Mobile Apps</option>
                <option value="digital_marketing">Digital Marketing</option>
                <option value="social_media_marketing">Social Media Marketing</option>
                <option value="clg_project">College Projects</option>
            </select>
        </div>
        <div class="col-12">
            <textarea name="message" class="form-control" rows="6" placeholder="Enter your requirements.." required></textarea>
        </div>
        <div class="col-12 text-center">
           
    <button type="submit" class="btn btn-primary submit-btn">
        <span class="btn-text">Submit</span>
        <span class="btn-loader d-none">Sending...</span>
    </button>

    <div class="alert alert-success mt-3 d-none success-msg"></div>
    <div class="alert alert-danger mt-3 d-none error-msg"></div>
        </div>
    </div>
</form>

          </div><!-- End Enquire Form -->

        </div>

      </div>

    </section><!-- /Enquire Section -->