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
    <link rel="icon" href="{{asset('public/assets/img/favicon/favicon.png') }}" />
    <link rel="apple-touch-icon" href="{{asset('public/assets/img/favicon/favicon.png') }}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- Vendor CSS Files -->
    <link
      href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}"
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
        <section class="header" id="header">
          <header id="header-main">
            <div class="container d-flex">
              <div class="logo mr-auto">
                <a href="index.html"
                  ><img src="{{asset('public/assets/img/logo/logo.png')}}" alt="" class="img-logo"
                /></a>
              </div>

              <nav class="nav-menu d-none d-lg-block menu">
                <ul>
                  <li class="active"><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#services">Services</a></li>
                  <li><a href="#work">Work</a></li>
                  <li><a href="{{ url('Portfolio') }}">Portfolio</a></li>
                  <li><a href="{{ url('Career') }}">Careers</a></li>
                  <li><a class="contact-btn" href="#contact-form">Contact us</a></li>
                </ul>
              </nav>
              <!-- .nav-menu -->
            </div>
          </header>
        </section>
        <section
          class="hero-slider"
          style="
            background: url({{asset('public/assets/img/slider/bg-hero.jpg')}}) 50% 50% / cover
                no-repeat,
              rgb(36, 36, 36);
          "
        >
          <div class="container">
            <div class="row">
              <div class="welcome-onboard">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div
                    class="main-content"
                    data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-easing="ease-in-sine"
                  >
                    <h1 class="hero-title">
                      Custom Full-cycle Development of
                      <span class="hero-sub"
                        >Comprehensive Enterprise Web Solutions</span
                      >
                    </h1>
                    <p class="hero-description">
                      Leverage our experience in Web Design and Development,
                      Android and IOS Development, Marketing Services
                      successfully build, deploy, and manage AIl solutions in
                      your industry.
                    </p>
                    <a class="btn btn-black" href="#">▸ Talk to Our Experts</a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div
                    class="cases-wrapper"
                    data-aos="fade-down"
                    data-aos-offset="200"
                    data-aos-easing="ease-in-sine"
                  >
                    <img
                      src="{{asset('public/assets/img/slider/vectr-screen.png')}}"
                      alt="vector-screen"
                      class="cases-img"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section services" id="services">
          <div class="container--services">
            <div class="row">
              <div
                class="resources resources-desc"
                data-aos="fade-up"
                data-aos-offset="200"
                data-aos-easing="ease-in-sine"
              >
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-6">
                      <div class="resources__grid bottom-grid top-level">
                        <div
                          class="resources__grid--item left-position matchHeight"
                          style="height: 114px"
                        >
                          <div class="resources__grid--icon">
                            <img
                              src="{{asset('public/assets/img/service/1.png')}}"
                              alt=""
                              width="55"
                              height="56"
                            />
                          </div>
                          <div class="resources__grid--icon not-visible">
                            <img
                              src="{{asset('public/assets/img/service/1.png')}}"
                              alt=""
                              width="55"
                              height="56"
                            />
                          </div>
                         
                          <div class="resources__grid--title">
                            <span>Web Development</span>
                          </div>
                          <div class="resources__grid--content">
                            <h4>Web Development</h4>
                            <p>
                              To stay competitive, businesses need to modernize
                              their IT infrastrucrure and applicaitons. We can
                              help you achieve digital transformation using
                              latest technologies to improve agility.
                            </p>
                          </div>
                        </div>
                        <div
                          class="resources__grid--item right-position matchHeight"
                          style="height: 114px"
                        >
                          <div class="resources__grid--icon">
                            <img
                              src="{{asset('public/assets/img/service/2.png')}}"
                              alt=""
                              width="53"
                              height="56"
                            />
                          </div>
                          <div class="resources__grid--icon not-visible">
                            <img
                              src="{{asset('public/assets/img/service/2.1.png')}}"
                              alt=""
                              width="53"
                              height="56"
                            />
                          </div>
                          <div class="resources__grid--title">
                            <span>Mobile Development</span>
                          </div>
                          <div class="resources__grid--content">
                            <h4>Mobile Development</h4>
                            <p>
                              To increase your business, a website and a mobile
                              application is necessary to engage customers and
                              to evolve their business. Customers believe mobile
                              app helps to increase the brand.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center middle-row">
                    <div class="col-lg-9">
                      <div class="resources__grid">
                        <div
                          class="resources__grid--item left-position matchHeight"
                          style="height: 114px"
                        >
                          <div class="resources__grid--icon">
                            <img
                              src="{{asset('public/assets/img/service/3.png')}}"
                              alt=""
                              width="66"
                              height="56"
                            />
                          </div>
                          <div class="resources__grid--icon not-visible">
                            <img
                              src="{{asset('public/assets/img/service/3.1.png')}}"
                              alt=""
                              width="66"
                              height="56"
                            />
                          </div>
                          <div class="resources__grid--title">
                            <span>Web Designing</span>
                          </div>
                          <div class="resources__grid--content">
                            <h4>Web Designing</h4>
                            <p>
                              Think of your web design as the digital face of
                              your business.Updated modern web design is the
                              equivalent to a friendly face greeting your new
                              visitors with a happy welcome.
                            </p>
                          </div>
                        </div>
                        <div
                          class="resources__grid--item text-center black-item matchHeight"
                          style="height: 114px"
                        >
                          <div class="resources__grid--icon">
                            <img src="{{asset('public/assets/img/logo/logo-white.png')}}" alt="" />
                          </div>
                          <!--<div class="resources__grid--content">
                            <h4>CX Core</h4>
                            <p>
                              We combine a set of technologies and design
                              practices to help you build (or complement) a
                              consistent and engaging CX or UI &amp; UX design
                              for a digital product.
                            </p>
                          </div>-->
                        </div>
                        <div
                          class="resources__grid--item right-position matchHeight"
                          style="height: 114px"
                        >
                          <div class="resources__grid--icon">
                            <img
                              src="{{asset('public/assets/img/service/4.png')}}"
                              alt=""
                              width="66"
                              height="56"
                            />
                          </div>
                          <div class="resources__grid--icon not-visible">
                            <img
                              src="{{asset('publicassets/img/service/4.1.png')}}"
                              alt=""
                              width="66"
                              height="56"
                            />
                          </div>
                          <div class="resources__grid--title">
                            <span>Responsive Design</span>
                          </div>
                          <div class="resources__grid--content">
                            <h4>Responsive Design</h4>
                            <p>
                              Because responsive web design is mobile-friendly,
                              it helps increase visibility on search engines,
                              which in turn can mean more visitors to your
                              website.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-lg-6">
                      <div class="resources__grid bottom-grid">
                        <div
                          class="resources__grid--item left-position matchHeight"
                          style="height: 132px"
                        >
                          <div class="resources__grid--icon">
                            <img
                              src="{{asset('public/assets/img/service/5.png')}}"
                              alt=""
                              width="55"
                              height="56"
                            />
                          </div>
                          <div class="resources__grid--icon not-visible">
                            <img
                              src="{{asset('public/assets/img/service/5.1.png')}}"
                              alt=""
                              width="55"
                              height="56"
                            />
                          </div>
                          <div class="resources__grid--title">
                            <span>Graphic Design</span>
                          </div>
                          <div class="resources__grid--content">
                            <h4>Graphic Design</h4>
                            <p>
                              The graphic designing is important in almost every
                              field that includes- marketing, magazine layout
                              etc. A good graphic design should effectively
                              communicate there design.
                            </p>
                          </div>
                        </div>
                        <div
                          class="resources__grid--item right-position matchHeight"
                          style="height: 132px"
                        >
                          <div class="resources__grid--icon">
                            <img
                              src="{{asset('public/assets/img/service/6.png')}}"
                              alt=""
                              width="66"
                              height="56"
                            />
                          </div>
                          <div class="resources__grid--icon not-visible">
                            <img
                              src="{{asset('public/assets/img/service/6.1.png')}}"
                              alt=""
                              width="66"
                              height="56"
                            />
                          </div>
                          <div class="resources__grid--title">
                            <span>Marketing Services</span>
                          </div>
                          <div class="resources__grid--content">
                            <h4>Marketing Services</h4>
                            <p>
                              Marketing is of vital importance to any business.
                              It is the key process of researching, promoting
                              and selling products or services to your target
                              market.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="resources resources-mobile">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <div class="resources__grid--item text-center black-item">
                        <div class="resources__grid--icon">
                          <img src="{{asset('public/assets/img/logo/logo-white.png')}}" alt="" />
                        </div>
                        <!--<div class="resources__grid--content">
                          <h4>CX Core</h4>
                          <p>
                            We combine a set of technologies and design
                            practices to help you build (or complement) a
                            consistent and engaging CX or UI &amp; UX design for
                            a digital product.
                          </p>
                        </div>-->
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="resources__grid--item mobile-icon">
                        <div class="resources__grid--icon">
                          <img
                            src="{{asset('public/assets/img/service/1.1.png')}}"
                            alt=""
                            width="66"
                            height="56"
                          />
                        </div>
                        <div class="resources__grid--content">
                          <h4>Mobile-Centered</h4>
                          <p>
                            Transfer your CX to a comprehensive mobile app that
                            converges all your services/operations in one
                            comfortable digital environment.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="resources__grid--item mobile-icon">
                        <div class="resources__grid--icon">
                          <img
                            src="{{asset('public/assets/img/service/2.1.png')}}"
                            alt=""
                            width="66"
                            height="56"
                          />
                        </div>
                        <div class="resources__grid--content">
                          <h4>End-to-end CX Desig</h4>
                          <p>
                            Create a tech-driven, industry-specific CX
                            experience that looks, feels, and works across all
                            platforms and business locations.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="resources__grid--item mobile-icon">
                        <div class="resources__grid--icon">
                          <img
                            src="{{asset('public/assets/img/service/3.1.png')}}"
                            alt=""
                            width="66"
                            height="56"
                          />
                        </div>
                        <div class="resources__grid--content">
                          <h4>Augmented &amp; Virtual Reality</h4>
                          <p>
                            Use augmented and virtual reality to create
                            engrossing entertainment experiences and simplify
                            key operations across industries.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="resources__grid--item mobile-icon">
                        <div class="resources__grid--icon">
                          <img
                            src="{{asset('public/assets/img/service/4.1.png')}}"
                            alt=""
                            width="66"
                            height="56"
                          />
                        </div>
                        <div class="resources__grid--content">
                          <h4>Digital Experience Platforms</h4>
                          <p>
                            Build a single customer/digital journey management
                            centre that connects and covers the needs of all
                            departments.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="resources__grid--item mobile-icon">
                        <div class="resources__grid--icon">
                          <img
                            src="{{asset('public/assets/img/service/5.1.png')}}"
                            alt=""
                            width="66"
                            height="56"
                          />
                        </div>
                        <div class="resources__grid--content">
                          <h4>Data Science &amp; Artificial Intelligence</h4>
                          <p>
                            Gather data at every customer touchpoint to learn
                            more about your users. Use AI algorithms to analyse
                            the data, and streamline each touchpoint.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="resources__grid--item mobile-icon">
                        <div class="resources__grid--icon">
                          <img
                            src="{{asset('public/assets/img/service/6.1.png')}}"
                            alt=""
                            width="66"
                            height="56"
                          />
                        </div>
                        <div class="resources__grid--content">
                          <h4>Connected Devices &amp; Internet of Things</h4>
                          <p>
                            Create a device fleet for a store or business
                            location. Establish custom IoT ecosystem with
                            sensors, mobile, and other connected devices.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="areas" id="work">
          <div class="container">
            <h2 class="title title--white">Areas of Expertise</h2>
            <div
              class="areas__container"
              data-aos="fade-up"
              data-aos-offset="200"
              data-aos-easing="ease-in-sine"
            >
              <div class="area webdevelop">
                <div class="area__wrapper">
                  <div class="area__img-wrapper">
                    <img
                      src="{{asset('public/assets/img/service/1.png')}}"
                      alt="Web Development"
                      class="area__img"
                    />
                  </div>
                  <div class="area__title">Web Development</div>
                </div>
                <div class="area__content">
                  <h3 class="area__name">Web Development</h3>
                  <ul class="area__list">
                    <li class="area__unit">
                      Store and process all video streams
                    </li>
                    <li class="area__unit">
                      Surveillance, wearable, hand-held and other cameras
                      integrated in one data lake platform
                    </li>
                    <li class="area__unit">
                      Highly-customizable video learners
                    </li>
                    <li class="area__unit">
                      Lightweight ML models on the edge
                    </li>
                    <li class="area__unit">
                      Fully automated end-to-end production process
                    </li>
                    <li class="area__unit">
                      Face recognition matched with other users transactions
                    </li>
                    <li class="area__unit">Personalized image processing</li>
                    <li class="area__unit">Behavior patterns extraction</li>
                    <li class="area__unit">Detecting blacklisted persons</li>
                  </ul>
                </div>
              </div>
              <div class="area mobiledevlop">
                <div class="area__wrapper">
                  <div class="area__img-wrapper">
                    <img
                      src="{{asset('public/assets/img/service/2.png')}}"
                      alt="Mobile Development"
                      class="area__img"
                    />
                  </div>
                  <div class="area__title">Mobile Development</div>
                </div>
                <div class="area__content">
                  <h3 class="area__name">Mobile Development</h3>
                  <ul class="area__list">
                    <li class="area__unit">
                      Predictive maintenance algorithms for Industrial IoT
                      platforms
                    </li>
                    <li class="area__unit">
                      Finance: AI driven market insights and predictions;
                      predictive and prescriptive maintenance
                    </li>
                    <li class="area__unit">
                      Predictive algorithms for individual customer experiences
                      (Web and Mobile)
                    </li>
                    <li class="area__unit">
                      AI-driven data analytics for trend-watching in Retail and
                      other industries
                    </li>
                    <li class="area__unit">Data mining</li>
                  </ul>
                </div>
              </div>
              <div class="area webdesign">
                <div class="area__wrapper">
                  <div class="area__img-wrapper">
                    <img
                      src="{{asset('public/assets/img/service/3.png')}}"
                      alt="Web Designing"
                      class="area__img"
                    />
                  </div>
                  <div class="area__title">Web Designing</div>
                </div>
                <div class="area__content">
                  <h3 class="area__name">Web Designing</h3>
                  <ul class="area__list">
                    <li class="area__unit">
                      Consumer Machine Learning Chatbots
                    </li>
                    <li class="area__unit">
                      Department-specific AI assistants
                    </li>
                    <li class="area__unit">Data mining and extraction</li>
                    <li class="area__unit">Voice recognition/Voice AI</li>
                  </ul>
                </div>
              </div>
              <div class="area resposivedesign area--active">
                <div class="area__wrapper">
                  <div class="area__img-wrapper">
                    <img
                      src="{{asset('public/assets/img/service/4.png')}}"
                      alt="Responsive Design"
                      class="area__img"
                    />
                  </div>
                  <div class="area__title">Responsive Design</div>
                </div>
                <div class="area__content">
                  <h3 class="area__name">Responsive Design</h3>
                  <ul class="area__list">
                    <li class="area__unit">
                      Big data, business Intelligence analytics, predictive
                      tools, planning, generative models, and optimization tasks
                      in one place
                    </li>
                    <li class="area__unit">
                      Data ecosystem architecture development
                    </li>
                    <li class="area__unit">Distributed storage</li>
                    <li class="area__unit">
                      Scale-ready read and write processing
                    </li>
                    <li class="area__unit">Data cleaning processes</li>
                    <li class="area__unit">
                      Pre-built high level features for machine learning
                    </li>
                    <li class="area__unit">
                      Integration with popular cloud platforms
                    </li>
                  </ul>
                </div>
              </div>
              <div class="area graphicdesign">
                <div class="area__wrapper">
                  <div class="area__img-wrapper">
                    <img
                      src="{{asset('public/assets/img/service/5.png')}}"
                      alt="Graphic Design"
                      class="area__img"
                    />
                  </div>
                  <div class="area__title">Graphic Design</div>
                </div>
                <div class="area__content">
                  <h3 class="area__name">Graphic Design</h3>
                  <ul class="area__list">
                    <li class="area__unit">
                      Big data, business Intelligence analytics, predictive
                      tools, planning, generative models, and optimization tasks
                      in one place
                    </li>
                    <li class="area__unit">
                      Data ecosystem architecture development
                    </li>
                    <li class="area__unit">Distributed storage</li>
                    <li class="area__unit">
                      Scale-ready read and write processing
                    </li>
                    <li class="area__unit">Data cleaning processes</li>
                    <li class="area__unit">
                      Pre-built high level features for machine learning
                    </li>
                    <li class="area__unit">
                      Integration with popular cloud platforms
                    </li>
                  </ul>
                </div>
              </div>
              <div class="area marketingservice">
                <div class="area__wrapper">
                  <div class="area__img-wrapper">
                    <img
                      src="{{asset('public/assets/img/service/6.png')}}"
                      alt="Marketing Sevices"
                      class="area__img"
                    />
                  </div>
                  <div class="area__title">Marketing Sevices</div>
                </div>
                <div class="area__content">
                  <h3 class="area__name">Marketing Sevices</h3>
                  <ul class="area__list">
                    <li class="area__unit">
                      Big data, business Intelligence analytics, predictive
                      tools, planning, generative models, and optimization tasks
                      in one place
                    </li>
                    <li class="area__unit">
                      Data ecosystem architecture development
                    </li>
                    <li class="area__unit">Distributed storage</li>
                    <li class="area__unit">
                      Scale-ready read and write processing
                    </li>
                    <li class="area__unit">Data cleaning processes</li>
                    <li class="area__unit">
                      Pre-built high level features for machine learning
                    </li>
                    <li class="area__unit">
                      Integration with popular cloud platforms
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="ctablock">
          <div class="ctablock__container">
            <div class="ctablock__wrapper">
              <h2
                class="ctablock__title"
                data-aos="fade-up"
                data-aos-offset="200"
                data-aos-easing="ease-in-sine"
              >
                Start leveraging the power of Development in your
                operations.<span class="ctablock__subtitle"
                  >Tell our experts about your project.</span
                >
              </h2>
              <a
                class="cta"
                href="#"
                data-aos="fade-down"
                data-aos-offset="200"
                data-aos-easing="ease-in-sine"
                >▸ Contact Our Experts</a
              >
            </div>
          </div>
        </section>
        <section class="clients" id="portfolio">
          <div class="container">
            <div class="row">
              <div class="col-xl-8 offset-xl-4 text-center">
                <h2>Our Portfolio</h2>
              </div>
              <div id="pt-main">
                <div class="clients__slider pt-page current" id="page1">
                  <div class="slider-main-page">
                    <div class="clients__slider--slide">
                      <div
                        class="client-image"
                        style="
                          background-image: url({{asset('public/assets/img/portfolio/euro-accident.png')}});
                        "
                      ></div>
                      <div class="client-content">
                        <button
                          type="button"
                          class="slick-next next-click" id="next"></button>
                        <button
                          type="button"
                          class="slick-prev prev-click" id="prev"></button>
                        <span>Industry</span>
                        <h3>EuroAccident</h3>
                        <p>
                          Sweden’s leading insurance company transfers its entire
                          customer experience to a single application that empowers
                          clients, cut costs, and helps gather big data.
                        </p>
                      </div>
                    </div>
                    <div class="clients__min-slider--slide">
                      <div
                        class="client-image"
                        style="
                          background-image: url({{asset('public/assets/img/portfolio/harley-davidson.png')}});
                        "
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="clients__slider pt-page" id="page2">
                  <div class="slider-main-page">
                    <div class="clients__slider--slide">
                      <div
                        class="client-image"
                        style="
                          background-image: url({{asset('public/assets/img/portfolio/euro-accident.png')}});
                        "
                      ></div>
                      <div class="client-content">
                        <button
                          type="button"
                          class="slick-next next-click" id="next"></button>
                        <button
                          type="button"
                          class="slick-prev prev-click" id="prev"></button>
                        <span>Industry</span>
                        <h3>EuroAccident</h3>
                        <p>
                          Sweden’s leading insurance company transfers its entire
                          customer experience to a single application that empowers
                          clients, cut costs, and helps gather big data.
                        </p>
                      </div>
                    </div>
                    <div class="clients__min-slider--slide">
                      <div
                        class="client-image"
                        style="
                          background-image: url({{asset('public/assets/img/portfolio/harley-davidson.png')}});
                        "
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="clients__slider pt-page" id="page3">
                  <div class="slider-main-page">
                    <div class="clients__slider--slide">
                      <div
                        class="client-image"
                        style="
                          background-image: url({{asset('public/assets/img/portfolio/euro-accident.png')}});
                        "
                      ></div>
                      <div class="client-content">
                        <button
                          type="button"
                          class="slick-next next-click" id="next"></button>
                        <button
                          type="button"
                          class="slick-prev prev-click" id="prev"></button>
                        <span>Industry</span>
                        <h3>EuroAccident</h3>
                        <p>
                          Sweden’s leading insurance company transfers its entire
                          customer experience to a single application that empowers
                          clients, cut costs, and helps gather big data.
                        </p>
                      </div>
                    </div>
                    <div class="clients__min-slider--slide">
                      <div
                        class="client-image"
                        style="
                          background-image: url({{asset('public/assets/img/portfolio/harley-davidson.png')}});
                        "
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="clients__slider pt-page" id="page4">
                  <div class="slider-main-page">
                    <div class="clients__slider--slide">
                      <div
                        class="client-image"
                        style="
                          background-image: url({{asset('public/assets/img/portfolio/euro-accident.png')}});
                        "
                      ></div>
                      <div class="client-content">
                        <button
                          type="button"
                          class="slick-next next-click" id="next"></button>
                        <button
                          type="button"
                          class="slick-prev prev-click" id="prev"></button>
                        <span>Industry</span>
                        <h3>EuroAccident</h3>
                        <p>
                          Sweden’s leading insurance company transfers its entire
                          customer experience to a single application that empowers
                          clients, cut costs, and helps gather big data.
                        </p>
                      </div>
                    </div>
                    <div class="clients__min-slider--slide">
                      <div
                        class="client-image"
                        style="
                          background-image: url({{asset('public/assets/img/portfolio/harley-davidson.png')}});
                        "
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="process">
          <div class="container">
            <div class="row">
              <div class="col text-center">
                <h2
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  class="aos-init aos-animate"
                >
                  Our Design Process
                </h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10">
                <div class="row">
                  <div class="col-md-6">
                    <div
                      class="process__num blue-list aos-init"
                      data-aos="fade-left"
                      data-aos-delay="200"
                      data-aos-duration="700"
                    >
                      <h4
                        data-aos="fade-left"
                        data-aos-delay="50"
                        data-aos-duration="1000"
                        class="aos-init"
                      >
                        Understand
                      </h4>
                      <ul
                        class="matchHeight aos-init"
                        data-aos="fade-left"
                        data-aos-delay="60"
                        data-aos-duration="1000"
                        style="height: 175px"
                      >
                        <li>Interview with stakeholders to define goals</li>
                        <li>Understand needs of target user</li>
                        <li>Research market and competitors</li>
                        <li>Analyze customer analytics</li>
                      </ul>
                      <div
                        data-aos="fade-left"
                        data-aos-delay="450"
                        data-aos-duration="1000"
                        class="aos-init"
                      >
                        <span> Deliverables </span>
                        <p class="process__num--desc">
                          key personas profiles, customer journey map,
                          competitors overview.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div
                      class="process__num green-list aos-init"
                      data-aos="fade-left"
                      data-aos-delay="600"
                      data-aos-duration="700"
                    >
                      <h4
                        data-aos="fade-left"
                        data-aos-delay="50"
                        data-aos-duration="1000"
                        class="aos-init"
                      >
                        Define &amp; Ideate
                      </h4>
                      <ul
                        data-aos="fade-left"
                        data-aos-delay="60"
                        data-aos-duration="1000"
                        class="matchHeight aos-init"
                        style="height: 175px"
                      >
                        <li>Identify key use cases</li>
                        <li>Define feature set</li>
                        <li>Do story mapping</li>
                        <li>Prioritize based on resources and product goals</li>
                      </ul>
                      <div
                        data-aos="fade-left"
                        data-aos-delay="450"
                        data-aos-duration="1000"
                        class="aos-init"
                      >
                        <span> Deliverables </span>
                        <p class="process__num--desc">
                          user scenarios, list of use cases and user stories,
                          prioritized feature set.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10">
                <div class="row">
                  <div class="col-md-6">
                    <div
                      class="process__num purple-list aos-init"
                      data-aos="fade-left"
                      data-aos-delay="1000"
                      data-aos-duration="700"
                    >
                      <h4
                        data-aos="fade-left"
                        data-aos-delay="50"
                        data-aos-duration="1000"
                        class="aos-init"
                      >
                        Prototype/CX concept
                      </h4>
                      <ul
                        data-aos="fade-left"
                        data-aos-delay="250"
                        data-aos-duration="1000"
                        class="matchHeight aos-init"
                        style="height: 140px"
                      >
                        <li>Define information architecture</li>
                        <li>Create wireframes</li>
                        <li>
                          Define visual direction and create visual design
                          mockup
                        </li>
                      </ul>
                      <div
                        data-aos="fade-left"
                        data-aos-delay="450"
                        data-aos-duration="1000"
                        class="aos-init"
                      >
                        <span> Deliverables </span>
                        <p class="process__num--desc">
                          low-fidelity prototype, high-fidelity visual mockups
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div
                      class="process__num yellow-list aos-init"
                      data-aos="fade-left"
                      data-aos-delay="1400"
                      data-aos-duration="700"
                    >
                      <h4
                        data-aos="fade-left"
                        data-aos-delay="50"
                        data-aos-duration="1000"
                        class="aos-init"
                      >
                        Validate
                      </h4>
                      <ul
                        data-aos="fade-left"
                        data-aos-delay="250"
                        data-aos-duration="1000"
                        class="matchHeight aos-init"
                        style="height: 140px"
                      >
                        <li>Test the prototype and key flows</li>
                        <li>Iterate based on feedback</li>
                      </ul>
                      <div
                        data-aos="fade-left"
                        data-aos-delay="450"
                        data-aos-duration="1000"
                        class="aos-init"
                      >
                        <span> Deliverables </span>
                        <p class="process__num--desc">
                          design validated with users and stakeholders.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="about" id="about">
          <div class="about__heading">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <div
                    class="about__content"
                    data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-easing="ease-in-sine"
                  >
                    <h2 class="aos-init aos-animate">
                      About<br />
                      Radix Solution
                    </h2>
                    <p class="aos-init aos-animate">
                      We are a young, dynamic web agency working on cutting edge
                      technologies. We offer a “Multi-Discipline” services
                      ranging from web site design, build and deployment,
                      graphic design, search engine optimization, digital
                      marketing and just about any web based digital service you
                      can think of. Our team is “ever growing” and offers a
                      multitude of capabilities. We also offer state-of-the-art
                      IT support to businesses, meaning that we really can offer
                      an end-to-end digital service.
                    </p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div
                    id="counter"
                    class="about__stat"
                    data-aos="fade-down"
                    data-aos-offset="200"
                    data-aos-easing="ease-in-sine"
                  >
                    <div class="about__stat--item active aos-init aos-animate">
                      <span class="num counter-value" data-count="11">11</span>
                      <span class="plus">+</span>
                      <span class="title"> Works Completed </span>
                    </div>
                    <div class="about__stat--item active aos-init aos-animate">
                      <span class="num counter-value" data-count="350">5</span>
                      <span class="title"> Years Experience </span>
                    </div>
                    <div class="about__stat--item active aos-init aos-animate">
                      <span class="num counter-value" data-count="6">41</span>
                      <span class="title">Total Clients </span>
                    </div>
                    <div class="about__stat--item active aos-init aos-animate">
                      <span class="num counter-value" data-count="1140"
                        >1140</span
                      >
                      <span class="plus">+</span>
                      <span class="title">Hours Worked </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row reviews">
                <div class="clients-reviews">
                  <h3
                    class="clients__title--reviews"
                    data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-easing="ease-in-sine"
                  >
                    Our Enterprise Clients
                  </h3>
                  <div class="clients--reviews__container">
                    <div
                      class="clients__review-wrapper"
                      data-aos="fade-down"
                      data-aos-offset="200"
                      data-aos-easing="ease-in-sine">
                      <p>
                        "They did a great job, as opposed to the other companies
                        I worked with, They did not just care about getting the
                        job done. They cared about getting the job done well.
                        That is why I will be working with there team again and
                        I sincerely recommend them to everyone."
                        <br />
                        <span>Karim Mughahed</span>
                      </p>
                    </div>
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
                <div class="col-md-12">
                  <h2 text-center="">Got a project? Let’s talk.</h2>
                </div>
                <div
                  class="col-lg-8 col-md-12"
                  data-aos="fade-up"
                  data-aos-offset="200"
                  data-aos-easing="ease-in-sine"
                >
                  <div id="form" class="contact-form">
                    <form>
                      <div class="nameFieldsWrapper">
                        <div class="field required">
                          <input
                            type="text"
                            placeholder="Full Name"
                            class="contactInput"
                            maxlength="255"
                            name="firstname"
                            id="id_firstname"
                            value=""
                          />
                        </div>
                        <div class="field required">
                          <input
                            type="text"
                            placeholder="Last Name"
                            class="contactInput"
                            maxlength="255"
                            name="lastname"
                            id="id_lastname"
                            value=""
                          />
                        </div>
                      </div>
                      <div class="nameFieldsWrapper">
                        <div class="field required">
                          <input
                            type="email"
                            placeholder="Email"
                            class="contactInput"
                            maxlength="255"
                            name="email"
                            id="id_email"
                            value=""
                          />
                        </div>
                        <div class="field required">
                          <input
                            type="text"
                            placeholder="Company"
                            class="contactInput"
                            maxlength="255"
                            name="company"
                            id="id_company"
                            value=""
                          />
                        </div>
                      </div>
                      <div class="nameFieldsWrapper">
                        <div class="field required">
                          <input
                            type="text"
                            placeholder="Phone"
                            class="contactInput"
                            maxlength="50"
                            name="phone"
                            id="id_phone"
                            value=""
                          />
                        </div>
                        <div class="field required">
                          <select
                            placeholder="Country"
                            class="contactInput"
                            name="country"
                            id="id_country"
                          >
                            <option value="">Country</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua &amp;amp; Barbuda">
                              Antigua &amp;amp; Barbuda
                            </option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia" data-reactid="401">
                              Bolivia
                            </option>
                            <option
                              value="Bosnia &amp;amp; Herzegovina"
                              data-reactid="402"
                            >
                              Bosnia &amp;amp; Herzegovina
                            </option>
                            <option value="Botswana" data-reactid="403">
                              Botswana
                            </option>
                            <option value="Brazil" data-reactid="404">
                              Brazil
                            </option>
                            <option
                              value="British Virgin Islands"
                              data-reactid="405"
                            >
                              British Virgin Islands
                            </option>
                            <option value="Brunei" data-reactid="406">
                              Brunei
                            </option>
                            <option value="Bulgaria" data-reactid="407">
                              Bulgaria
                            </option>
                            <option value="Burkina Faso" data-reactid="408">
                              Burkina Faso
                            </option>
                            <option value="Burundi" data-reactid="409">
                              Burundi
                            </option>
                            <option value="Cambodia" data-reactid="410">
                              Cambodia
                            </option>
                            <option value="Cameroon" data-reactid="411">
                              Cameroon
                            </option>
                            <option value="Canada" data-reactid="412">
                              Canada
                            </option>
                            <option value="Cape Verde" data-reactid="413">
                              Cape Verde
                            </option>
                            <option value="Cayman Islands" data-reactid="414">
                              Cayman Islands
                            </option>
                            <option value="Chad" data-reactid="415">
                              Chad
                            </option>
                            <option value="Chile" data-reactid="416">
                              Chile
                            </option>
                            <option value="China" data-reactid="417">
                              China
                            </option>
                            <option value="Colombia" data-reactid="418">
                              Colombia
                            </option>
                            <option value="Congo" data-reactid="419">
                              Congo
                            </option>
                            <option value="Cook Islands" data-reactid="420">
                              Cook Islands
                            </option>
                            <option value="Costa Rica" data-reactid="421">
                              Costa Rica
                            </option>
                            <option value="Cote D Ivoire" data-reactid="422">
                              Cote D Ivoire
                            </option>
                            <option value="Croatia" data-reactid="423">
                              Croatia
                            </option>
                            <option value="Cruise Ship" data-reactid="424">
                              Cruise Ship
                            </option>
                            <option value="Cuba" data-reactid="425">
                              Cuba
                            </option>
                            <option value="Cyprus" data-reactid="426">
                              Cyprus
                            </option>
                            <option value="Czech Republic" data-reactid="427">
                              Czech Republic
                            </option>
                            <option value="Denmark" data-reactid="428">
                              Denmark
                            </option>
                            <option value="Djibouti" data-reactid="429">
                              Djibouti
                            </option>
                            <option value="Dominica" data-reactid="430">
                              Dominica
                            </option>
                            <option
                              value="Dominican Republic"
                              data-reactid="431"
                            >
                              Dominican Republic
                            </option>
                            <option value="Ecuador" data-reactid="432">
                              Ecuador
                            </option>
                            <option value="Egypt" data-reactid="433">
                              Egypt
                            </option>
                            <option value="El Salvador" data-reactid="434">
                              El Salvador
                            </option>
                            <option
                              value="Equatorial Guinea"
                              data-reactid="435"
                            >
                              Equatorial Guinea
                            </option>
                            <option value="Estonia" data-reactid="436">
                              Estonia
                            </option>
                            <option value="Ethiopia" data-reactid="437">
                              Ethiopia
                            </option>
                            <option value="Falkland Islands" data-reactid="438">
                              Falkland Islands
                            </option>
                            <option value="Faroe Islands" data-reactid="439">
                              Faroe Islands
                            </option>
                            <option value="Fiji" data-reactid="440">
                              Fiji
                            </option>
                            <option value="Finland" data-reactid="441">
                              Finland
                            </option>
                            <option value="France" data-reactid="442">
                              France
                            </option>
                            <option value="French Polynesia" data-reactid="443">
                              French Polynesia
                            </option>
                            <option
                              value="French West Indies"
                              data-reactid="444"
                            >
                              French West Indies
                            </option>
                            <option value="Gabon" data-reactid="445">
                              Gabon
                            </option>
                            <option value="Gambia" data-reactid="446">
                              Gambia
                            </option>
                            <option value="Georgia" data-reactid="447">
                              Georgia
                            </option>
                            <option value="Germany" data-reactid="448">
                              Germany
                            </option>
                            <option value="Ghana" data-reactid="449">
                              Ghana
                            </option>
                            <option value="Gibraltar" data-reactid="450">
                              Gibraltar
                            </option>
                            <option value="Greece" data-reactid="451">
                              Greece
                            </option>
                            <option value="Greenland" data-reactid="452">
                              Greenland
                            </option>
                            <option value="Grenada" data-reactid="453">
                              Grenada
                            </option>
                            <option value="Guam" data-reactid="454">
                              Guam
                            </option>
                            <option value="Guatemala" data-reactid="455">
                              Guatemala
                            </option>
                            <option value="Guernsey" data-reactid="456">
                              Guernsey
                            </option>
                            <option value="Guinea" data-reactid="457">
                              Guinea
                            </option>
                            <option value="Guinea Bissau" data-reactid="458">
                              Guinea Bissau
                            </option>
                            <option value="Guyana" data-reactid="459">
                              Guyana
                            </option>
                            <option value="Haiti" data-reactid="460">
                              Haiti
                            </option>
                            <option value="Honduras" data-reactid="461">
                              Honduras
                            </option>
                            <option value="Hong Kong" data-reactid="462">
                              Hong Kong
                            </option>
                            <option value="Hungary" data-reactid="463">
                              Hungary
                            </option>
                            <option value="Iceland" data-reactid="464">
                              Iceland
                            </option>
                            <option value="India" data-reactid="465">
                              India
                            </option>
                            <option value="Indonesia" data-reactid="466">
                              Indonesia
                            </option>
                            <option value="Iran" data-reactid="467">
                              Iran
                            </option>
                            <option value="Iraq" data-reactid="468">
                              Iraq
                            </option>
                            <option value="Ireland" data-reactid="469">
                              Ireland
                            </option>
                            <option value="Isle of Man" data-reactid="470">
                              Isle of Man
                            </option>
                            <option value="Israel" data-reactid="471">
                              Israel
                            </option>
                            <option value="Italy" data-reactid="472">
                              Italy
                            </option>
                            <option value="Jamaica" data-reactid="473">
                              Jamaica
                            </option>
                            <option value="Japan" data-reactid="474">
                              Japan
                            </option>
                            <option value="Jersey" data-reactid="475">
                              Jersey
                            </option>
                            <option value="Jordan" data-reactid="476">
                              Jordan
                            </option>
                            <option value="Kazakhstan" data-reactid="477">
                              Kazakhstan
                            </option>
                            <option value="Kenya" data-reactid="478">
                              Kenya
                            </option>
                            <option value="Kuwait" data-reactid="479">
                              Kuwait
                            </option>
                            <option value="Kyrgyz Republic" data-reactid="480">
                              Kyrgyz Republic
                            </option>
                            <option value="Laos" data-reactid="481">
                              Laos
                            </option>
                            <option value="Latvia" data-reactid="482">
                              Latvia
                            </option>
                            <option value="Lebanon" data-reactid="483">
                              Lebanon
                            </option>
                            <option value="Lesotho" data-reactid="484">
                              Lesotho
                            </option>
                            <option value="Liberia" data-reactid="485">
                              Liberia
                            </option>
                            <option value="Libya" data-reactid="486">
                              Libya
                            </option>
                            <option value="Liechtenstein" data-reactid="487">
                              Liechtenstein
                            </option>
                            <option value="Lithuania" data-reactid="488">
                              Lithuania
                            </option>
                            <option value="Luxembourg" data-reactid="489">
                              Luxembourg
                            </option>
                            <option value="Macau" data-reactid="490">
                              Macau
                            </option>
                            <option value="Macedonia" data-reactid="491">
                              Macedonia
                            </option>
                            <option value="Madagascar" data-reactid="492">
                              Madagascar
                            </option>
                            <option value="Malawi" data-reactid="493">
                              Malawi
                            </option>
                            <option value="Malaysia" data-reactid="494">
                              Malaysia
                            </option>
                            <option value="Maldives" data-reactid="495">
                              Maldives
                            </option>
                            <option value="Mali" data-reactid="496">
                              Mali
                            </option>
                            <option value="Malta" data-reactid="497">
                              Malta
                            </option>
                            <option value="Mauritania" data-reactid="498">
                              Mauritania
                            </option>
                            <option value="Mauritius" data-reactid="499">
                              Mauritius
                            </option>
                            <option value="Mexico" data-reactid="500">
                              Mexico
                            </option>
                            <option value="Moldova" data-reactid="501">
                              Moldova
                            </option>
                            <option value="Monaco" data-reactid="502">
                              Monaco
                            </option>
                            <option value="Mongolia" data-reactid="503">
                              Mongolia
                            </option>
                            <option value="Montenegro" data-reactid="504">
                              Montenegro
                            </option>
                            <option value="Montserrat" data-reactid="505">
                              Montserrat
                            </option>
                            <option value="Morocco" data-reactid="506">
                              Morocco
                            </option>
                            <option value="Mozambique" data-reactid="507">
                              Mozambique
                            </option>
                            <option value="Namibia" data-reactid="508">
                              Namibia
                            </option>
                            <option value="Nepal" data-reactid="509">
                              Nepal
                            </option>
                            <option value="Netherlands" data-reactid="510">
                              Netherlands
                            </option>
                            <option
                              value="Netherlands Antilles"
                              data-reactid="511"
                            >
                              Netherlands Antilles
                            </option>
                            <option value="New Caledonia" data-reactid="512">
                              New Caledonia
                            </option>
                            <option value="New Zealand" data-reactid="513">
                              New Zealand
                            </option>
                            <option value="Nicaragua" data-reactid="514">
                              Nicaragua
                            </option>
                            <option value="Niger" data-reactid="515">
                              Niger
                            </option>
                            <option value="Nigeria" data-reactid="516">
                              Nigeria
                            </option>
                            <option value="Norway" data-reactid="517">
                              Norway
                            </option>
                            <option value="Oman" data-reactid="518">
                              Oman
                            </option>
                            <option value="Pakistan" data-reactid="519">
                              Pakistan
                            </option>
                            <option value="Palestine" data-reactid="520">
                              Palestine
                            </option>
                            <option value="Panama" data-reactid="521">
                              Panama
                            </option>
                            <option value="Papua New Guinea" data-reactid="522">
                              Papua New Guinea
                            </option>
                            <option value="Paraguay" data-reactid="523">
                              Paraguay
                            </option>
                            <option value="Peru" data-reactid="524">
                              Peru
                            </option>
                            <option value="Philippines" data-reactid="525">
                              Philippines
                            </option>
                            <option value="Poland" data-reactid="526">
                              Poland
                            </option>
                            <option value="Portugal" data-reactid="527">
                              Portugal
                            </option>
                            <option value="Puerto Rico" data-reactid="528">
                              Puerto Rico
                            </option>
                            <option value="Qatar" data-reactid="529">
                              Qatar
                            </option>
                            <option value="Reunion" data-reactid="530">
                              Reunion
                            </option>
                            <option value="Romania" data-reactid="531">
                              Romania
                            </option>
                            <option value="Russia" data-reactid="532">
                              Russia
                            </option>
                            <option value="Rwanda" data-reactid="533">
                              Rwanda
                            </option>
                            <option
                              value="Saint Pierre &amp;amp; Miquelon"
                              data-reactid="534"
                            >
                              Saint Pierre &amp;amp; Miquelon
                            </option>
                            <option value="Samoa" data-reactid="535">
                              Samoa
                            </option>
                            <option value="San Marino" data-reactid="536">
                              San Marino
                            </option>
                            <option value="Satellite" data-reactid="537">
                              Satellite
                            </option>
                            <option value="Saudi Arabia" data-reactid="538">
                              Saudi Arabia
                            </option>
                            <option value="Senegal" data-reactid="539">
                              Senegal
                            </option>
                            <option value="Serbia" data-reactid="540">
                              Serbia
                            </option>
                            <option value="Seychelles" data-reactid="541">
                              Seychelles
                            </option>
                            <option value="Sierra Leone" data-reactid="542">
                              Sierra Leone
                            </option>
                            <option value="Singapore" data-reactid="543">
                              Singapore
                            </option>
                            <option value="Slovakia" data-reactid="544">
                              Slovakia
                            </option>
                            <option value="Slovenia" data-reactid="545">
                              Slovenia
                            </option>
                            <option value="South Africa" data-reactid="546">
                              South Africa
                            </option>
                            <option value="South Korea" data-reactid="547">
                              South Korea
                            </option>
                            <option value="Spain" data-reactid="548">
                              Spain
                            </option>
                            <option value="Sri Lanka" data-reactid="549">
                              Sri Lanka
                            </option>
                            <option
                              value="St Kitts &amp;amp; Nevis"
                              data-reactid="550"
                            >
                              St Kitts &amp;amp; Nevis
                            </option>
                            <option value="St Lucia" data-reactid="551">
                              St Lucia
                            </option>
                            <option value="St Vincent" data-reactid="552">
                              St Vincent
                            </option>
                            <option value="St. Lucia" data-reactid="553">
                              St. Lucia
                            </option>
                            <option value="Sudan" data-reactid="554">
                              Sudan
                            </option>
                            <option value="Suriname" data-reactid="555">
                              Suriname
                            </option>
                            <option value="Swaziland" data-reactid="556">
                              Swaziland
                            </option>
                            <option value="Sweden" data-reactid="557">
                              Sweden
                            </option>
                            <option value="Switzerland" data-reactid="558">
                              Switzerland
                            </option>
                            <option value="Syria" data-reactid="559">
                              Syria
                            </option>
                            <option value="Taiwan" data-reactid="560">
                              Taiwan
                            </option>
                            <option value="Tajikistan" data-reactid="561">
                              Tajikistan
                            </option>
                            <option value="Tanzania" data-reactid="562">
                              Tanzania
                            </option>
                            <option value="Thailand" data-reactid="563">
                              Thailand
                            </option>
                            <option value="Timor L'Este" data-reactid="564">
                              Timor L'Este
                            </option>
                            <option value="Togo" data-reactid="565">
                              Togo
                            </option>
                            <option value="Tonga" data-reactid="566">
                              Tonga
                            </option>
                            <option
                              value="Trinidad &amp;amp; Tobago"
                              data-reactid="567"
                            >
                              Trinidad &amp;amp; Tobago
                            </option>
                            <option value="Tunisia" data-reactid="568">
                              Tunisia
                            </option>
                            <option value="Turkey" data-reactid="569">
                              Turkey
                            </option>
                            <option value="Turkmenistan" data-reactid="570">
                              Turkmenistan
                            </option>
                            <option
                              value="Turks &amp;amp; Caicos"
                              data-reactid="571"
                            >
                              Turks &amp;amp; Caicos
                            </option>
                            <option value="Uganda" data-reactid="572">
                              Uganda
                            </option>
                            <option value="Ukraine" data-reactid="573">
                              Ukraine
                            </option>
                            <option
                              value="United Arab Emirates"
                              data-reactid="574"
                            >
                              United Arab Emirates
                            </option>
                            <option value="United Kingdom" data-reactid="575">
                              United Kingdom
                            </option>
                            <option value="United States" data-reactid="576">
                              United States
                            </option>
                            <option
                              value="United States Minor Outlying Islands"
                              data-reactid="577"
                            >
                              United States Minor Outlying Islands
                            </option>
                            <option value="Uruguay" data-reactid="578">
                              Uruguay
                            </option>
                            <option value="Uzbekistan" data-reactid="579">
                              Uzbekistan
                            </option>
                            <option value="Venezuela" data-reactid="580">
                              Venezuela
                            </option>
                            <option value="Vietnam" data-reactid="581">
                              Vietnam
                            </option>
                            <option
                              value="Virgin Islands (US)"
                              data-reactid="582"
                            >
                              Virgin Islands (US)
                            </option>
                            <option value="Yemen" data-reactid="583">
                              Yemen
                            </option>
                            <option value="Zambia" data-reactid="584">
                              Zambia
                            </option>
                            <option value="Zimbabwe" data-reactid="585">
                              Zimbabwe
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="field required">
                        <textarea
                          placeholder="Message"
                          class="contactInput"
                          name="description"
                          id="id_description"
                        ></textarea>
                      </div>
                      <p class="privacy">
                        By sending this form I confirm that I have read and
                        accept Intellectsoft
                        <a
                          class="privacy-link"
                          href="https://www.intellectsoft.net/privacy-policy"
                          target="_blank"
                          >Privacy Policy</a
                        >
                      </p>
                      <div class="otherElementsWrapper">
                        <div class="ndaCheckWrapper">
                          <div class="field" data-reactid="595">
                            <input
                              type="checkbox"
                              class="ndaCheckbox"
                              name="send_nda"
                              id="id_send_nda"
                              data-reactid="596"
                            /><label
                              for="id_send_nda"
                              class="contactLabel"
                              data-reactid="597"
                              >Send NDA</label
                            >
                          </div>
                        </div>
                        <div class="ndaAttachWrapper">
                          <div class="field">
                            <span>
                              <input
                                type="file"
                                class="attachInput"
                                accept=".doc, .docx, .pdf, .odt, .ott, .txt"
                                name="attach"
                                id="id_attach"
                              />
                              <label class="attachInput-label" for="id_attach"
                                >Attach File</label
                              >
                            </span>
                          </div>
                        </div>
                        <div class="btnWrapper">
                          <button
                            class="btn white-btn"
                            type="submit"
                            onclick="ga('send', 'event', 'contact-us-final', 'click', 'cx-lab');"
                          >
                            <span>▸ Contact Our Team</span>
                          </button>
                        </div>
                      </div>
                    </form>
                    <div class="success hidden">
                      <img
                        src="/static/cx-lab/source/img/success.svg"
                        alt="Success"
                      />
                      <h3>THANK YOU FOR YOUR MESSAGE!</h3>
                      <p>
                        We will get in touch with you regarding your request
                        within one business day.
                      </p>
                      <a
                        id="clearStorage"
                        href=""
                        class="button button--primary"
                        >Send again</a
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-md-12"
                  data-aos="fade-down"
                  data-aos-offset="200"
                  data-aos-easing="ease-in-sine"
                >
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-lefts">Get in Touch</h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">Lahore Pakistan</p>
                    <ul class="list-ico">
                      <li>
                        <span class="ion-ios-location"></span> 767 P Block,
                        Sabzazar, Lahore Pakistan
                      </li>
                      <li>
                        <span class="ion-ios-telephone"></span> (+92)
                        333-4413475
                      </li>
                      <li>
                        <span class="ion-email"></span
                        ><a href="#">support@radixsols.com</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="footer-bottom-area style2">
          <div class="container">
            <div class="row">
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
                          href="https://www.flickr.com/photos/intellectsoft/"
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
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "101642401313880");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Vendor JS Files -->
    <script src="{{asset('public/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="{{asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="{{asset('public/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('public/assets/js/main.js')}}"></script>
    <script>
      $(".area__title").click(function(){
          $(".area--active").removeClass("area--active");
          $(this).parent().parent().addClass("area--active");
      });
    </script>
    <script>
      $(function() {
          $("body").on("click", "#prev", function() {
             var _prev = $(".pt-page.current").prev();
             _prev = _prev.length == 0 ? $(".pt-page:last") : _prev;
                 $(".pt-page.current").fadeOut(function() {
                     $(this).removeClass("current");
                    _prev.fadeIn(function() {
                $(this).addClass("current");
                      });
                 });
          });
          
          $("body").on("click", "#next", function() {
             var _next = $(".pt-page.current").next();
            _next = _next.length == 0 ? $(".pt-page:first") : _next;
                 $(".pt-page.current").fadeOut(function() {
                      $(this).removeClass("current");
                    _next.fadeIn(function() {
                $(this).addClass("current");
                      });
                 });
          });
      });
    </script>
    <script>
      AOS.init({
        easing: "ease-out-back",
        duration: 1000,
      });
    </script>
  </body>
</html>
