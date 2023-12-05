@extends('layout.layout');

@section('title','home')



      <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/jquery.flipster.min.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/slick.min.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/magnific-popup.min.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/fontawesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/nice-select.min.css') }}">


      <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area text-center">
            <button class="menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="{{ asset('assets/img/logoVivaBem.svg') }}" alt="logo vivabem"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                        </ul>
                    </li>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Project</a>
                        <ul class="sub-menu">
                            <li><a href="project.html">Projects</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Service</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-2.html">Blog 02</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/contato') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Header Area
    ==============================-->
    <header class="nav-header header-layout2">
        <div class="header-top d-lg-block d-none">
            <div class="container-fluid">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-envelope"></i><a href="mailto:info@gmail.com">support@gmail.com</a></li>
                                <li><i class="far fa-clock"></i>Mon - Sat: 8.00 am-7.00 pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <div class="social-links">
                                        <span class="me-3">Visite nossas páginas sociais</span>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-start justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                             <a href="index.html"><img src= "{{ asset ('assets/img/logovivabem.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-auto m-lg-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>

                                    <li class="menu-item-has-children">
                                        <a href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ url('/') }}">Home</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url ('/sobre') }}">Sobre</a>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Service</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>

                                   <li class="menu-item-has-children">
                                    <a href="{{ url('/modalidade') }}">Modalidade</a>
                                    <ul class="sub-menu">
                                  <li><a href="{{ url('/modalidade/musculacao') }}">Musculação</a></li>

                                  <li><a href="{{ url('/modalidade/aerobica') }}">Aeróbica</a></li>

                                  <li><a href="{{ url('/modalidade/pilates') }}">Pilates</a></li>

                                  <li><a href="{{ url('/modalidade/yoga') }}">Yoga</a></li>

                                  <li><a href="{{ url('/modalidade/treinamentofuncional') }}">treinamento funcional</a></li>

                                </ul>
                              </li>

                                    <li class="menu-item-has-children">
                                        <a href="{{ url('/treino')}}">Treino</a>
                                        <ul class="sub-menu">
                                         <li><a href="{{ url('/treino') }}">Treino</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="{{ url('/noticias') }}">Noticias</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/noticias') }}">Noticias</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('/contato') }}">Contato</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-xxl-block d-none">
                            <div class="navbar-right-desc">
                                <i class="fas fa-phone-volume"></i><a href="tel:+2590256215">+259 (0) 256 215</a>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <a href="contact.html" class="btn style2 style-r0 d-xl-block d-none">
                                    Get a Quote
                                </a>
                                <button type="button" class="btn style-r0 btn-border3 sideMenuToggler">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcrumb-bg.png') }}">
    <!-- bg animated image/ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Service Details</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li class="active">SERVICE DETAILS</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!--==============================
Service Area 02
==============================-->
<div class="service-details-area space-top space-extra-bottom overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                <div class="service-page-single">
                    <div class="page-img mb-50">
                        <img src="{{ asset('assets/img/normal/service-details1-1.png') }}" alt="img">
                    </div>
                    <div class="page-content">
                        <h2 class="page-title">Champion Boxer Training</h2>
                        <p class="mb-30">Boxers engage in intense cardiovascular exercises to build endurance and stamina. This includes activities like running, skipping rope, and high-intensity interval training (HIIT) to improve overall cardiovascular fitness. Strength and Power Training: Boxers focus on building functional strength and explosive power to deliver powerful punches. This involves weightlifting exercises, plyometrics, and bodyweight exercises such as push-ups, pull-ups, squats, and core exercises.</p>
                        <p class="mb-50">During the CrossFit Boxing Challenge, you'll engage in a dynamic workout regimen that incorporates elements of strength training, cardiovascular conditioning, agility, and coordination. Under the guidance of experienced coaches, you'll learn proper boxing techniques, footwork, and defensive maneuvers, all while pushing yourself through a series of intense CrossFit workouts. Each session will challenge your physical and mental resilience, building not only strength but also enhancing your endurance and mental toughness.</p>
                        <h3 class="page-subtitle mb-0">Why Choose Us?</h3>
                        <p>There are several reasons why you should choose us:</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="service-wrap">
                                    <h6><i class="far fa-check me-2"></i> Diverse Range of Services:</h6>
                                    <p>We offer a wide range of fitness services and programs to cater to different fitness levels, interests, and goals. </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="service-wrap">
                                    <h6><i class="far fa-check me-2"></i> Expertise and Experience:</h6>
                                    <p>We have a team of highly qualified and experienced fitness professionals who are dedicated to helping you...</p>
                                </div>
                            </div>
                        </div>
                        <p class="mt-25 mb-50">We offer a wide range of fitness services and programs to cater to different fitness levels, interests, and goals. Whether you're looking for personal training, group fitness classes, specialized workouts, or nutritional guidance, we have options to suit your needs.</p>
                        <h3 class="page-subtitle mb-0">Why Choose Us?</h3>
                        <div class="service-page-list checklist mb-50" data-bg-src="{{ asset('assets/img/normal/service-details1-2.png') }}">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Design workout program.</li>
                                <li><i class="far fa-check-circle"></i>Progressive overload.</li>
                                <li><i class="far fa-check-circle"></i>Focus on proper form.</li>
                                <li><i class="far fa-check-circle"></i>Be consistent with training.</li>
                                <li><i class="far fa-check-circle"></i>Adjust calorie intake as needed.</li>
                            </ul>
                        </div>
                        <div class="accordion-area mb-30 accordion" id="faqAccordion">

                            <div class="accordion-card style2 active">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"> What are your gym's operating hours?</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Progressively communicate flexible human capital with best-of-breed schemas. Completely develop 2.0 infrastructures via bleeding-edge opportunities. Completely initiate world-class leadership skills via fully tested applications. </p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"> What amenities and facilities does your gym offer?</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Progressively communicate flexible human capital with best-of-breed schemas. Completely develop 2.0 infrastructures via bleeding-edge opportunities. Completely initiate world-class leadership skills via fully tested applications. </p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"> Do you provide personal training services?</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Progressively communicate flexible human capital with best-of-breed schemas. Completely develop 2.0 infrastructures via bleeding-edge opportunities. Completely initiate world-class leadership skills via fully tested applications. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area">
                    <div class="widget widget_categories">
                        <h3 class="widget_title">All Services</h3>
                        <ul>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Gym Fitness Class</a>
                            </li>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Power Lifting Class</a>
                            </li>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Body Building</a>
                            </li>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Boxing Class</a>
                            </li>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Meditation Class</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_schedule">
                        <h3 class="widget_title">Working Hours</h3>
                        <ul>
                            <li>
                                <i class="far fa-clock"></i>
                                Monday – Friday 1.00 – 2:00 pm
                            </li>
                            <li>
                                <i class="far fa-clock"></i>
                                Saturday 8.00 – 12:00 pm
                            </li>
                            <li class="unavailable">
                                <i class="far fa-clock"></i>
                                Sunday closed
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

<!--==============================
Cta Area
==============================-->
<section class="cta-area space" data-bg-src="{{ asset('assets/img/bg/cta-bg1.png') }}">
    <div class="container">
        <div class="row justify-content-lg-end justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="cta-wrap text-center text-lg-start">
                    <div class="title-area">
                        <span class="sub-title">Make An Appointment</span>
                        <h2 class="sec-title text-white">Get a Free Consultancy
                            Right Now Here!</h2>
                    </div>
                    <div class="btn-wrap mt-40">
                        <a href="about.html" class="btn style2">Make Appointment</a>
                        <div class="about-info-wrap style3">
                            <div class="icon"><i class="fas fa-phone-volume"></i></div>
                            <div class="details">
                                <p class="about-info-title text-white">Need Help?</p>
                                <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Pricing plan Area
==============================-->
<div class="pricing-area space">
    <div class="container">
        <div class="title-area text-center">
            <h3 class="sub-title">Pricing Plan</h3>
            <h2 class="sec-title">Our Pricing Plan</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_bg">
                        <img src="{{ asset('assets/img/bg/pricing-card1-bg.png') }}" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="{{ asset('assets/img/icon/picing-icon_1-1.svg') }}" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Basic Membership</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>19<span class="duration">/month</span>
                    </h4>
                    <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 trainings</li>
                            <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                            <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                            <li><i class="far fa-check-circle"></i>Free parking</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Choose This Plan</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card pricing-card_active">
                    <div class="pricing-card_bg">
                        <img src="{{ asset('assets/img/bg/pricing-card1-bg.png') }}" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="{{ asset('assets/img/icon/picing-icon_1-2.svg') }}" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Standard Membeship</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>39<span class="duration">/month</span>
                    </h4>
                    <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 trainings</li>
                            <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                            <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                            <li><i class="far fa-check-circle"></i>Free parking</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Choose This Plan</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_bg">
                        <img src="{{ asset('assets/img/bg/pricing-card1-bg.png') }}" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="{{ asset('assets/img/icon/picing-icon_1-3.svg') }}" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Ultimate Membership</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>69<span class="duration">/month</span>
                    </h4>
                    <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 trainings</li>
                            <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                            <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                            <li><i class="far fa-check-circle"></i>Free parking</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Choose This Plan</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset ('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>

<script src="{{ asset ('assets/js/slick.min.js') }}"></script>

<script src="{{ asset ('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{ asset ('assets/js/jquery.counterup.min.js')}}"></script>

<script src="{{ asset ('assets/js/jquery-ui.min.js')}}"></script>

<script src="{{asset  ('assets/js/jquery.flipster.min.js')}}"></script>

<script src="{{ asset ('assets/js/imagesloaded.pkgd.min.js') }}"></script>

<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

<script src="{{ asset ('assets/js/bmi.calculator.js')}}"></script>

<script src=" {{ asset ('assets/js/main.js') }}"></script>

@section('conteudo')

@endsection

