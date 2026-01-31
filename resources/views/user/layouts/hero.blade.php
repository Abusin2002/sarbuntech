<!-- resources/views/partials/hero.blade.php -->

<section id="hero" class="hero section">

  <div class="hero-slider">

    <!-- SLIDE 1 -->
    <div class="hero-slide">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Publish Your Website, Reach More People.</h1>
            <p data-aos="fade-up" data-aos-delay="100">
              Digitalizing the business is key of growth, Showcase your services on one platform
            </p>
            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
              <a href="{{ url('/enquire') }}" class="btn-get-started zoom-cta">
                <i class="bi bi-telephone"></i>Enquire here <i class="bi bi-arrow-right"></i>
              </a>
              <a href="#" class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0">
                <i class="bi bi-play-circle"></i><span>Watch Video</span>
              </a>
            </div>
          </div>
          <div class="col-lg-6 hero-img text-center" data-aos="zoom-out">
            <img src="{{ asset('assets/img/hero_img2.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
    </div>

    <!-- SLIDE 2 -->
    <div class="hero-slide">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1>Modern UI & Fast Websites</h1>
            <p>We design responsive and animated websites for business growth</p>
            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
              <a href="{{ url('/enquire') }}" class="btn-get-started zoom-cta">
               <i class="bi bi-telephone"></i> Enquire here <i class="bi bi-arrow-right"></i>
              </a>
              <a href="#" class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0">
                <i class="bi bi-play-circle"></i><span>Watch Video</span>
              </a>
            </div>
          </div>
          <div class="col-lg-6 hero-img text-center">
            <img src="{{ asset('assets/img/hero_img4.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
    </div>

    <!-- SLIDE 3 -->
    <div class="hero-slide">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1>Grow Your Business Online</h1>
            <p>Websites, Apps & Digital Marketing in one place</p>
             <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
              <a href="{{ url('/enquire') }}" class="btn-get-started zoom-cta">
               <i class="bi bi-telephone"></i> Enquire here <i class="bi bi-arrow-right"></i>
              </a>
              <a href="#" class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0">
                <i class="bi bi-play-circle"></i><span>Watch Video</span>
              </a>
            </div>
          </div>
          <div class="col-lg-6 hero-img text-center">
            <img src="{{ asset('assets/img/hero_img3.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
