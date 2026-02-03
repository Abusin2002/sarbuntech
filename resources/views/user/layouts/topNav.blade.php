<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo2.jpg" alt=""  class="site-logo" > -->
        <h1 class="sitename">&lt;SarbunTechnologies /&gt;</h1>
      </a>

     <div class="d-flex justify-content-between w-100">
       <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home<br></a></li>
          <li><a href="/#about">About</a></li>
          <li class="dropdown"><a href="#"><span>Our Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/customsoftware">Custom Software</a></li>
              <li><a href="/businesssite">Business Website</a></li>
              <li><a href="/brandingsite">Branding Website</a></li>
              <li><a href="/mobileapp">Mobile Apps</a></li>
              <li><a href="/digitalmarketing">Digital Marketing</a></li>
              <!-- <li><a href="/digitalmarketing">Social Media Marketing</a></li> -->
              <li><a href="/graphicdesign">Graphic Design</a></li>
              <li class="dropdown"><a href="#"><span>College Projects</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Machine Learning Projects</a></li>
                  <li><a href="#">AI Projects</a></li>
                  <li><a href="#">Management Projects</a></li>
                  <li><a href="#">Mini Projects</a></li>
                </ul>
              </li>

            </ul>
          </li>
          <li><a href="/portfolio" class="{{ request()->is('portfolio') ? 'active' : '' }}">Portfolio</a></li>
          <li><a href="{{route('pricing')}}">Pricing</a></li>
         
          <li><a href="/#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted flex-md-shrink-0 " href="/enquire#enquireForm"><span class="zoom-cta"><i class="bi bi-chat-dots"></i>Enquire Now</span></a>

     </div>
    </div>
  </header>