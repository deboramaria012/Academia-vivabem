
@extends('layout.layout');

@section('title','contato')




<div class="breadcumb-wrapper" data-bg-src="{{ asset ('assets/img/bg/breadcrumb-bg.png') }}">
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2s!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="container">
    <div class="contact-form-area space-bottom">
        <div class="row g-0">
            <div class="col-lg-4">
                <div class="contact-form-thumb">
                    <img src="assets/img/normal/contact1.png" alt="img">
                </div>
            </div>
            <div class="col-lg-8 bg-smoke2">
                <div class="contact-form-wrap">
                    <div class="title-area">
                        <span class="sub-title">Contate-nos
                        </span>
                        <h2 class="sec-title">Envie-nos uma mensagem</h2>
                    </div>
                    <form action="mail.php" method="POST" class="contact-form ajax-contact">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control style-white" name="name" id="name" placeholder="Your Name">
                                    <i class="far fa-user"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control style-white" name="email" id="email" placeholder="Email Address">
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <select name="subject" id="subject" class="form-select style-white">
                                <option value="" disabled="" selected="" hidden="">Selecione o assunto</option>
                                <option value="one">Musculação</option>
                                <option value="two">Levantamento de força</option>
                                <option value="three">Aula de Meditação</option>
                                <option value="four">Aula de boxe</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <textarea placeholder="Type Your Message" id="contactForm" class="form-control style-white"></textarea>
                        </div>

                        <div class="form-btn col-12">
                            <button class="btn">Envie uma mensagem</button>
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
                    <a class="popup-image icon-btn" href="{{ asset ('assets/img/instagram/instafeed1.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed1.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset ('assets/img/instagram/instafeed2.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed2.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed3.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed3.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset ('assets/img/instagram/instafeed4.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed4.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed5.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed5.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed6.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed6.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed7.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed7.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('assets/img/instagram/instafeed8.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('assets/img/instagram/instafeed8.png') }}" alt="portfolio">
                </div>
            </div>
        </div>
    </div>
</div>



<!--==============================
    Footer Area
==============================-->
<footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset ('assets/img/bg/footer-1-bg.png') }}">
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
                    <p class="info-card_text">Phone Number</p>
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
                                <a href="{{ url('/') }}"><img src="{{ asset(('assets/img/logoVivaBem.svg')) }}" alt="vivabem"></a>
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

