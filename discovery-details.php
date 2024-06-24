<?php
include_once "admin/inc/db.php";

// Déterminer le nombre de découvertes par page
$discoveries_per_page = 2;

// Déterminer la page courante
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($current_page - 1) * $discoveries_per_page;

// Récupérer le nombre total de découvertes
$sql = "SELECT COUNT(*) AS total FROM discoveries";
$result = $conn->query($sql);
$total_discoveries = $result->fetch_assoc()['total'];

// Calculer le nombre total de pages
$total_pages = ceil($total_discoveries / $discoveries_per_page);

// Récupérer les découvertes pour la page courante
$id = $_GET['discovery'];
$sql = "SELECT * FROM discoveries where id='$id'";
$result = $conn->query($sql);
?>
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
                            <div class="classynav mb-3">
                                <ul id="nav">
                                    <li><a href="./index">Accueil</a></li>
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

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/image_1.webp);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Découverte</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index"><i class="icon_house_alt"></i> Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Détails de la découverte</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <div class="contact-area section-padding-80-50">
        <div class="container">
            <?php
            function supprimer_chaine($text, $substring) {
                $modified_text = str_replace($substring, '', $text);
                return $modified_text;
            }

            $chaine_a_supprimer = "../../";

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2 class="contact-title mb-30 text-center"><?php echo ucfirst($row['title'])." - ".$row['place']; ?></h2>
                    <h4 class="text-center mb-3" style="color: red;font-weight: bolder;"><?php
// Supposons que $row contienne les dates sous forme de chaînes
$startDate = $row['start_date']; // Exemple : '2024-06-23'
$endDate = $row['end_date']; // Exemple : '2024-06-30'

// Créer des objets DateTime à partir des chaînes de date
$startDateTime = new DateTime($startDate);
$endDateTime = new DateTime($endDate);

// Formater les dates au format d-m-Y
$formattedStartDate = $startDateTime->format('d-m-Y');
$formattedEndDate = $endDateTime->format('d-m-Y');

// Afficher les dates formatées
echo $formattedStartDate . " - " . $formattedEndDate; // Affiche : 23-06-2024 - 30-06-2024
?></h4>
                    <p class="mb-3"><?php echo ucfirst($row['details']); ?></p>
                </div>
                
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="row alime-portfolio">
                        <!-- Single Gallery Item -->
                        <div class="row mt-2 px-2 py-2">
                            <div class="col-12 col-sm-6 col-lg-4 single_gallery_item nature mb-30 wow fadeInUp" data-wow-delay="100ms">
                                <div class="single-portfolio-content">
                                    <img src="<?php echo supprimer_chaine($row['image_1'], $chaine_a_supprimer); ?>" alt="">
                                    <div class="hover-content">
                                        <a href="<?php echo supprimer_chaine($row['image_1'], $chaine_a_supprimer); ?>" class="portfolio-img">+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 single_gallery_item nature mb-30 wow fadeInUp" data-wow-delay="100ms">
                                <div class="single-portfolio-content">
                                    <img src="<?php echo supprimer_chaine($row['image_2'], $chaine_a_supprimer); ?>" alt="">
                                    <div class="hover-content">
                                        <a href="<?php echo supprimer_chaine($row['image_2'], $chaine_a_supprimer); ?>" class="portfolio-img">+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 single_gallery_item nature mb-30 wow fadeInUp" data-wow-delay="100ms">
                                <div class="single-portfolio-content">
                                    <img src="<?php echo supprimer_chaine($row['image_3'], $chaine_a_supprimer); ?>" alt="">
                                    <div class="hover-content">
                                        <a href="<?php echo supprimer_chaine($row['image_3'], $chaine_a_supprimer); ?>" class="portfolio-img">+</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="booking?discovery=<?php echo $row['id']; ?>">
                        <button class="btn btn-danger">Réserver</button>
                    </a>

                    <a href="discoveries">
                        <button class="btn btn-danger">Plus de découvertes</button>
                    </a>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
            
            

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