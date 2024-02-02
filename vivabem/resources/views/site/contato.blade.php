@extends('layout.layout')

@section('title', 'contato')

@section('conteudo')


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
                            <li><i class="far fa-envelope"></i><a href="mailto:info@gmail.com">support@gmail.com</a>
                            </li>
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
                            <a href="index.html"><img src= "{{ asset('assets/img/logovivabem.png') }}"
                                    alt=""></a>
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
                                    <a href="{{ url('/sobre') }}">Sobre</a>
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

                                        <li><a href="{{ url('/modalidade/treinamentofuncional') }}">treinamento
                                                funcional</a></li>

                                    </ul>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="{{ url('/treino') }}">Treino</a>
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
                    <h1 class="breadcumb-title">Contato</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li class="active">CONTACT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!--==============================
    Contact Area
==============================-->
<div class="contact-area space bg-smoke2">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon">
                        <img src="assets/img/icon/contact-icon1.svg" alt="icon">
                    </div>
                    <div class="media-body">
                        <span class="contact-info_title">Call Us 24/7</span>
                        <h6 class="contact-info_text"><a href="tel:9288006780">+584 (25) 21453</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon">
                        <img src="assets/img/icon/contact-icon2.svg" alt="icon">
                    </div>
                    <div class="media-body">
                        <span class="contact-info_title">Faça um orçamento</span>
                        <h6 class="contact-info_text"><a href="mailto:info@Fitmas.com">info@Fitmas.com</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon">
                        <img src="assets/img/icon/contact-icon3.svg" alt="icon">
                    </div>
                    <div class="media-body">
                        <span class="contact-info_title">Estação de serviço</span>
                        <h6 class="contact-info_text"><a href="tel:9288006780">25 Hilton Street</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="map-sec2">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2s!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
        allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="container">
    <div class="contact-form-area space-bottom">
        <div class="row g-0">
            <div class="col-lg-4">
                <div class="contact-form-thumb">
                    <img src="{{ asset('assets/img/normal/contact1.png') }}" alt="img">
                </div>
            </div>
            <div class="col-lg-8 bg-smoke2">
                <div class="contact-form-wrap">
                    <div class="title-area">
                        <span class="sub-title">Contate-nos
                        </span>
                        <h2 class="sec-title">Envie-nos uma mensagem</h2>
                    </div>
                    <form action="{{ route('contato.enviar') }}" method="POST" class="contact-form" id="formContato">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control style-white" name="nomeContato" id="nomeContato" placeholder="Nome" value="{{ old('nomeContato') }}">
                                    <i class="far fa-user"></i>
                                    <div id="nomeContatoError" class="error-mensagem"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control style-white" name="emailContato" id="emailContato" placeholder="Endereço de Email" value="{{ old('emailContato') }}">
                                    <i class="far fa-envelope"></i>

                                    <div id="emailcontatoerror" class="error-mensagem"></div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control style-white" name="foneContato" id="foneContato" placeholder="Endereço de Email" value="{{ old('foneContato') }}">
                                    <i class="far fa-envelope"></i>

                                    <div id="foneContatoError" class="error-mensagem"></div>

                                </div>
                            </div>

                            <div class="form-group">
                                <select name="assuntoContato" id="assuntoContato" class="form-select style-white">
                                    <option value="{{ old('assuntoContato') }}" disabled="" selected="" hidden="">Selecione o assunto</option>
                                    <option value="one">Musculação</option>
                                    <option value="two">Levantamento de força</option>
                                    <option value="three">Aula de Meditação</option>
                                    <option value="four">Aula de boxe</option>
                                </select>

                                <div id="assuntoContatoerror" class="error-mensagem"></div>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Sua Mensagem" id="mensContato" name="mensContato" class="form-control style-white">{{ old('mensContato') }}</textarea>

                            <div class="mensContatoerror" class="error-mensagem"></div>
                            </div>

                            <div class="form-btn col-12">
                                {{-- <input type="submit" value="Enviar via e-mail" class="btn"> --}}
                                <button class="btn" type="submit" >Enviar via e-mail</button>
                                <div id="contatoMensagem" class="msgContato"></div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-bottom">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Siga nosso
            </span>
            <h2 class="sec-title">Feed do Instagram</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed1.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed1.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed2.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed2.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed3.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed3.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed4.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed4.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed5.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed5.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed6.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed6.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed7.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed7.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed8.png') }}"><i
                            class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed8.png') }}" alt="portfolio">
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
