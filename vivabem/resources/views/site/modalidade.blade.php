
@extends('layout.layout');


@section('title','Modalidade')

<link rel="stylesheet" href="{{ asset ('assets/css/estilo.css') }}">


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
                    <h1 class="breadcumb-title">Pricing Plan</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li class="active">PRICING PLAN</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Pricing plan Area
==============================-->
<div class="pricing-area">
    <div class="container">
        <div class="title-area text-center">
            <h3 class="sub-title">Planos de Preços</h3>
            <h2 class="sec-title text-white">Nosso Plano de Preço</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card pricing-card_active">
                    <div class="pricing-card_bg">
                        <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="assets/img/icon/picing-icon_1-1.svg" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Associação Básica</h3>
                    <h4 class="pricing-card_price"><span class="currency">R$</span>99<span class="duration">/mês</span></h4>
                    <p class="pricing-card_content">Acesso livre à academia durante o horário comercial, podendo usufruir de instalações e equipamentos disponíveis.</p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 treinos</li>
                            <li><i class="far fa-check-circle"></i>Ducha e armários gratuitos</li>
                            <li><i class="far fa-check-circle"></i>Tapete de yoga pessoal</li>
                            <li><i class="far fa-check-circle"></i>Estacionamento gratuito</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Escolher Este Plano</a>
                </div>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_bg">
                        <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="assets/img/icon/picing-icon_1-2.svg" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Associação Gold</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>199<span class="duration">/mês</span></h4>
                    <p class="pricing-card_content">Acesso 24/7 à academia, incluindo aulas exclusivas. Treinos personalizados e nutricionisa inclusivo.</p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 treinos</li>
                            <li><i class="far fa-check-circle"></i>Ducha e armários gratuitos</li>
                            <li><i class="far fa-check-circle"></i>Tapete de yoga pessoal</li>
                            <li><i class="far fa-check-circle"></i>Estacionamento gratuito</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Escolher Este Plano</a>
                </div>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_bg">
                        <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class ="pricing-card_icon">
                        <img src="assets/img/icon/picing-icon_1-3.svg" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Associação Premium</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>249<span class="duration">/mês</span></h4>
                    <p class="pricing-card_content">Acesso ilimitado à academia a todas as aulas. Acompanhamento individual com instrutores.</p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 treinos</li>
                            <li><i class="far fa-check-circle"></i>Ducha e armários gratuitos</li>
                            <li><i class="far fa-check-circle"></i>Tapete de yoga pessoal</li>
                            <li><i class="far fa-check-circle"></i>Estacionamento gratuito</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Escolher Este Plano</a>
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
                        <a href="about.html" class="btn style2">Marque uma consulta</a>
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

<!--==============================
Blog Area
==============================-->
<section class="blog-area space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Postagens de blog
            </span>
            <h2 class="sec-title">Leia nossos artigos mais recentes</h2>
        </div>
        <div class="row global-carousel blog-slider" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false" data-md-dots="true">
            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="assets/img/blog/blog_1_1.png" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html"> Dicas e conselhos nutricionais para frequentadores de academia</a></h3>
                        <p class="blog-text">Essas associações especializadas são projetadas para tornar o condicionamento físico acessível e acessível para esses...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog_1_2.png') }}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Uncover Your True Potential at Fitmas</a></h3>
                        <p class="blog-text">Se você estiver visitando a região ou quiser trazer um amigo para se exercitar, oferecemos passes diários e passes para convidados...   </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog_1_3.png') }}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="{{ asset('assets/img/blog/blog_card1_bg.png') }}">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Ofereça opções com desconto para estudantes idosos</a></h3>
                        <p class="blog-text">Compreendemos a importância do condicionamento físico para toda a família. Nossa opção familiar permite múltiplas famílias...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog_1_1.png') }}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="{{ asset('assets/img/blog/blog_card1_bg.png') }}">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Dicas e conselhos nutricionais para frequentadores de academia</a></h3>
                        <p class="blog-text">Essas associações especializadas são projetadas para tornar o condicionamento físico acessível e acessível para esses...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog_1_2.png') }}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="{{ asset('assets/img/blog/blog_card1_bg.png') }}">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Uncover Your True Potential at Fitmas</a></h3>
                        <p class="blog-text">Se você estiver visitando a região ou quiser trazer um amigo para se exercitar, oferecemos passes diários e passes para convidados...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog_1_3.png') }}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="{{ asset('assets/img/blog/blog_card1_bg.png') }}">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Ofereça opções com desconto para estudantes idosos</a></h3>
                        <p class="blog-text">Compreendemos a importância do condicionamento físico para toda a família. Nossa opção familiar permite múltiplas famílias...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <p class="info-card_text">Localização da academia</p>
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
                                <li><a href="team.html">Modalidade</a></li>
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
                            <button type="submit" class="btn style2">SE INSCREVER</button>
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

