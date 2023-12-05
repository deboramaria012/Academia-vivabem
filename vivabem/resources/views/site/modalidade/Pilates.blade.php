@extends('layout.layout')

@section('title','home')

<link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}">
 <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.min.css') }}">
 <link rel="stylesheet" href="{{ asset ('assets/css/jquery.flipster.min.css') }}">
 <link rel="stylesheet" href="{{ asset ('assets/css/slick.min.css') }}">
 <link rel="stylesheet" href="{{ asset ('assets/css/magnific-popup.min.css') }}">
 <link rel="stylesheet" href="{{ asset ('assets/css/fontawesome.min.css') }}">
 <link rel="stylesheet" href="{{ asset ('assets/nice-select.min.css') }}">


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
                   <h1 class="breadcumb-title">Pilates</h1>
                   <ul class="breadcumb-menu">
                       <li><a href="{{ url('/') }}">HOME</a></li>
                       <li class="active">Pilates</li>
                   </ul>
               </div>
           </div>
       </div>

   </div>
</div>

<div class="service-details-area space-top space-extra-bottom overflow-hidden">
   <div class="container">
       <div class="row">
           <div class="col-xxl-8 col-lg-7">
               <div class="service-page-single">
                   <div class="page-img mb-50">
                       <img src="{{ asset('assets/img/pilates.png') }}" alt="img">
                   </div>
                   <div class="page-content">
                       <h2 class="page-title">Pilates</h2>
                       <p class="mb-50">O Pilates é uma jornada única de autodescoberta, uma experiência que não apenas transforma o corpo, mas também renova a mente. Independentemente do seu nível de experiência, embarque nessa jornada para explorar o mundo transformador do Pilates e colha os inúmeros benefícios que essa prática pode oferecer à sua saúde física e mental.</p>
                       <h3 class="page-subtitle mb-0">Porque escolher-nos?</h3>
                       <p>Existem vários motivos pelos quais você deve nos escolher:</p>
                       <div class="row">
                           <div class="col-sm-6">
                               <div class="service-wrap">
                                   <h6><i class="far fa-check me-2"></i> Diversificada gama de serviços:</h6>
                                   <p>Oferecemos uma ampla gama de serviços e programas de condicionamento físico para atender a diferentes níveis, interesses e objetivos de condicionamento físico.
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div class="service-wrap">
                                   <h6><i class="far fa-check me-2"></i> Conhecimento e experiência:</h6>
                                   <p>Contamos com uma equipe de profissionais de fitness altamente qualificados e experientes que se dedicam a ajudá-lo...</p>
                               </div>
                           </div>
                       </div>
                       <p class="mt-25 mb-50">Oferecemos uma ampla gama de serviços e programas de condicionamento físico para atender a diferentes níveis, interesses e objetivos de condicionamento físico. Quer procure treino pessoal, aulas de fitness em grupo, treinos especializados ou orientação nutricional, temos opções que se adaptam às suas necessidades.</p>
                       <h3 class="page-subtitle mb-0">Porque escolher-nos?</h3>
                       <div class="service-page-list checklist mb-50" data-bg-src="{{ asset('assets/img/normal/service-details1-2.png') }}">
                           <ul>
                               <li><i class="far fa-check-circle"></i>Projetar programa de treino.</li>
                               <li><i class="far fa-check-circle"></i>Sobrecarga progressiva.</li>
                               <li><i class="far fa-check-circle"></i>Concentre-se na forma adequada.</li>
                               <li><i class="far fa-check-circle"></i>Seja consistente com o treinamento.</li>
                               <li><i class="far fa-check-circle"></i>Ajuste a ingestão de calorias conforme necessário</li>
                           </ul>
                       </div>
                       <div class="accordion-area mb-30 accordion" id="faqAccordion">

                           <div class="accordion-card style2 active">
                               <div class="accordion-header" id="collapse-item-1">
                                   <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"> Qual é o horário de funcionamento da sua academia? </button>
                               </div>
                               <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                   <div class="accordion-body">
                                       <p class="faq-text">Comunique progressivamente o capital humano flexível com os melhores esquemas. Desenvolva completamente infraestruturas 2.0 por meio de oportunidades de ponta. Inicie completamente habilidades de liderança de classe mundial por meio de aplicativos totalmente testados.
                                 ​ </p>
                                   </div>
                               </div>
                           </div>


                           <div class="accordion-card style2">
                               <div class="accordion-header" id="collapse-item-2">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"> Que comodidades e instalações sua academia oferece?</button>
                               </div>
                               <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                   <div class="accordion-body">
                                       <p class="faq-text">Comunique progressivamente o capital humano flexível com os melhores esquemas. Desenvolva completamente infraestruturas 2.0 por meio de oportunidades de ponta. Inicie completamente habilidades de liderança de classe mundial por meio de aplicativos totalmente testados. </p>
                                   </div>
                               </div>
                           </div>


                           <div class="accordion-card style2">
                               <div class="accordion-header" id="collapse-item-3">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"> Você fornece serviços de treinamento pessoal?</button>
                               </div>
                               <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                   <div class="accordion-body">
                                       <p class="faq-text">Comunique progressivamente o capital humano flexível com os melhores esquemas. Desenvolva completamente infraestruturas 2.0 por meio de oportunidades de ponta. Inicie completamente habilidades de liderança de classe mundial por meio de aplicativos totalmente testados. </p>
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
                       <h3 class="widget_title">Horário de Funcionamento</h3>
                       <ul>
                           <li>
                               <i class="far fa-clock"></i>
                               Segunda a Sexta: 1:00 – 2:00 pm
                           </li>
                           <li>
                               <i class="far fa-clock"></i>
                               Sábado: 8:00 – 12:00 pm
                           </li>
                           <li class="unavailable">
                               <i class="far fa-clock"></i>
                               Domingo: Fechado
                           </li>
                       </ul>
                   </div>
               </aside>
           </div>
       </div>
   </div>
</div>


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
<!-- Slick Slider -->
<script src="{{ asset ('assets/js/slick.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset ('assets/js/bootstrap.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Counter Up -->
<script src="{{ asset ('assets/js/jquery.counterup.min.js')}}"></script>
<!-- Range Slider -->
<script src="{{ asset ('assets/js/jquery-ui.min.js')}}"></script>
<!-- Flip Slider -->
<script src="{{asset  ('assets/js/jquery.flipster.min.js')}}"></script>
<!-- Isotope Filter -->
<script src="{{ asset ('assets/js/imagesloaded.pkgd.min.js') }}"></script>

<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

<script src="{{ asset ('assets/js/bmi.calculator.js')}}"></script>

<!-- Main Js File -->
<script src=" {{ asset ('assets/js/main.js') }}"></script>


@section('conteudo')
@endsection
