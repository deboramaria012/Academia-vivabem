@extends('layout.layout');

@section('title','sobre')


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




<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
    <!-- bg animated image/ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Sobre Nós</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li class="active">Sobre Nós</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!--==============================
About Area
==============================-->
<div class="space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-2 text-lg-end">
                <div class="about-thumb mb-5 mb-lg-0">
                    <img class="about-img-1" src="{{ asset('assets/img/imagem sobre 1.png') }}" alt="img">
                    <img class="about-img-2 jump" src="{{ asset('assets/img/imagem sobre.png') }}" alt="img">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="about-content-wrap">
                    <div class="title-area mb-0">
                        <span class="sub-title">MAIS SOBRE NÓS</span>
                        <h2 class="sec-title">Desbloqueie todo o seu potencial, alcance seus objetivos.</h2>
                        <p class="sec-text">Bem-vindo a academia vivabem. seu destino final para alcançar seus objetivos de condicionamento físico. Compreendemos a importância de levar um estilo de vida saudável e oferecemos instalações de fitness de alto nível para apoiá-lo em sua jornada de fitness.

                        </p>
                        <div class="about-tab-1">
                            <div class="filter-menu-active">
                                <button data-filter=".cat1" class="active" type="button">Nossa missão</button>
                                <button data-filter=".cat2" type="button">Nossa visão</button>
                                <button data-filter=".cat3" type="button">Nosso objetivo</button>
                            </div>
                            <div class="filter-active-cat1">
                                <div class="filter-item cat1">
                                    <div class="about-tab-icon">
                                        <img src="assets/img/icon/about-icon.svg" alt="img">
                                    </div>
                                    <p class="about-tab-text">Os ginásios desempenham um papel vital na promoção de um estilo de vida ativo e saudável. Eles fornecem um ambiente de apoio e motivação para os indivíduos praticarem atividades físicas regulares.
                                    </p>
                                </div>
                                <div class="filter-item cat2">
                                    <div class="about-tab-icon">
                                        <img src="assets/img/icon/about-icon.svg" alt="img">
                                    </div>
                                    <p class="about-tab-text">Os ginásios desempenham um papel vital na promoção de um estilo de vida ativo e saudável. Eles fornecem um ambiente de apoio e motivação para os indivíduos praticarem atividades físicas regulares.
                                    </p>
                                </div>
                                <div class="filter-item cat3">
                                    <div class="about-tab-icon">
                                        <img src="assets/img/icon/about-icon.svg" alt="img">
                                    </div>
                                    <p class="about-tab-text">Os ginásios desempenham um papel vital na promoção de um estilo de vida ativo e saudável. Eles fornecem um ambiente de apoio e motivação para os indivíduos praticarem atividades físicas regulares.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrap mt-40">
                        <a href="about.html" class="btn">Marque uma consulta</a>
                        <div class="about-info-wrap">
                            <div class="icon"><i class="fas fa-phone-volume"></i></div>
                            <div class="details">
                                <p class="about-info-title">Preciso de ajuda?</p>
                                <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Service Area 02
==============================-->
<div class="service-area-2 space-bottom overflow-hidden">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Nossos serviços</span>
            <h2 class="sec-title">Serviço que oferecemos</h2>
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
                        <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> consulte Mais informação</a>
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
                        <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>consulte mais informação</a>
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
                        <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                            curtos períodos de recuperação...</p>
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
                        <h4 class="service-card_title h5"><a href="service-details.html">Gym Fitness Class</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                            curtos períodos de recuperação...</p>
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
                        <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                            curtos períodos de recuperação...</p>
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
                        <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Cta Area
==============================-->
<section class="cta-area space" data-bg-src="assets/img/bg/cta-bg1.png">
    <div class="container">
        <div class="row justify-content-lg-end justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="cta-wrap text-center text-lg-start">
                    <div class="title-area">
                        <span class="sub-title">Marque uma consulta</span>
                        <h2 class="sec-title text-white">Obtenha uma consultoria gratuita
                            Agora mesmo aqui!</h2>
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
Team Area
==============================-->
<div class="team-area-1 space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Nosso treinador</span>
            <h2 class="sec-title">Conheça nossa incrível equipe</h2>
        </div>
        <div class="row global-carousel team-slider-1 slider-shadow" data-slide-show="4" data-ml-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-center-mode="true">
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-1.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">George Thomas</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-2.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-3.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Amelia Harper</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-4.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Oliver Samuel</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-1.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">George Thomas</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-2.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-3.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Amelia Harper</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-4.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Oliver Samuel</a>
                        </h4>
                        <span class="team-card_desig">CEO/Founder</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
    Footer Area
==============================-->
<footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer-1-bg.png">
    <div class="container">
        <div class="contact-card">
            <div class="info-card">
                <div class="info-card_icon">
                    <i class="fas fa-location-dot"></i>
                </div>
                <div class="info-card_content">
                    <p class="info-card_text">Gym Location</p>
                    <a href="https://www.google.com/maps" class="info-card_link">Marina Lane Berlin</a>
                </div>
            </div>
            <div class="info-card">
                <div class="info-card_icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info-card_content">
                    <p class="info-card_text">Endereço de email</p>
                    <a href="mailto:health@Fitmas.com" class="info-card_link">health@Fitmas.com</a>
                </div>
            </div>
            <div class="info-card">
                <div class="info-card_icon">
                    <i class="fas fa-phone-volume"></i>
                </div>
                <div class="info-card_content">
                    <p class="info-card_text">Número de telefone</p>
                    <a href="tel:+18925382145" class="info-card_link">(+189) 2538-2145</a>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="widget-about">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset('assets/img/logoVivaBem.svg') }}"alt="VivaBem"></a>
                            </div>
                            <p class="about-text">A gym, also known as a fitness center or health club, is a facility dedicated to physical fitness and exercise gyms and typically offer a range</p>
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
                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="service-details.html">Our Mission</a></li>
                                <li><a href="team.html">Meet The Teams</a></li>
                                <li><a href="project.html">Our Projects</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
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
                        <h3 class="widget_title">Get Newsletter</h3>
                        <p class="footer-text">Get 10% off your first order! Hurry up</p>
                        <form class="newsletter-form">
                            <div class="form-group">
                                <i class="far fa-envelope"></i>
                                <input class="form-control" type="email" placeholder="Email Address" required="">
                            </div>
                            <button type="submit" class="btn style2">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>
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

<!--********************************
        Code End  Here
******************************** -->

<!-- Scroll To Top -->
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>



@section('conteudo')

@endsection


