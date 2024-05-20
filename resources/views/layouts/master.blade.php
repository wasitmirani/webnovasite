
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Axtra HTML5 Template">

  <title>@yield('title') - {{config('app.name')}}</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{asset('/assets/imgs/logo/favicon.png')}}">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">


  <!-- All CSS files -->
  <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/progressbar.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/meanmenu.min.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/master.css')}}">
  <link rel="stylesheet" href="{{asset('style.css')}}">
</head>


<body>
  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>


  <!-- Preloader -->
  <div class="preloader">
    <div class="loading">
      <div class="bar bar1"></div>
      <div class="bar bar2"></div>
      <div class="bar bar3"></div>
      <div class="bar bar4"></div>
      <div class="bar bar5"></div>
      <div class="bar bar6"></div>
      <div class="bar bar7"></div>
      <div class="bar bar8"></div>
    </div>
  </div>







  <!-- Scroll Smoother -->
  <div class="has-smooth" id="has_smooth"></div>


  <!-- Go Top Button -->
  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>


  <!-- Header area start -->
  <header class="header__area-2">
    <div class="header__inner-2">
      <div class="header__logo-2">
        <a href="index.html"><img src="assets/imgs/logo/site-logo-white-2.png" alt="Site Logo"></a>
      </div>
      <div class="header__nav-2">
        <ul class="main-menu menu-anim">
          <li class="has-megamenu"><a href="#">home</a>
            <ul class="mega-menu">
              <li>
                <div class="menu-heading">Agency</div>
                <ul>
                  <li><a href="index.html">Digital Maketing</a></li>
                  <li><a href="index-2.html">Design Studio </a></li>
                  <li><a href="index-3.html">Digital Agency</a></li>
                  <li><a href="index-7.html">creative Agency</a></li>
                  <li><a href="index-6.html">Startup Agency</a></li>
                  <li><a href="index-8.html">modern agency</a></li>
                  <li><a href="index-4.html">personal Portfolio</a></li>
                </ul>
              </li>
              <li>
                <div class="menu-heading">Agency Dark</div>
                <ul>
                  <li><a href="index-dark.html">Digital Maketing</a></li>
                  <li><a href="index-2-dark.html">Design Studio</a></li>
                  <li><a href="index-3-dark.html">Digital Agency</a></li>
                  <li><a href="index-7-dark.html">creative Agency</a></li>
                  <li><a href="index-6-dark.html">Startup Agency</a></li>
                  <li><a href="index-8-dark.html">modern agency</a></li>
                  <li><a href="index-4-dark.html">personal Portfolio</a></li>
                </ul>
              </li>
              <li>
                <div class="menu-heading">Portfolio</div>
                <ul>

                  <li><a href="index-5.html">portfolio showcase</a></li>
                  <li><a href="index-10.html">showcase carousel</a></li>
                  <li><a href="index-12.html">Interactive link</a></li>
                  <li><a href="index-13.html">portfolio masonry</a></li>
                  <li><a href="index-14.html">vertical grid</a></li>
                  <li><a href="index-15.html">Interactive image slider</a></li>
                  <li><a href="index-16.html">showcase parallax</a></li>
                  <li><a href="index-17.html">logo showcase</a></li>
                  <li><a href="index-9.html">showcase slider</a></li>
                  <li><a href="index-11.html">Interactive hover showcase</a></li>
                </ul>
              </li>
              <li>
                <div class="menu-heading">Portfolio dark</div>
                <ul>
                  <li><a href="index-5-dark.html">portfolio showcase</a></li>
                  <li><a href="index-10-dark.html">showcase carousel</a></li>
                  <li><a href="index-12-dark.html">Interactive link</a></li>
                  <li><a href="index-13-dark.html">portfolio masonry</a></li>
                  <li><a href="index-14-dark.html">vertical grid</a></li>
                  <li><a href="index-15-dark.html">Interactive image slider</a></li>
                  <li><a href="index-16-dark.html">showcase parallax</a></li>
                  <li><a href="index-17-dark.html">logo showcase</a></li>
                </ul>
              </li>
              <li>
                <div class="menu-heading">woocommerce</div>
                <ul>
                  <li><a href="index-woocommerce.html">Home</a></li>
                  <li><a href="shop-full-width.html">shop - full width</a></li>
                  <li><a href="shop-sidebar.html">shop - sidebar</a></li>
                  <li><a href="shop-single.html">product details</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="index-woocommerce.html">woocomerce</a>
            <ul class="main-dropdown">
              <li><a href="index-woocommerce.html">Home</a></li>
              <li><a href="#">shop</a>
                <ul class="sub-dropdown">
                  <li><a href="shop-full-width.html">shop - full width</a></li>
                  <li><a href="shop-sidebar.html">shop - sidebar</a></li>
                </ul>
              </li>
              <li><a href="shop-single.html">product details</a></li>
              <li><a href="shop-cart.html">cart</a></li>
              <li><a href="shop-checkout.html">checkout</a></li>
              <li><a href="sign-up.html">sign up</a></li>
              <li><a href="sign-in.html">sign in</a></li>
              <li><a href="password-reset.html">reset password</a></li>
              <li><a href="woocomerce-category.html">product category</a></li>
              <li><a href="account.html">Profile</a></li>
            </ul>
          </li>
          <li class="has-megamenu"><a href="about.html">Pages</a>
            <ul class="mega-menu">
              <li>
                <a>Service</a>
                <ul>
                  <li><a href="service.html">service</a></li>
                  <li><a href="service-dark.html">service dark</a></li>
                  <li><a href="service-2.html">service V.2</a></li>
                  <li><a href="service-2-dark.html">service V.2 dark</a></li>
                  <li><a href="service-3.html">service V.3</a></li>
                  <li><a href="service-3-dark.html">service V.3 dark</a></li>
                  <li><a href="service-4.html">service V.4</a></li>
                  <li><a href="service-4-dark.html">service V.4 dark</a></li>
                  <li><a href="service-5.html">service V.5</a></li>
                  <li><a href="service-5-dark.html">service V.5 dark</a></li>
                  <li><a href="service-6.html">service V.6</a></li>
                  <li><a href="service-6-dark.html">service V.6 dark</a></li>
                  <li><a href="service-details.html">service details</a></li>
                  <li><a href="service-details-dark.html">service details dark</a></li>
                </ul>
              </li>
              <li>
                <a>portfolio</a>
                <ul>
                  <li><a href="portfolio.html">portfolio</a></li>
                  <li><a href="portfolio-dark.html">portfolio dark</a></li>
                  <li><a href="portfolio-2.html">portfolio v.2</a></li>
                  <li><a href="portfolio-2-dark.html">portfolio v.2 dark</a></li>
                  <li><a href="portfolio-3.html">portfolio v.3</a></li>
                  <li><a href="portfolio-3-dark.html">portfolio v.3 dark</a></li>
                  <li><a href="portfolio-4.html">portfolio v.4</a></li>
                  <li><a href="portfolio-4-dark.html">portfolio v.4 dark</a></li>
                  <li><a href="portfolio-5.html">portfolio v.5</a></li>
                  <li><a href="portfolio-5-dark.html">portfolio v.5 dark</a></li>
                  <li><a href="portfolio-details.html">portfolio details</a></li>
                  <li><a href="portfolio-details-dark.html">portfolio details dark</a></li>
                </ul>
              </li>
              <li>
                <a>team</a>
                <ul>
                  <li><a href="team.html">Team</a></li>
                  <li><a href="team-dark.html">Team dark</a></li>
                  <li><a href="team-details.html">Team Details</a></li>
                  <li><a href="team-details-dark.html">Team Details dark</a></li>
                  <li><a href="career.html">career</a></li>
                  <li><a href="career-dark.html">career dark</a></li>
                  <li><a href="job-details.html">job details</a></li>
                  <li><a href="job-details-dark.html">job details dark</a></li>
                </ul>
              </li>
              <li>
                <a>blog</a>
                <ul>
                  <li><a href="blog.html">blog</a></li>
                  <li><a href="blog-dark.html">blog dark</a></li>
                  <li><a href="blog-2.html">blog v.2</a></li>
                  <li><a href="blog-2-dark.html">blog v.2 dark</a></li>
                  <li><a href="category.html">category</a></li>
                  <li><a href="category-dark.html">category dark</a></li>
                  <li><a href="blog-details.html">blog details</a></li>
                  <li><a href="blog-details-dark.html">blog details dark</a></li>
                </ul>
              </li>
              <li>
                <a>Others</a>
                <ul>
                  <li><a href="about.html">about</a></li>
                  <li><a href="about-dark.html">about dark</a></li>
                  <li><a href="faq.html">FAQs</a></li>
                  <li><a href="faq-dark.html">FAQs dark</a></li>
                  <li><a href="contact.html">contact</a></li>
                  <li><a href="contact-dark.html">contact dark</a></li>
                  <li><a href="404.html">404</a></li>
                  <li><a href="404-dark.html">404 dark</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="portfolio.html">services</a>
            <ul class="main-dropdown">
              <li><a href="service.html">service</a>
                <ul class="sub-dropdown">
                  <li><a href="service-dark.html">service dark</a></li>
                  <li><a href="service-2-dark.html">service V.2 dark</a></li>
                  <li><a href="service-3-dark.html">service V.3 dark</a></li>
                  <li><a href="service-4-dark.html">service V.4 dark</a></li>
                  <li><a href="service-5-dark.html">service V.5 dark</a></li>
                  <li><a href="service-6-dark.html">service V.6 dark</a></li>
                  <li><a href="service-details-dark.html">service details dark</a></li>
                </ul>
              </li>
              <li><a href="service-2.html">service V.2</a></li>
              <li><a href="service-3.html">service V.3</a></li>
              <li><a href="service-4.html">service V.4</a></li>
              <li><a href="service-5.html">service V.5</a></li>
              <li><a href="service-6.html">service V.6</a></li>
              <li><a href="service-details.html">service details</a></li>
            </ul>
          </li>
          <li><a href="team.html">team</a>
            <ul class="main-dropdown">
              <li><a href="team.html">team</a></li>
              <li><a href="team-details.html">team details</a></li>
            </ul>
          </li>
          <li><a href="blog.html">Blog</a>
            <ul class="main-dropdown">
              <li><a href="blog.html">blog</a></li>
              <li><a href="blog-2.html">blog v.2</a></li>
              <li><a href="category.html">category</a></li>
              <li><a href="blog-details.html">blog details</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="header__nav-icon-2">
        <button class="menu-icon-2" id="open_offcanvas"><img src="assets/imgs/icon/menu-white.png" alt="Menubar Icon"></button>
      </div>
    </div>
  </header>
  <!-- Header area end -->




  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>

        @yield('content')

      </main>



      <!-- Footer area start -->
      <footer class="footer__area-2 pt-130">
        <div class="container">
          <div class="footer__top-2 text-anim">
            <div class="row">
              <div class="col-xxl-12">
                <h2 class="sec-title-3 title-anim">Get started <br> now</h2>
                <p class="footer__sub-title">If you would like to work with us or
                  just want to get in touch, we’d love
                  to hear from you!</p>
              </div>
            </div>
          </div>

          <div class="footer__middle-2">
            <div class="row">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="footer__location-2">
                  <div class="location">
                    <h3>London</h3>
                    <p>Baltia Squar, Mark Street, <br>
                      London</p>
                  </div>
                  <div class="location">
                    <h3>New York</h3>
                    <p>Nenuya Centre, Elia Street <br>
                      New York, USA</p>
                  </div>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="footer__subscribe-2">
                  <form action="#">
                    <input type="text" name="email" placeholder="Enter your email">
                    <button type="submit" class="submit"><img src="assets/imgs/icon/arrow-black.png" alt="Arrow Icon"></button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="footer__btm-2">
            <div class="row">
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5">
                <div class="footer__copyright-2">
                  <p>© 2022 - 2025 | Alrights reserved by <a href="https://dev.wealcoder.com/" target="_blank">Wealcoder</a>
                  </p>
                </div>
              </div>
              <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7">
                <div class="footer__nav">
                  <ul class="footer-menu menu-anim">
                    <li><a href="about.html">about us</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="career.html">Career</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Footer area end -->


    </div>
  </div>



  <!-- All JS files -->
  <script src="{{asset('/assets/js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/assets/js/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('/assets/js/counter.js')}}"></script>
  <script src="{{asset('/assets/js/gsap.min.js')}}"></script>
  <script src="{{asset('/assets/js/ScrollTrigger.min.js')}}"></script>
  <script src="{{asset('/assets/js/ScrollToPlugin.min.js')}}"></script>
  <script src="{{asset('/assets/js/ScrollSmoother.min.js')}}"></script>
  <script src="{{asset('/assets/js/SplitText.min.js')}}"></script>
  <script src="{{asset('/assets/js/chroma.min.js')}}"></script>
  <script src="{{asset('/assets/js/mixitup.min.js')}}"></script>
  <script src="{{asset('/assets/js/vanilla-tilt.js')}}"></script>
  <script src="{{asset('/assets/js/jquery.meanmenu.min.js')}}"></script>
  <script src="{{asset('/assets/js/main.js')}}"></script>


</body>

</html>