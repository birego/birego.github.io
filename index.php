<?php include_once "admin/inc/db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Title -->
    <title>Davimage - Index</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.webp">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Montserrat';
            font-size: 90%;
            font-weight: 100;
        }
        </style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="mb-3 text-center">
            <img src="./img/core-img/logo_black.webp" alt="" class="logo">
        </div>

       <!--  <div class="loader">
            
        </div> -->
    </div>
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                        <!-- Form -->
                        <form action="index" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Rechercher un evenement...">
                            <button type="submit">Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="./index">
                            <img src="./img/core-img/logo.webp" alt="" class="logo">
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./index">Accueil</a></li>
                                    <!-- <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./index">- Home</a></li>
                                            <li><a href="./about">- About</a></li>
                                            <li><a href="./gallery">- Gallery</a></li>
                                            <li><a href="./blog">- Blog</a></li>
                                            <li><a href="./single-blog">- Blog Details</a></li>
                                            <li><a href="./contact">- Contact</a></li>
                                            <li><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li><a href="./about">A propos</a></li>
                                    <li><a href="./gallery">Gallerie</a></li>
                                    <!-- <li><a href="./blog">Blog</a></li> -->
                                    <li><a href="./contact">Contact</a></li>
                                    
                                </ul>

                                <!-- link Icon -->
                                <div class="search-icon" data-toggle="modal"><a href=""><i class="ti-instagram"></i></a></div>
                                <div class="search-icon" data-toggle="modal"><a href=""><i class="ti-facebook"></i></a></div>
                                <div class="search-icon" data-toggle="modal"><a href=""><i class="ti-youtube"></i></a></div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/image_2.webp);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-8">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown" data-delay="900ms" >Bienvenue sur Davimage Fixer</h2>
                                <p data-animation="bounceInDown" data-delay="500ms" style="color:white;">
                                    Bienvenue sur Davimage Fixer, votre partenaire de confiance pour explorer la région des Grands Lacs. Plongez au coeur des paysages spéctaculaires, des parcs nationaux et des cultures vibrantes de cette région unique.<br>
                                    Que vous soyez passionné par la nature, l'histoire ou les rencontres humaines, nous sommes là pour rendre votre aventure mémorable et enrichissante.
                                    </p>
                                <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                    <a href="#" class="btn btn-danger text-light mb-3 mb-sm-0 mr-4" style="font-weight: 100;background-color: red;">Reserver maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/image_1.webp);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-8">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInUp" data-delay="100ms" >Explorez les merveilles des Grands Lacs</h2>
                                <?php
                                    $categ = "videos";
                                    $sql = "SELECT * FROM discoveries LIMIT 3";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                ?>
                                <a href="discovery-details?discovery=<?php echo $row['id']; ?>"><button class="hero-btn-group btn btn-sm mb-2 btn-outline-danger px-2 py-2" data-delay="300ms" data-animation="bounceInUp"><?php echo $row['place']; ?> <i class="fa fa-chevron-right"></i></button></a>
                                <?php 
                                    }
                                    ?>
                                    <a href="discovery"><button class="hero-btn-group btn btn-sm mb-2 btn-outline-danger px-2 py-2" data-delay="300ms" data-animation="bounceInUp">Voir plus <i class="fa fa-plus"></i></button></a>
                                    <?php
                                }
                                ?>
                                

                                <p data-animation="bounceInUp" data-delay="500ms">Plongez dans un voyage inoubliable à travers les paysages époustouflants et les cultures riches des régions des Grands Lacs et de l'Afrique. Notre plateforme vous offre une porte d'entrée vers des aventures uniques, des découvertes fascinantes et des expériences authentiques.</p>
                                <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                    <a href="booking?discoveries" class="btn btn-danger mb-3 mb-sm-0 mr-4" style="font-weight: 100;background-color: red;">Reserver maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


             <!-- Single Slide -->
             <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/image_4.webp);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-9">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInUp" data-delay="100ms" >Plongez au cœur des cultures fascinantes.</h2>
                                <button class="hero-btn-group btn btn-sm mb-2 btn-outline-danger px-2 py-2" data-delay="300ms" data-animation="bounceInUp">Les Banyarwanda <i class="fa fa-chevron-right"></i></button>
                                <button class="hero-btn-group btn btn-sm mb-2 btn-outline-danger px-2 py-2"  data-delay="300ms" data-animation="bounceInUp">Les Barundi <i class="fa fa-chevron-right"></i></button>
                                <button class="hero-btn-group btn btn-sm mb-2 btn-outline-danger px-2 py-2"  data-delay="300ms" data-animation="bounceInUp">Les Sukuma <i class="fa fa-chevron-right"></i></button>
                                <button class="hero-btn-group btn btn-sm mb-2 btnoutline-danger px-2 py-2"  data-delay="300ms" data-animation="bounceInUp">Voir plus <i class="fa fa-plus"></i></button>

                                <p data-animation="bounceInUp" data-delay="500ms">Davimage Fixer vous invite à découvrir la richesse et la diversité des cultures africaines, avec une attention particulière pour la région des Grands Lacs. Notre mission est de vous offrir une fenêtre ouverte sur les traditions, les langues, les arts, la musique et les cuisines qui font vibrer ce continent unique.</p>
                                <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                    <a href="#" class="btn btn-danger mb-3 mb-sm-0 mr-4" style="font-weight: 100;background-color: red;">Reserver maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Single Slide -->
             <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/image_5.webp);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-9">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInUp" data-delay="100ms" >Profitez de nos safaris, detentes et trekkings uniques.</h2>
                                <button class="hero-btn-group btn btn-sm mb-2 btn-outline-danger px-2 py-2"  data-delay="300ms" data-animation="bounceInUp">Safari et observation des animaux <i class="fa fa-chevron-right"></i></button>
                                <button class="hero-btn-group btn btn-sm mb-2 btn-outline-danger px-2 py-2"  data-delay="300ms" data-animation="bounceInUp">Randonnées et trekking <i class="fa fa-chevron-right"></i></button>
                                <button class="hero-btn-group btn btn-sm mb-2 btn-outline-danger px-2 py-2"  data-delay="300ms" data-animation="bounceInUp">Sports nautiques et détentes<i class="fa fa-chevron-right"></i></button>

                                <p data-animation="bounceInUp" data-delay="500ms">Chez Davimage Fixer, nous vous proposons des safaris et trekkings uniques qui combinent aventure, découverte et détente.</p>
                                <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                    <a href="#" class="btn btn-danger mb-3 mb-sm-0 mr-4" style="font-weight: 100;background-color: red;">Reserver maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </section>
    <!-- Welcome Area End -->



    <!-- Follow Area Start -->
    <section class="follow-area clearfix">
        <!-- <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Captures récentes</h4>
                        <p>@Davimage</p>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Instagram Feed Area -->
        <div class="instragram-feed-area owl-carousel">
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="<?php echo supprimer_chaine($row['image'], $chaine_a_supprimer); ?>" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Davimage</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/image_18.webp" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Davimage</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/image_17.webp" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Davimage</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/image_12.webp" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Davimage</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/image_13.webp" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Davimage</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/image_14.webp" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Davimage</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Follow Area End -->



    <!-- <section class="follow-area clearfix mt-40">

       

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h4 class="text-center">A propos de nous</h4>
                        <p style="text-align: left;"><b class="text-danger">Davimage production</b> est une boite de production des reportages en zones des conflits ainsi que des decouvertes en République Democratique du Congo. </p>
                        <p>A travers des images, temoignages, des synopsis à la réalisation des documentaires et des reportages dans les coins reculés de la RDC ainsi que des histoires ancestrales.<br>Ceci afin de valoir les bonnes initiatives des communautés locales qui réussissent en RDC.</b></p>
                    </div>
                </div>
            </div>
        </div>


        </section> -->








    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">


                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Gallerie</h4>
                        <!-- <p>@Davimage</p> -->
                    </div>



                    <!-- Projects Menu -->
                    <div class="alime-projects-menu">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*" id="link" style="font-weight: 100;">Toutes les catégories</button>
                            <button class="btn mt-2" data-filter=".human" style="font-weight: 100;">Humanitaire</button>
                            <button class="btn mt-2" data-filter=".nature" style="font-weight: 100;">Nature</button>
                            <button class="btn mt-2" data-filter=".country" style="font-weight: 100;">Cultures</button>
                            <button class="btn mt-2" data-filter=".voyage" style="font-weight: 100;">Voyages</button>
                            <button class="btn mt-2" data-filter=".video" style="font-weight: 100;">Video</button>
                        </div>
                    </div>
                </div>
            </div>

             <div class="row alime-portfolio">
                <!-- Single Gallery Item -->
                <div class="row mt-2 px-2 py-2">
                    <?php
                    function supprimer_chaine($text, $substring) {
                        $modified_text = str_replace($substring, '', $text);
                        return $modified_text;
                    }

                    $chaine_a_supprimer = "../../";
                    $categ = "nature";
                    $sql = "SELECT * FROM gallery where category='$categ'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp" data-wow-delay="100ms">
                                <div class="single-portfolio-content">
                                    <img src="<?php echo supprimer_chaine($row['image'], $chaine_a_supprimer); ?>" alt="">
                                    <div class="hover-content">
                                        <a href="<?php echo supprimer_chaine($row['image'], $chaine_a_supprimer); ?>" class="portfolio-img">+</a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item video human mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="img/bg-img/image_14.webp" alt="">
                        <div class="hover-content">
                            <a href="img/bg-img/image_14.webp" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <?php
                $categ = "culture";
                $sql = "SELECT * FROM gallery where category='$categ'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="col-12 col-sm-6 col-lg-3 single_gallery_item country mb-30 wow fadeInUp" data-wow-delay="100ms">
                            <div class="single-portfolio-content">
                                <img src="<?php echo supprimer_chaine($row['image'], $chaine_a_supprimer); ?>" alt="">
                                <div class="hover-content">
                                    <a href="<?php echo supprimer_chaine($row['image'], $chaine_a_supprimer); ?>" class="portfolio-img">+</a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

                <!-- Single Gallery Item -->
                <?php
                $categ = "humanitaire";
                $sql = "SELECT * FROM gallery where category='$categ'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp" data-wow-delay="100ms">
                            <div class="single-portfolio-content">
                                <img src="<?php echo supprimer_chaine($row['image'], $chaine_a_supprimer); ?>" alt="">
                                <div class="hover-content">
                                    <a href="<?php echo supprimer_chaine($row['image'], $chaine_a_supprimer); ?>" class="portfolio-img">+</a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

                <!-- Single Gallery Item -->
                <?php
                $categ = "voyage";
                $sql = "SELECT * FROM gallery where category='$categ'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="col-12 col-sm-6 col-lg-3 single_gallery_item voyage mb-30 wow fadeInUp" data-wow-delay="100ms">
                            <div class="single-portfolio-content">
                                <img src="<?php echo supprimer_chaine($row['image'], $chaine_a_supprimer); ?>" alt="">
                                <div class="hover-content">
                                    <a href="<?php echo supprimer_chaine($row['image'], $chaine_a_supprimer); ?>" class="portfolio-img">+</a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

                <!-- Single Gallery Item -->
                <?php
                $categ = "videos";
                $sql = "SELECT * FROM gallery where category='$categ'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="col-12 col-sm-6 col-lg-3 single_gallery_item videos mb-30 wow fadeInUp" data-wow-delay="100ms">
                            <div class="single-portfolio-content">
                                <div class="video-container" id="video-container">
                                    <img src="<?php echo supprimer_chaine($row['image'], $chaine_a_supprimer); ?>" alt="Thumbnail" class="video-thumbnail" id="video-thumbnail">
                                    <iframe id="youtube-iframe" class="youtube-iframe" src="<?php echo $row['link']; ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>

                                <div class="hover-content" style="background-color: transparent;">
                                    <a href="<?php echo $row['link']; ?>" style="background-color: transparent;" target="_blank"><img src="img/core-img/youtube.webp"></a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <!-- Gallery Area End -->

    

    <!-- Footer Area Start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content d-flex align-items-center justify-content-between">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text text-light">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed by <a href="" target="_blank" class="text-danger">Canal Kivu</a>

                        </div>
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="#">
                                <span class="text-light"><img src="./img/core-img/logo.webp" alt="" class="logo"></span>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/alime.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>