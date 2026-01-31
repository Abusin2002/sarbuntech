@extends('user.layouts.app')

@section('title', 'Business Website Development')

@section('content')
<div class="mt-5">

<!-- HERO SECTION -->
<section class="service-hero py-5">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-6"
           data-aos="fade-right">
        <h1 class="fw-bold">Custom Software Development</h1>
        <p class="mt-3">
         Create custom software designed to solve real business challenges, boost productivity, and help your company grow faster.
        </p>
        <a href="#pricing" class="btn btn-primary mt-3"><i class="bi bi-currency-exchange"></i> Get Pricing</a>
      </div>

      <div class="col-lg-6 text-center py-4"
           data-aos="fade-left">
        <img src="{{ asset('assets/img/head/csd.jpg') }}"
             class="img-fluid rounded" alt="">
      </div>

    </div>
  </div>
</section>

<!-- WHAT IS SECTION -->
<section class="py-5">
  <div class="container text-center"
       data-aos="zoom-in">
    <h2 class="fw-bold">What is Custom Software Development?</h2>
    <p class="mt-3">
      Custom software development involves creating tailored software solutions that meet specific business needs and requirements.
    </p>
  </div>
</section>

<!-- FEATURES -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row text-center">

      <div class="col-md-3" data-aos="fade-up" data-aos-delay="0">
        <i class="bi bi-phone fs-1 text-primary"></i>
        <h5 class="mt-2">Mobile Friendly</h5>
        <p>Works perfectly on all devices</p>
      </div>

      <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
        <i class="bi bi-lightning-charge fs-1 text-primary"></i>
        <h5 class="mt-2">Fast Loading</h5>
        <p>Optimized for speed & performance</p>
      </div>

      <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
        <i class="bi bi-search fs-1 text-primary"></i>
        <h5 class="mt-2">SEO Ready</h5>
        <p>Better ranking on Google</p>
      </div>

      <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-shield-check fs-1 text-primary"></i>
        <h5 class="mt-2">Secure</h5>
        <p>Safe & protected website</p>
      </div>

    </div>
  </div>
</section>

<!-- WHAT WE PROVIDE -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-6"
           data-aos="fade-right">
        <img src="{{ asset('assets/img/about.jpg') }}"
             class="img-fluid rounded" alt="">
      </div>

<div class="col-lg-6" data-aos="fade-left">
  <h3 class="fw-bold">What We Provide</h3>
  <ul class="tick-list mt-3">
    <li><i class="bi bi-check-circle"></i> Custom Software Solutions Tailored to Your Business</li>
    <li><i class="bi bi-check-circle"></i> Scalable and Secure Applications</li>
    <li><i class="bi bi-check-circle"></i> Integration with Existing Systems</li>
    <li><i class="bi bi-check-circle"></i> Performance Optimization & Quality Assurance</li>
    <li><i class="bi bi-check-circle"></i> Ongoing Maintenance & 24/7 Support</li>
  </ul>
</div>


    </div>
  </div>
</section>

<!-- PRICING -->
<section id="pricing" class="py-5 bg-light">
  <div class="container text-center">

    <h2 class="fw-bold" data-aos="zoom-in">Pricing Plans</h2>

    <div class="row mt-4">

      <div class="col-md-4" data-aos="flip-left">
        <div class="card p-4 shadow">
          <h4>Basic</h4>
          <div class="price"><sup>Rs.</sup>4999</div>
          <ul class="tick-list mt-3">
            <li><i class="bi bi-check-circle"></i> 1 Page Website</li>
            <li><i class="bi bi-check-circle"></i> Free Domain</li>
            <li><i class="bi bi-check-circle"></i> Support</li>
          </ul>
          <a href="#" class="btn btn-outline-primary mt-3"><i class="bi bi-telephone"></i> Call Now</a>
        </div>
      </div>

      <div class="col-md-4" data-aos="flip-left" data-aos-delay="150">
        <div class="card p-4 shadow border-primary">
          <h4>Standard</h4>
          <div class="price"><sup>Rs.</sup>9999</div>
          <ul class="tick-list mt-3">
            <li><i class="bi bi-check-circle"></i> 5 Pages</li>
            <li><i class="bi bi-check-circle"></i> SEO Included</li>
            <li><i class="bi bi-check-circle"></i> Free Hosting</li>
          </ul>
          <a href="#" class="btn btn-primary mt-3"><i class="bi bi-telephone"></i> Call Now</a>
        </div>
      </div>

      <div class="col-md-4" data-aos="flip-left" data-aos-delay="300">
        <div class="card p-4 shadow">
          <h4>Premium</h4>
          <div class="price"><sup>Rs.</sup>14999</div>
          <ul class="tick-list mt-3">
            <li><i class="bi bi-check-circle"></i> Unlimited Pages</li>
            <li><i class="bi bi-check-circle"></i> Admin Panel</li>
            <li><i class="bi bi-check-circle"></i> Priority Support</li>
          </ul>
          <a href="#" class="btn btn-outline-primary mt-3"><i class="bi bi-telephone"></i> Call Now</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="py-5">
  <div class="container text-center"
       data-aos="fade-up">
    <h2 class="fw-bold">Why Choose Us?</h2>
    <p class="mt-3">
      Affordable pricing, fast delivery, professional design, and lifetime support.
    </p>
  </div>
</section>

<!-- CTA -->
<section class="py-5 bg-primary text-white text-center"
         data-aos="zoom-in-up">
  <div class="container">
    <h2>Ready to Start Your Project?</h2>
    <p class="mt-2">Contact us today and grow your business online</p>
    <a href="/enquire" class="btn btn-light mt-3"><i class="bi bi-chat-dots"></i>
 Enquire Now</a>
  </div>
</section>

</div>
@endsection
