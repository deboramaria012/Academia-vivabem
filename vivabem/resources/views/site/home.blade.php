
@extends('layout.layout');

@section('title','home')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">


        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <title> @yield('title') Academia VivaBem</title>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
        <meta name="turbo-visit-control" content="reload">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700;800&family=Kumbh+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/jquery.flipster.min.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/slick.min.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/magnific-popup.min.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/fontawesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">

    </head>

<body>

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

<!--==============================
Hero Area
==============================-->
<div class="hero-wrapper hero-2" id="hero">
    <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">
        <div class="hero-slider" data-bg-src="{{ asset ('assets/img/hero/banner1.png') }}">
            <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-100px" data-left="0">
                <img src="{{ asset('assets/img/hero/') }}" alt="img">
            </div>
            <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                <img src="{{ asset ('assets') }}" alt="img">
            </div>
            <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                <img src="{{ asset('assets/img/') }}" alt="img">
            </div>
            <div class="container">
                <div class="row justify-content-lg-end justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-9">
                        <div class="hero-style2">
                            <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Grow Your</span>
                            <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Strength</h1>
                            <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">WITH Fitmas</span>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                <a href="{{ url('/contato') }}" class="btn style-r0 style2">Marque uma consulta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="hero-slider" data-bg-src="{{ asset ('assets/img/hero/banner2.png')}}">
            <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                <img src="{{ asset('assets/img/hero') }}" alt="img">
            </div>
            <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                <img src="{{ asset('assets/img/hero') }}" alt="img">
            </div>
            <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                <img src="{{ asset('assets/img/hero') }}" alt="img">
            </div>
            <div class="container">
                <div class="row justify-content-lg-end justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-9">
                        <div class="hero-style2">
                            <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Grow Your</span>
                            <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Strength</h1>
                            <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">WITH Fitmas</span>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                <a href="{{ url('/contato') }}" class="btn style-r0 style2">Make Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-arrow">
        <button data-slick-prev="#heroSlider2" class="slick-arrow slick-prev">PREV</button>
        <button data-slick-next="#heroSlider2" class="slick-arrow slick-next">NEXT</button>
    </div>
</div>
<!--======== / Hero Section ========-->

<!--==============================
Service Area
==============================-->
<div class="service-bg2-area" data-bg-src="{{asset('assets/img/bg/service-bg2.png') }}">
    <div class="sec-shape-top">
    <img src="assets/img/bg/sec-shape-top.png" alt="img">
    </div>
    <!--==============================
    BMI Area
    ==============================-->
    <div class="bmi-area-1 space">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="title-area mb-30">
                        <span class="sub-title">TESTE SEU IMC</span>
                        <h2 class="sec-title text-white fw-semibold">INDICE DE MASSA CORPORAL</h2>
                        <p class="sec-text">O IMC é uma ferramenta amplamente utilizada para avaliar o peso corporal em relação à altura. Pode fornecer uma indicação geral se um indivíduo está dentro de uma faixa de peso saudável.</p>
                    </div>
                    <div class="bmi-table mb-lg-0 mb-40">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">IMC</th>
                                    <th scope="col">ESTADO DE PESO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Abaixo do peso 18.5</th>
                                    <td>Status de peso</td>
                                </tr>
                                <tr>
                                    <th scope="row">18.5 - 24.9</th>
                                    <td>Saudável</td>
                                </tr>
                                <tr>
                                    <th scope="row">25.0 - 29.9</th>
                                    <td>Sobrepeso</td>
                                </tr>
                                <tr>
                                    <th scope="row">30.0 - Acima do peso</th>
                                    <td>Obesa</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end">
                    <div class="bmi-calculator-form">
                        <h4 class="form-title">RESERVE SEU LUGAR:</h4>
                        <form class="bmi-form" id="form" name="bmiCalc">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input for="weight" class="form-control style-border" placeholder="Peso/KG" type="text" name="weight">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input for="height" class="form-control style-border" placeholder="Altura(cm" type="text" name="height">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control style-border" name=" idade" id="age" placeholder="Age">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="sex" id="sex" placeholder="Sex">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input for="bmi_result" class="form-control style-border" placeholder="Seu IMC" type="text" name="bmi">
                            </div>
                            <div class="form-group">
                                <input for="bmi_message" placeholder="This Means" class="form-control style-border" type="text" name="meaning">
                            </div>
                            <div class="btn style3">
                                <input type="button" value="Calculate BMI" onClick="calculateBMI()">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Service Area 01
    ==============================-->
    <div class="service-area-1 space-bottom overflow-hidden">
        <div class="container">
            <div class="title-area">
                <span class="sub-title">Nossos recursos</span>
                <h2 class="sec-title text-white fw-semibold">SERVIÇOS QUE OFERECEMOS</h2>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row global-carousel service-slider style2" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src="{{ asset('assets/img/icon/service-icon_1-1.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Tons of Equipment</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src=" {{ asset('assets/img/icon/service-icon_1-2.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Rows of Cardio</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src="{{ asset('assets/img/icon/service-icon_1-3.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Heart Pumping</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src="{{ asset('assets/img/icon/service-icon_1-4.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Strength Training</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src="{{ asset('assets/img/icon/service-icon_1-1.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Tons of Equipment</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src="{{ asset('assets/img/icon/service-icon_1-2.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Rows of Cardio</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src="{{asset('assets/img/icon/service-icon_1-3.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Heart Pumping</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card_icon">
                            <img src="{{asset('assets/img/icon/service-icon_1-4.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Strength Training</a></h4>
                            <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                            <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="sec-shape2-bottom">
        <img src="{{ asset('assets/img/bg/sec-shape2-top.png') }}" alt="img">
    </div>
</div>

<!--==============================
schedule Area
==============================-->
<div class="schedule-area-1 space">
    <div class="container container2">
        <div class="title-area text-center">
            <span class="sub-title">Nossas aulas</span>
            <h2 class="sec-title fw-semibold">NOSSO CRONOGRAMA DE TREINAMENTO</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="schedule-tab-1">
                    <div class="filter-menu-active mb-50 text-center">
                        <button data-filter=".cat1" class="active btn style4 style-r0" type="button">ALL EVENTS</button>
                        <button class="btn style4 style-r0" data-filter=".cat2" type="button">CARDIO</button>
                        <button class="btn style4 style-r0" data-filter=".cat3" type="button">OPEN GYM</button>
                        <button class="btn style4 style-r0" data-filter=".cat4" type="button">TOTAL BODY</button>
                        <button class="btn style4 style-r0" data-filter=".cat5" type="button">CROSSFIT</button>
                    </div>
                    <div class="filter-active-cat1">
                        <div class="filter-item cat1">
                            <div class="table-responsive">
                                <table class="schedule-table table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">MONDAY</th>
                                            <th scope="col">TUESDAY</th>
                                            <th scope="col">WEDNESDAY</th>
                                            <th scope="col">THURSDAY</th>
                                            <th scope="col">FRIDAY</th>
                                            <th scope="col">SATURDAY</th>
                                            <th scope="col">SUNDAY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">06:00 - 07:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>CrossFit Pro</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Cardio Box</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">07:00 - 08:00</th>
                                            <td></td>
                                            <td class="active">
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Pro Intense
                                                    Workout</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">08:00 - 09:00</th>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2"></td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2">
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">09:00 - 10:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">10:00 - 11:00</th>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="filter-item cat2">
                            <div class="table-responsive">
                                <table class="schedule-table table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">MONDAY</th>
                                            <th scope="col">TUESDAY</th>
                                            <th scope="col">WEDNESDAY</th>
                                            <th scope="col">THURSDAY</th>
                                            <th scope="col">FRIDAY</th>
                                            <th scope="col">SATURDAY</th>
                                            <th scope="col">SUNDAY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">06:00 - 07:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>CrossFit Pro</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Cardio Box</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">07:00 - 08:00</th>
                                            <td></td>
                                            <td class="active">
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Pro Intense <br>
                                                    Workout</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">08:00 - 09:00</th>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2"></td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2">
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">09:00 - 10:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">10:00 - 11:00</th>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="filter-item cat3">
                            <div class="table-responsive">
                                <table class="schedule-table table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">MONDAY</th>
                                            <th scope="col">TUESDAY</th>
                                            <th scope="col">WEDNESDAY</th>
                                            <th scope="col">THURSDAY</th>
                                            <th scope="col">FRIDAY</th>
                                            <th scope="col">SATURDAY</th>
                                            <th scope="col">SUNDAY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">06:00 - 07:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>CrossFit Pro</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Cardio Box</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">07:00 - 08:00</th>
                                            <td></td>
                                            <td class="active">
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Pro Intense
                                                    Workout</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">08:00 - 09:00</th>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2"></td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2">
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">09:00 - 10:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">10:00 - 11:00</th>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="filter-item cat4">
                            <div class="table-responsive">
                                <table class="schedule-table table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">MONDAY</th>
                                            <th scope="col">TUESDAY</th>
                                            <th scope="col">WEDNESDAY</th>
                                            <th scope="col">THURSDAY</th>
                                            <th scope="col">FRIDAY</th>
                                            <th scope="col">SATURDAY</th>
                                            <th scope="col">SUNDAY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">06:00 - 07:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>CrossFit Pro</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Cardio Box</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">07:00 - 08:00</th>
                                            <td></td>
                                            <td class="active">
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Pro Intense
                                                    Workout</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">08:00 - 09:00</th>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2"></td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2">
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">09:00 - 10:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">10:00 - 11:00</th>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="filter-item cat5">
                            <div class="table-responsive">
                                <table class="schedule-table table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">MONDAY</th>
                                            <th scope="col">TUESDAY</th>
                                            <th scope="col">WEDNESDAY</th>
                                            <th scope="col">THURSDAY</th>
                                            <th scope="col">FRIDAY</th>
                                            <th scope="col">SATURDAY</th>
                                            <th scope="col">SUNDAY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">06:00 - 07:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>CrossFit Pro</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Cardio Box</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">07:00 - 08:00</th>
                                            <td></td>
                                            <td class="active">
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td rowspan="2">
                                                <span>Pro Intense
                                                    Workout</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">08:00 - 09:00</th>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2"></td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td rowspan="2">
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">09:00 - 10:00</th>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Boxing Gym</span>
                                                Daniel
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">10:00 - 11:00</th>
                                            <td>
                                                <span>Body Build</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Pump Work</span>
                                                Daniel
                                            </td>
                                            <td>
                                                <span>Fitness Class</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Open Gym</span>
                                                Daniel
                                            </td>
                                            <td></td>
                                            <td>
                                                <span>Yoga Class</span>
                                                Daniel
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Video Area
==============================-->
<div class="video-area-1">
    <div class="container">
        <div class="video-wrap">
            <a data-bg-src="{{ asset('assets/img/normal/video-bg1.png') }}" {{ asset('') }}href="https://www.youtube.com/watch?v=P7fi4hP_y80" class="play-btn popup-video">
                <i class="fa-sharp fa-solid fa-play"></i>
            </a>
        </div>
    </div>
</div>

<!--==============================
Portfolio Area
==============================-->
<div class="portfolio-area-1" data-bg-src="{{ asset ('assets/img/bg/portfolio-bg-1.png')}}">

    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Nosso portfólio</span>
            <h2 class="sec-title text-white fw-semibold">NOSSO PORTFÓLIO DE TRABALHO</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="flip-gallery-area">
            <div class="flip-gallery">
                <ul class="flip-items">
                    <li>
                        <div class="gallery-card gallery-flip">
                            <div class="gallery-img">
                                <img src="{{ asset ('assets/img/portfolio/portfolio.png') }}" alt="gallery image">
                            </div>
                            <div class="gallery-content">
                                <div class="media-left">
                                    <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                    <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                                </div>
                                <a href="{{ asset ('assets/img/project/project1_1.png') }}" class="icon-btn popup-image">
                                    <i class="far fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="gallery-card gallery-flip">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/portfolio/portfolio2.png') }}" alt="gallery image">
                            </div>
                            <div class="gallery-content">
                                <div class="media-left">
                                    <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                    <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                                </div>
                                <a href="{{ asset('assets/img/project/project1_2.png') }}" class="icon-btn popup-image">
                                    <i class="far fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="gallery-card gallery-flip">
                            <div class="gallery-img">
                                <img src="{{ asset('assets/img/portfolio/portfolio3.png') }}" alt="gallery image">
                            </div>
                            <div class="gallery-content">
                                <div class="media-left">
                                    <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                    <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                                </div>
                                <a href="{{ asset('assets/img/project/project1_3.png') }}" class="icon-btn popup-image">
                                    <i class="far fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--==============================
wcu area
==============================-->
<div class="wcu-area-2 space">
    <div class="container container2">
        <div class="row justify-content-between">
            <div class="col-xl-6 align-self-center order-xl-2">
                <div class="wcu-thumb-wrap ms-xl-5 mb-xl-0 mb-40">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="wcu-thumb2">
                                <img src="{{ asset('assets/img/treino.png') }}" alt="img">
                            </div>
                            <div class="wcu-grid2 mt-4" data-bg-src="{{ asset('assets/img/bg/wcu_box-bg.png') }}">
                                <div class="details">
                                    <span class="wcu-grid_text"> <span class="counter-number">15000</span>+ Bem-sucedido
                                    Alunos felizes</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="wcu-grid2 mb-4 mt-sm-0 mt-4 bg-theme">
                                <div class="details">
                                    <span class="wcu-grid_text"> <span class="counter-number">25</span>+ Anos de trabalho Experiência</span>
                                </div>
                            </div>
                            <div class="wcu-thumb2">
                                <img src="{{ asset('assets/img/treino3png.png') }} " alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 order-xl-1">
                <div class="title-area">
                    <span class="sub-title">PORQUE ESCOLHER-NOS</span>
                    <h2 class="sec-title fw-semibold"> NÓS FORNECEMOS NOSSOS <br> SUPORTE DE ADEQUAÇÃO 100% CONFIÁVEL</h2>
                    <p class="sec-text">Defina seus objetivos específicos de musculação. Determine o que você deseja alcançar em termos de tamanho muscular, força e físico geral. Estabeleça metas realistas e mensuráveis ​​que orientarão seu plano de treinamento e nutrição. </p>
                    <div class="about-grid-wrap mt-40">
                        <div class="about-grid style2">
                            <div class="about-grid_icon">
                                <img src="{{ asset('assets/img/icon/wcu-icon_2-1.svg') }}" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Expert Trainer</h4>
                                <p class="about-grid_text">30 days regular shipping</p>
                            </div>
                        </div>
                        <div class="about-grid style2">
                            <div class="about-grid_icon">
                                <img src="{{ asset('assets/img/icon/wcu-icon_2-2.svg') }}" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Modern Equipment</h4>
                                <p class="about-grid_text">24 hour fast shipping</p>
                            </div>
                        </div>
                    </div>
                    <p class="sec-text">Implemente princípios de sobrecarga progressiva em seu treinamento. Aumente gradualmente o peso, as repetições ou a intensidade dos seus exercícios ao longo do tempo...</p>
                </div>
                <div class="btn-wrap mt-40">
                    <a href="about.html" class="btn style-r0">Make Appointment</a>
                    <div class="about-info-wrap style2">
                        <div class="icon"><i class="fas fa-phone"></i></div>
                        <div class="details">
                            <p class="about-info-title">Call Us 24/7</p>
                            <a class="about-info-link" href="tel:+25825692582">+236-3256.21456</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
    wcu area 02 end
==============================-->

<div class="bg-img-sec" data-bg-src="{{ asset('assets/img/bg/team-bg-2.png') }}">
    <!--==============================
    team area 02
    ==============================-->
    <div class="team-area-2 space overflow-hidden">
        <div class="container container2">
            <div class="title-area text-center text-sm-start">
                <span class="sub-title">Nossos membros</span>
                <h2 class="sec-title text-white fw-semibold"> CONHEÇA SEU TREINADOR</h2>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row global-carousel team-slider-2" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
                <div class="col-lg-4 col-md-6">
                    <div class="team-card2">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/img/team/team-2-1.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <span class="team-card_subtitle">TREINADOR DE IOGA</span>
                            <h4 class="team-card_title h5"><a href="team-details.html">George Edward</a></h4>
                            <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-card2">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/img/team/team-2-2.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <span class="team-card_subtitle">TREINADOR DE IOGA</span>
                            <h4 class="team-card_title h5"><a href="team-details.html">William Henry</a></h4>
                            <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-card2">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/img/team/team-2-3.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <span class="team-card_subtitle">TREINADOR DE IOGA</span>
                            <h4 class="team-card_title h5"><a href="team-details.html">Harper Victoria</a></h4>
                            <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-card2">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/img/team/team-2-4.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <span class="team-card_subtitle">TREINADOR DE IOGA</span>
                            <h4 class="team-card_title h5"><a href="team-details.html">Matthew Thomas</a></h4>
                            <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-card2">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/img/team/team-2-1.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <span class="team-card_subtitle">TREINADOR DE IOGA</span>
                            <h4 class="team-card_title h5"><a href="team-details.html">George Edward</a></h4>
                            <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-card2">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/img/team/team-2-2.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <span class="team-card_subtitle">TREINADOR DE IOGA</span>
                            <h4 class="team-card_title h5"><a href="team-details.html">William Henry</a></h4>
                            <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-card2">
                        <div class="team-card_img">
                            <img src="{{ asset ('assets/img/team/team-2-3.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <span class="team-card_subtitle">TREINADOR DE IOGA</span>
                            <h4 class="team-card_title h5"><a href="team-details.html">Harper Victoria</a></h4>
                            <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-card2">
                        <div class="team-card_img">
                            <img src="{{asset ('assets/img/team/team-2-4.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <span class="team-card_subtitle">TREINADOR DE IOGA</span>
                            <h4 class="team-card_title h5"><a href="team-details.html">Matthew Thomas</a></h4>
                            <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--==============================
    Counter Area
    ==============================-->
    <div class="counter-area-2 overflow-hidden">
        <div class="container container2">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-xl-auto counter-card_wrap">
                    <div class="counter-card style2">
                        <div class="counter-card_icon">
                            <img src="{{ asset('assets/img/icon/counter-icon_2-1.svg') }}" alt="icon">
                        </div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">3658</span>+</h2>
                            <p class="counter-card_text">Clientes satisfeitos</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-auto counter-card_wrap">
                    <div class="counter-card style2">
                        <div class="counter-card_icon">
                            <img src="{{ asset('assets/img/icon/counter-icon_2-2.svg') }}" alt="icon">
                        </div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">658</span>+</h2>
                            <p class="counter-card_text">Membros Especialistas</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-auto counter-card_wrap">
                    <div class="counter-card style2">
                        <div class="counter-card_icon">
                            <img src="{{asset('assets/img/icon/counter-icon_2-3.svg')}} " alt="icon">
                        </div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">368</span>+</h2>
                            <p class="counter-card_text">Equipamento moderno</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-auto counter-card_wrap">
                    <div class="counter-card style2">
                        <div class="counter-card_icon">
                            <img src="{{ asset('assets/img/icon/counter-icon_2-4.svg') }}" alt="icon">
                        </div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">153</span>+</h2>
                            <p class="counter-card_text"> Tons Of Harvest</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ad-slider">
        <div class="global-carousel" data-autoplay-speed="1" data-speed="10000">
            <h2 class="ad-slider_title">Fitmas <span>FITNESS</span> CENTER </h2>
            <h2 class="ad-slider_title">Fitmas <span>FITNESS</span> CENTER </h2>
        </div>
    </div>
</div>

<!--==============================
Goal Area
==============================-->
<section class="goal-area space">
    <div class="container container2">
        <div class="row">
            <div class="col-lg-6 order-lg-2">
                <div class="goal-thumb-2 mb-40 mb-lg-0">
                    <div class="img-1">
                        <img src="{{ asset('assets/img/treino.png') }}" alt="img">
                    </div>
                    <div class="img-2 jump">
                        <img src="{{ asset('assets/img/academia.png') }}" alt="img">
                    </div>
                    <div class="wcu-grid movingX">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/wcu-icon_1-1.svg') }}" alt="img">
                        </div>
                        <div class="details">
                            <h3 class="wcu-grid_year"><span class="counter-number">25</span>+</h3>
                            <span class="wcu-grid_text">Years Experience</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="title-area">
                    <span class="sub-title">Fitmas Goal
                    </span>
                    <h2 class="sec-title fw-semibold">UNLOCK YOUR FULL POTENTIAL, ACHIEVE YOUR FITNESS GOALS.</h2>
                </div>
                <div class="goal-grid-wrap">
                    <div class="about-grid style3">
                        <div class="about-grid_icon">
                            <img src="{{ asset('assets/img/icon/goal-icon_1-1.svg') }}" alt="img">
                        </div>
                        <div class="about-grid_content">
                            <h4 class="about-grid_title">Free Fitness Training</h4>
                            <p class="about-grid_text">Pedal your way to fitness in our specialized indoor cycling studio. Equipped with stationary bikes...</p>
                        </div>
                    </div>
                    <div class="about-grid style3">
                        <div class="about-grid_icon">
                            <img src="{{ asset('assets/img/icon/goal-icon_1-2.svg') }}" alt="img">
                        </div>
                        <div class="about-grid_content">
                            <h4 class="about-grid_title">Cardio and Strength</h4>
                            <p class="about-grid_text">Pedal your way to fitness in our specialized indoor cycling studio. Equipped with stationary bikes...</p>
                        </div>
                    </div>
                    <div class="btn-wrap">
                        <a class="btn style-r0" href="service-details.html">Learn More</a>
                        <a class="btn btn-border style-r0" href="service-details.html">View All Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Cta Area
==============================-->
<section class="cta-area space" data-bg-src="{{ asset('assets/img/fundo.png') }}">
    <div class="container">
        <div class="row justify-content-lg-end justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="cta-wrap text-center text-lg-start">
                    <div class="title-area">
                        <span class="sub-title">MARQUE UMA CONSULTA</span>
                        <h2 class="sec-title text-white fw-semibold">OBTENHA UMA CONSULTORIA GRATUITA AGORA AQUI!</h2>
                    </div>
                    <div class="btn-wrap mt-40">
                        <a href="about.html" class="btn style2 style-r0">Marque uma consulta</a>
                        <div class="about-info-wrap style3">
                            <div class="icon"><i class="fas fa-phone-volume"></i></div>
                            <div class="details">
                                <p class="about-info-title text-white">Preciso de ajuda?</p>
                                <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="service-area-2 space overflow-hidden">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Our Services</span>
            <h2 class="sec-title">Service We Provide</h2>
        </div>
    </div>
    <div class="container">
        <div class="row global-carousel service-slider-2 slider-shadow" data-slide-show="3" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-1.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Gym Fitness Class</a></h4>
                        <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                            short recovery periods...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-2.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Power Lifting</a></h4>
                        <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                            short recovery periods...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-3.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Body Building</a></h4>
                        <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                            short recovery periods...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-1.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Boxing Class</a></h4>
                        <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                            short recovery periods...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-2.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Power Lifting</a></h4>
                        <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                            short recovery periods...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-3.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Yoga Fitness Class</a></h4>
                        <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                            short recovery periods...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
                        <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="assets/img/icon/picing-icon_1-1.svg" alt="img">
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
                        <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="assets/img/icon/picing-icon_1-2.svg" alt="img">
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
                        <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="assets/img/icon/picing-icon_1-3.svg" alt="img">
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
<!--==============================
    Footer Area
==============================-->
<footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('assets/img/bg/footer-1-bg.png') }}">
    <div class="container">
        <div class="widget-area">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="widget-about">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset('assets/img/logoVivaBem.svg') }}" alt="VivaBem"></a>
                            </div>
                            <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma instalação dedicada à preparação física e academias de ginástica e normalmente oferece uma variedade</p>
                            <div class="social-btn">
                                <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/" tabindex="0"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Links Rápidos</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="about.html">Home</a></li>
                                <li><a href="service-details.html">Sobre</a></li>
                                <li><a href="team.html">Modalidades</a></li>
                                <li><a href="project.html">Treino</a></li>
                                <li><a href="project.html">Noticias</a></li>
                                <li><a href="contact.html">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Galeria</h3>
                        <div class="sidebar-gallery">
                            <div class="gallery-thumb">
                                <img src="{{ asset('assets/img/instagram/feed1.png') }}" alt="Gallery Image">
                                <a href="{{ asset('assets/img/widget/insta-feed1.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{ asset ('assets/img/instagram/feed2.png') }}" alt="Gallery Image">
                                <a href="{{ asset('assets/img/widget/insta-feed2.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{asset ('assets/img/instagram/feed3.png') }}" alt="Gallery Image">
                                <a href="{{ asset('assets/img/widget/insta-feed3.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{ asset('assets/img/instagram/feed4.png')  }}" alt="Gallery Image">
                                <a href="{{ asset ('assets/img/widget/insta-feed4.png')}}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{ asset ('assets/img/instagram/feed5.png') }}" alt="Gallery Image">
                                <a href="{{ asset('assets/img/widget/insta-feed5.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{ asset('assets/img/instagram/feed6.png') }}" alt="Gallery Image">
                                <a href="{{ asset('assets/img/widget/insta-feed6.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Receba boletim informativo</h3>
                        <p class="footer-text">Ganhe 10% de desconto no seu primeiro pedido! Se apresse</p>
                        <form class="newsletter-form">
                            <div class="form-group">
                                <i class="far fa-envelope"></i>
                                <input class="form-control" type="email" placeholder="Email Address" required="">
                            </div>
                            <button type="submit" class="btn style-r0 style2">Se inscrever</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="preloader ">
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href="index.html"><img src="{{ asset('assets/img/logoVivaBem.svg') }}" alt="VivaBem"></a>
                    </div>
                    <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma instalação dedicada à preparação física e academias de ginástica e normalmente oferece uma variedade</p>
                    <div class="social-btn">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Quick Links</h3>
                <ul class="menu">
                    <li><a href="about.html">Sobre</a></li>
                    <li><a href="project-details.html">Our Mission</a></li>
                    <li><a href="team.html">Meet The Teams</a></li>
                    <li><a href="project.html">Our Projects</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto align-self-center"><p class="copyright-text text-center">© 2023 <a href="#">Fitmas.</a> All Rights Reserved.</p></div>
            </div>
        </div>
    </div>
</footer>


<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
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
</body>

</html>

@section('conteudo')

@endsection






