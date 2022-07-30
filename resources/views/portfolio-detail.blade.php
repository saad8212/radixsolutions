<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="format-detection" content="telephone=no" />
    <meta
      name="keywords"
      content="Website Developement, web development, software development, mobile development, Nidavellire, Nidavellire Solution, Ali Raza,graphic design,search engine optimization,software engineer, computer science, IT services, software company"
    />
    <meta
      name="description"
      content="We are a young, dynamic web agency working on cutting edge technologies.We offer a “Multi-Discipline” services ranging from web site design, build and deployment, graphic design, search engine optimization, digital marketing and just about any web based digital service you can think of."
    />
    <title>Radix Solutions</title>
    <link rel="icon" href="assets/img/favicon/favicon.png" />
    <link rel="apple-touch-icon" href="assets/img/favicon/favicon.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- Vendor CSS Files -->
    <link
      href="{{asset('public/assets/vendor/bootstrap/css/bootstrap.min.css')}}"
      rel="stylesheet"
    />
    <link href="{{asset('public/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
    />
    <link href="{{asset('public/assets/vendor/aos/aos.css')}}" rel="stylesheet" />
    <link href="{{asset('public/assets/vendor/buttons/buttons.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/responsive.css')}}" />
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div id="main">
      <div id="page">
        <section class="header">
          <header id="header-main">
            <div class="container d-flex">
              <div class="logo mr-auto">
                <a href="{{url('/')}}"
                  ><img src="{{asset('public/assets/img/logo/logo.png')}}" alt="" class="img-logo"
                /></a>
              </div>

              <nav class="nav-menu d-none d-lg-block" id="mainNav">
                <ul>
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('/#about')}}">About</a></li>
                  <li><a href="{{url('/#services')}}">Services</a></li>
                  <li><a href="{{url('/#work')}}">Work</a></li>
                  <li class="active"><a href="{{url('Portfolio')}}">Portfolio</a></li>
                  <li><a href="{{url('Career')}}">Careers</a></li>
                  <li><a class="contact-btn" href="{{url('/#contact-us')}}">Contact us</a></li>
                </ul>
              </nav>
              <!-- .nav-menu -->
            </div>
          </header>
        </section>
        <section
          class="hero-slider"
          style="
            background: url({{asset('public/assets/img/portfolio/porfolio-page.jpg')}}) 50% 50% /
              cover no-repeat;
          "
        >
          <div class="container">
            <div class="row">
              <div class="welcome-onboard">
                <div class="col-lg-10 col-md-10 col-sm-12">
                  <div class="hero-slider__content">
                    <span
                      class="title__preheader title__preheader--tag title__preheader--white"
                      >Portfolio</span
                    >
                    <h2
                      class="title title--uppercase title--margin-top white-text h1"
                      style="width: 70%"
                    >
                      EMPOWERING OUR CLIENTS TO SUCCEED WITH<span
                        >TECHNOLOGIES</span
                      >
                    </h2>
                    <p class="hero-slider__lead white-text lead-text">
                      For over 5 years, Radix Solutions has been helping
                      technology startups, global brands, and Fortune 500
                      companies create impactful software solutions. Learn why
                      they have chosen us and how we have helped them to change
                      people’s lives.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="contact-form" class="about__contact">
          <div class="container--contact">
            <div class="container">
              <div class="row">
                <div id="map" class="map-scroll">
                  <section class="jobs">
                    <div class="container">
                      <h2 class="jobs__title">About Project</h2>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <div class="page-content">
                                            <h3 class="page-head">CHALLENGE</h3>
                                            <p class="page-para">The client needed extra programmers to develop new functionalities 
                                                for their well-made event portal. Given that a 10-year old model built 
                                                in .NET was quite old-fashioned, Intellectsoft needed to migrate the 
                                                platform to Angular and bring the novelties to life.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="media d-block mb-4">
                                            <img src="{{asset('public/assets/img/portfolio/porfolio-deatail-1.jpg')}}" alt="Image placeholder" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <div class="media d-block mb-4">
                                            <img src="{{asset('public/assets/img/portfolio/porfolio-deatail-2.jpg')}}" alt="Image placeholder" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="page-content">
                                            <h3 class="page-head">SOLUTION</h3>
                                            <p class="page-para">After a series of productive workshops in Norway, the event portal 
                                                sparkled with new functionality and better UX. The first part of the 
                                                solutions was software for organizing registrations and payments as 
                                                well as evaluation of participants’ feedback. We’ve also worked on 
                                                simplifying a new event set up for organizers and registration 
                                                page model. And here’s what we’ve got.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <div class="page-content">
                                            <h3 class="page-head">IMPACT</h3>
                                            <p class="page-para">Besides improving UX and reshaping some of the core functionalities, 
                                                we reduce the number of steps for organizers to set up their events. 
                                                Organizers can create their accounts with Deltager AS and arrange 
                                                events. That was way too complicated on the old platform. Now, it has 
                                                become much more painless. We also defined the next project that 
                                                will be a communication tool on the new platform.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="media d-block mb-4">
                                            <img src="{{asset('public/assets/img/portfolio/porfolio-deatail-3.jpg')}}" alt="Image placeholder" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END content -->
                        </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="service-cta service-cta--about">
          <div class="service-cta__text-area service-cta__text-area--careers">
            <h3 class="service-cta__title">Important Notice</h3>
            <p class="service-cta__text">
              Radix Solutions and its representatives will never assign tasks or
              make hires without a preliminary face-to-face or video-call
              interview. Please be mindful and do not reveal any personal
              information during unsolicited phone calls and text
              communications. If you have any additional questions, please
              contact us via e-mail:
            </p>
            <a class="service-cta__link" href="">support@radixsols.com</a>
          </div>
        </section>
        <section class="footer-bottom-area style2">
          <div class="container">
            <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="footer__flexbox">
                  <ul class="footer__menu">
                    <li class="has-dropdown">
                      <a href="">Services</a>
                      <ul class="sub-menu">
                        <li>
                          <a href="">Web Design</a>
                        </li>
                        <li>
                          <a href=""> Web Development</a>
                        </li>
                        <li>
                          <a href=""> Mobile Development</a>
                        </li>
                        <li>
                          <a href=""> Responsive Design</a>
                        </li>
                        <li>
                          <a href=""> Graphic Design</a>
                        </li>
                        <li>
                          <a href=""> Marketing Services</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="footer__flexbox">
                  <ul class="footer__menu">
                    <li class="has-dropdown">
                      <a href="">Solutions</a>
                      <ul class="sub-menu">
                        <li>
                          <a href="">Core</a>
                        </li>
                        <li>
                          <a href=""> Dynamics 365 Retail</a>
                        </li>
                        <li>
                          <a href=""> Dynamics 365 Distribution</a>
                        </li>
                        <li>
                          <a href=""> Dynamics 365 Manufacturing</a>
                        </li>
                        <li>
                          <a href=""> Shopper Value</a>
                        </li>
                        <li>
                          <a href=""> C-Analytics</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="footer__flexbox">
                  <ul class="footer__menu">
                    <li class="has-dropdown">
                      <a href="">Company</a>
                      <ul class="sub-menu">
                        <li>
                          <a href="">Home</a>
                        </li>
                        <li>
                          <a href=""> About</a>
                        </li>
                        <li>
                          <a href=""> Services</a>
                        </li>
                        <li>
                          <a href=""> Work</a>
                        </li>
                        <li>
                          <a href=""> Portfolio</a>
                        </li>
                        <li>
                          <a href=""> Careers</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="more-info">
                  <a class="info-head" href="">Contact</a>
                  <p class="lead">Lahore Pakistan</p>
                  <ul class="list-ico">
                    <li>
                      <span class="ion-ios-location"></span> 767 P Block,
                      Sabzazar, Lahore Pakistan
                    </li>
                    <li>
                      <span class="ion-ios-telephone"></span> (+92) 333-4413475
                    </li>
                    <li>
                      <span class="ion-email"></span
                      ><a href="#">support@radixsols.com</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="footer-bottom-content flex-box-two">
                  <div class="copyright-text">
                    <p>
                      © 2020 Radix solutions &nbsp; | &nbsp;
                      <a href="#" target="_blank">Privacy Policy</a> &nbsp; |
                      &nbsp; <a href="#" target="_blank"> Terms & Conditons</a>
                    </p>
                  </div>
                  <div class="footer-social-links clr-white float-right">
                    <ul class="social">
                      <li class="facebook">
                        <a rel="nofollow" target="_blank" href="#">
                          <img
                            class="facebook"
                            src="{{asset('public/assets/img/icons/facebook.png')}}"
                            alt="facebook"
                          />
                        </a>
                      </li>
                      <li class="twitter">
                        <a rel="nofollow" target="_blank" href="#"
                          ><img
                            class="facebook"
                            src="{{asset('public/assets/img/icons/twitter.png')}}"
                            alt="twitter"
                        /></a>
                      </li>
                      <li class="linkedin">
                        <a rel="nofollow" target="_blank" href="#"
                          ><img
                            class="facebook"
                            src="{{asset('public/assets/img/icons/linkedin.png')}}"
                            alt="linkedin"
                        /></a>
                      </li>
                      <li class="youtube">
                        <a
                          rel="nofollow"
                          target="_blank"
                          href=""
                          ><img
                            src="{{asset('public/assets/img/icons/youtube.png')}}"
                            alt="youtube"
                        /></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- Vendor JS Files -->
    <script src="{{asset('public/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="{{asset('public/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('public/assets/js/main.js')}}"></script>
    <script>
      AOS.init({
        easing: "ease-out-back",
        duration: 1000,
      });
    </script>
  </body>
</html>
