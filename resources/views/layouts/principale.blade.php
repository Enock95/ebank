<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agropole-groupe</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="Agripole ">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/jarallax.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/agrikon-icons.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css'>

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="assets/images/loader.png" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-pinterest-p"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.topbar__social -->
                        <select class="selectpicker" data-width="fit">
                            <option data-content='<span class="flag-icon flag-icon-fr"></span> Francais'>Francais</option>
                            <option  data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                            <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
                        </select>
                        
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <a href="#"><i class="agrikon-icon-email"></i>agropolegroupe@gmail.com</a>
                        <a href="#"><i class="agrikon-icon-clock"></i>Lundi - Samedi 8:00 - 18:30, Dimanche-Fermer </a>
                        <a href="#"><i class="agrikon-icon-clock"></i>
                        <?php
                        // Définir le nouveau fuseau horaire
                             date_default_timezone_set('Europe/Paris');
                            $date = date('d-m-y h:i:s');
                            echo $date;
                        ?> 
                        </a>
                        <div class="flex-center position-ref full-height">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a href="{{ url('/home') }}" class="ml-5">DASHBORD</a>
                                    @else
                                      
                                    @endauth
                                </div>
                            @endif
                        </div>
                
                    </div><!-- /.topbar__right -->
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                        <a href="index.html" aria-label="logo image"><img src="assets/images/lo" width="153" alt="logo agropole"></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
                    <ul class="main-menu__list">
                        <li>
                            <a href="index.html">ACCEUIL</a>
                        </li>
                        <li>
                            <a href="services.html">SERVICES</a> 
                        </li>
                       
                        <li>
                            <a href="about.html">A PROPOS</a>
                        </li>
                        <li>
                            <a href="contact.html">CONTACT</a>
                        </li>
                          
                    </ul>
                    <!-- /.main-menu__list -->

                    <div class="main-header__info">
                        <div class="mr-5">
                            <a href="#" class="search-toggler main-header__search-btn"><i class="agrikon-icon-magnifying-glass"></i></a>
                        </div>
                        <a href="tel:92-666-888-0000" class="main-header__info-phone">
                            <i class="agrikon-icon-phone-call"></i>
                            <span class="main-header__info-phone-content">
                                <span class="main-header__info-phone-text">Numero de Telephone</span>
                                <span class="main-header__info-phone-title">+33 __ __ 00</span>
                            </span><!-- /.main-header__info-phone-content -->
                        </a><!-- /.main-header__info-phone -->
                    </div><!-- /.main-header__info -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="site-footer">
        <img src="assets/images/icons/footer-bg-icon-1.png" class="site-footer__shape-1" alt="">
        <img src="assets/images/icons/footer-bg-icon-2.png" class="site-footer__shape-2" alt="">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-widget">
                        <a href="index.html" class="footer-widget__Logo">
                            <img src="assets/images/logo-" width="153" alt="logo agropole">
                        </a>
                        <p>There are many variations of passages of lorem ipsum available, but the majority suffered.
                        </p>
                        <form action="#" data-url="YOUR_MAILCHIMP_URL" class="mc-form">
                            <input type="email" name="EMAIL" placeholder="Email Address">
                            <button type="submit"><i class="agrikon-icon-right-arrow"></i></button>
                        </form><!-- /.mc-form -->
                        <div class="mc-form__response"></div><!-- /.mc-form__response -->
                        <div class="footer__social">
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-pinterest-p"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.topbar__social -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-widget footer-widget__links-widget">
                        <h3 class="footer-widget__title">Liens</h3><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__links">
                            <li><a href="#">Notre Projet</a></li>
                            <li><a href="#">A Propos </a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                            
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-widget">
                        <h3 class="footer-widget__title">Nouveauté</h3><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__post">
                            <li>
                                <img src="assets/images/resources/footer-post-1.png" alt="">
                                <div class="footer-widget__post-content">
                                    <span>Jan 16, 2021</span>
                                    <h4><a href="blog-details.html">How to grow vagetables in the forms</a></h4>
                                </div><!-- /.footer-widget__post-content -->
                            </li>
                            <li>
                                <img src="assets/images/resources/footer-post-2.png" alt="">
                                <div class="footer-widget__post-content">
                                    <span>Nov 16, 2020</span>
                                    <h4><a href="blog-details.html">How to grow vagetables in the forms</a></h4>
                                </div><!-- /.footer-widget__post-content -->
                            </li>
                        </ul><!-- /.list-unstyled footer-widget__post -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__contact">
                        <li>
                            <i class="agrikon-icon-telephone"></i>
                            <a href="tel:666-888-0000">666 888 0000</a>
                        </li>
                        <li>
                            <i class="agrikon-icon-email"></i>
                            <a href="mailto:needhelp@company.com">agropolegroupe@gmail.com</a>
                        </li>
                        <li>
                            <i class="agrikon-icon-pin"></i>
                            <a href="#">80 broklyn golden street line
                                New York, USA</a>
                        </li>
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer><!-- /.site-footer -->
    <div class="bottom-footer">
        <div class="container text-center">
            <p>© Copyright 2020 par agropole.com</p>
      
        </div><!-- /.container -->
    </div><!-- /.bottom-footer -->

</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="agrikon-icon-email"></i>
                <a href="mailto:needhelp@agrikon.com">needhelp@agrikon.com</a>
            </li>
            <li>
                <i class="agrikon-icon-telephone"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__language">
                <img src="assets/images/resources/flag-1-1.jpg" alt="">
            
            </div><!-- /.mobile-nav__language -->
            <div class="mobile-nav__social">
                <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>

  

<script  src="js/index.js"></script>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/jarallax.min.js"></script>
<script src="assets/js/circle-progress.min.js"></script>
<script src="assets/js/wNumb.min.js"></script>
<script src="assets/js/nouislider.min.js"></script>

<!-- template js -->
<script src="assets/js/theme.js"></script>
<script>
    $(function(){
    $('.selectpicker').selectpicker();
});
</script>
    
</body>
</html>