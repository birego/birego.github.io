<?php include_once "admin/inc/db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Davimage production</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.webp">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Montserrat';
            font-size: 90%;
            font-weight: 100;
        }

        .video-container {
            position: relative;
            width: 100%;
            max-width: 560px;
            cursor: pointer;
        }

        .video-thumbnail {
            width: 100%;
            display: block;
        }

        .youtube-iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            display: none;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="mb-3 text-center">
            <img src="./img/core-img/logo_black.webp" alt="" class="logo">
        </div>
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
                                    <li><a href="./index">Accueil</a></li>
                                    <li><a href="./about">A propos</a></li>
                                    <li class="active"><a href="./gallery">Gallerie</a></li>
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

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/image_1.webp);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Gallerie</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index"><i class="icon_house_alt"></i> Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallerie</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*" id="link" style="font-weight: 100;">Toutes les catégories</button>
                            <button class="btn mt-2" data-filter=".human" style="font-weight: 100;">Humanitaire</button>
                            <button class="btn mt-2" data-filter=".nature" style="font-weight: 100;">Nature</button>
                            <button class="btn mt-2" data-filter=".country" style="font-weight: 100;">Cultures</button>
                            <button class="btn mt-2" data-filter=".voyage" style="font-weight: 100;">Voyages</button>
                            <button class="btn mt-2" data-filter=".videos" style="font-weight: 100;">Video</button>
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
    <script>
        document.getElementById('video-container').addEventListener('click', function() {
            var thumbnail = document.getElementById('video-thumbnail');
            var iframe = document.getElementById('youtube-iframe');
            thumbnail.style.display = 'none';
            iframe.style.display = 'block';
        });
    </script>
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
