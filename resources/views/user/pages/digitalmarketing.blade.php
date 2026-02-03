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
        <h1 class="fw-bold">Digital Marketing Services</h1>
        <p class="mt-3">
          Digital marketing services help your business reach more customers, grow online, and increase sales. We use strategies like SEO, social media, content marketing, and paid ads to improve your visibility, engage your audience, and track results for real business growth.
        </p>
        <a href="#pricing" class="btn btn-primary mt-3"><i class="bi bi-currency-exchange"></i> Get Pricing</a>
      </div>

      <div class="col-lg-6 text-center py-4"
           data-aos="fade-left">
        <img src="{{ asset('assets/img/head/sm.jpg') }}"
             class="img-fluid rounded" alt="">
      </div>

    </div>
  </div>
</section>







<!-- WHAT IS SECTION -->
<section class="py-5">
  <div class="container text-center"
       data-aos="zoom-in">
    <h2 class="fw-bold">What is Digital Marketing?</h2>
    <p class="mt-3">
      Digital marketing is the use of online channels and platforms to promote your business, products, or services. It includes strategies like SEO, social media marketing, email campaigns, and paid advertising to reach and engage customers effectively.
    </p>
  </div>
</section>

<!-- FEATURES -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row text-center">

      <div class="col-md-3" data-aos="fade-up" data-aos-delay="0">
        <i class="bi bi-people fs-1 text-primary"></i>
        <h5 class="mt-2">Reach More Customers</h5>
        <p>Expand your audience across platforms</p>
      </div>

      <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
        <i class="bi bi-bar-chart-line fs-1 text-primary"></i>
        <h5 class="mt-2">Boost Engagement</h5>
        <p>Connect with your audience effectively</p>
      </div>

      <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
        <i class="bi bi-search fs-1 text-primary"></i>
        <h5 class="mt-2">Improve Visibility</h5>
        <p>Better search rankings and online presence</p>
      </div>

      <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-graph-up fs-1 text-primary"></i>
        <h5 class="mt-2">Drive Growth</h5>
        <p>Increase leads, sales, and revenue</p>
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
        <img src="{{ asset('assets/img/head/digi.jpg') }}"
             class="img-fluid rounded" alt="Digital Marketing">
      </div>

      <div class="col-lg-6"
           data-aos="fade-left">
        <h3 class="fw-bold">What We Provide</h3>
        <ul class="tick-list mt-3">
          <li><i class="bi bi-check-circle"></i> Social Media Marketing to Reach More Customers</li>
          <li><i class="bi bi-check-circle"></i> Search Engine Optimization (SEO) for Better Online Visibility</li>
          <li><i class="bi bi-check-circle"></i> Content Marketing to Engage Your Audience</li>
          <li><i class="bi bi-check-circle"></i> Paid Advertising (PPC) to Drive Leads & Sales</li>
          <li><i class="bi bi-check-circle"></i> Analytics & Reporting to Track Results</li>
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
          <div class="price"><sup>Rs.</sup>4700</div>
          <ul class="tick-list mt-3">
            <li><i class="bi bi-check-circle"></i> Social Media Setup & Management</li>
            <li><i class="bi bi-check-circle"></i> Basic SEO</li>
            <li><i class="bi bi-check-circle"></i> Monthly Report</li>
          </ul>
          <a href="/enquire#enquireForm" class="btn btn-outline-primary mt-3"><i class="bi bi-telephone"></i> Enquire Now</a>
        </div>
      </div>

      <div class="col-md-4" data-aos="flip-left" data-aos-delay="150">
        <div class="card p-4 shadow border-primary">
          <h4>Standard</h4>
          <div class="price"><sup>Rs.</sup>4800</div>
          <ul class="tick-list mt-3">
            <li><i class="bi bi-check-circle"></i> Social Media Marketing + Content Creation</li>
            <li><i class="bi bi-check-circle"></i> SEO Optimization</li>
            <li><i class="bi bi-check-circle"></i> Google Ads / Paid Campaigns</li>
          </ul>
          <a href="/enquire#enquireForm" class="btn btn-primary mt-3"><i class="bi bi-telephone"></i> Enquire Now</a>
        </div>
      </div>

      <div class="col-md-4" data-aos="flip-left" data-aos-delay="300">
        <div class="card p-4 shadow">
          <h4>Premium</h4>
          <div class="price"><sup>Rs.</sup>4900</div>
          <ul class="tick-list mt-3">
            <li><i class="bi bi-check-circle"></i> Complete Digital Marketing Strategy</li>
            <li><i class="bi bi-check-circle"></i> SEO + Content + Paid Ads</li>
            <li><i class="bi bi-check-circle"></i> Analytics & Priority Support</li>
          </ul>
          <a href="/enquire#enquireForm" class="btn btn-outline-primary mt-3"><i class="bi bi-telephone"></i> Enquire Now</a>
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
    <a href="/enquire#enquireForm" class="btn btn-light mt-3"><i class="bi bi-chat-dots"></i>
 Enquire Now</a>
  </div>
</section>

</div>
@endsection
