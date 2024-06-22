<?php
    include_once "inc/nav.php"; 
    include_once "inc/db.php";

    // Fonction pour récupérer les images par catégorie
    function getImagesByCategory($conn, $category) {
        $stmt = $conn->prepare("SELECT image FROM gallery WHERE category = ?");
        $stmt->bind_param("s", $category);
        $stmt->execute();
        $result = $stmt->get_result();
        $images = [];
        while ($row = $result->fetch_assoc()) {
            $images[] = $row['image'];
        }
        $stmt->close();
        return $images;
    }

    // Récupération des images pour chaque catégorie
    $natureImages = getImagesByCategory($conn, 'nature');
    $humanitaireImages = getImagesByCategory($conn, 'humanitaire');
    $voyageImages = getImagesByCategory($conn, 'voyage');
    $cultureImages = getImagesByCategory($conn, 'culture');
    $videoImages = getImagesByCategory($conn, 'videos');
?>
<style type="text/css">
    .video-container {
            position: relative;
            width: 215px;
            height: 120px;
        }
        .video-placeholder {
           
        }
        .video-iframe {
            
        }
</style>


                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Découvertes des cultures</h5>
                                            <p class="m-b-0">Utilisez cette section pour programmer des futurs voyages de decouverte des cultures</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="home"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Cultures</a>
                                            </li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Basic table card start -->
                                        <div class="card">
                                            <div class="card-header py-4">
                                                <h5>Galerie</h5>
                                               
                                                <div class="card-header-right">
                                                    <a href="add-gallery">
                                                        <button class="btn btn-primary"><i class="fas fa-plus text-white"></i> Remplir la galerie</button>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <div class="card-block table-border-style">
                                                
<div class="card">









                                                    
                                                    <div class="card-block">
                                                        <!-- Row start -->
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-12">
                                                                <!-- Nav tabs -->
                                                                <ul class="nav nav-tabs  tabs" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Natures</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Humanitaires</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Voyages</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Cultures</a>
                                                                    </li>

                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Vidéos</a>
                                                                    </li>

                                                                    <li class="nav-item">
                                                                        <a class="nav-link" href="" role="tab"><i class="ti ti-trash text-danger"></i> <span class="text-danger">Supprimer</span></a>
                                                                    </li>
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content tabs card-block">
                                                                    <div class="tab-pane active" id="home1" role="tabpanel">
                                                                        <div class="row mt-2 px-2 py-2">
                                                                        <?php
                                                                        // Requête SQL pour sélectionner les données de la table gallery

                                                                        function supprimer_chaine($text, $substring) {
    // Utiliser str_replace pour remplacer toutes les occurrences de la chaîne par une chaîne vide
    $modified_text = str_replace($substring, '', $text);
    return $modified_text;
}

$chaine_a_supprimer = "../../";
                                                                        $categ="nature";
$sql = "SELECT * FROM gallery where category='$categ'";
$result = $conn->query($sql);

// Vérifier s'il y a des résultats
if ($result->num_rows > 0) {
    // Afficher les données dans un tableau HTML
    while($row = $result->fetch_assoc()) {
    ?>
    <div class="col-md-3 col-lg-3 image-checkbox-container">
                                                                                    <img src="<?php echo "../".supprimer_chaine($row['image'], $chaine_a_supprimer); ?>" style="width: 100%;">
                                                                                    <div class="image-checkbox">
                                                                                        <input type="checkbox">
                                                                                    </div>
                                                                                </div>
    
    <?php

    }
} else {
    echo "Aucune image";
}

?> 
                                                                            


                                                                            
                                                                    </div>
                                                                </div>


                                                                    <div class="tab-pane" id="profile1" role="tabpanel">
                                                                        <div class="row mt-2 px-2 py-2">
                                                                        <?php
                                                                        // Requête SQL pour sélectionner les données de la table gallery

                                                                        

                                                                        $categ_h="humanitaire";
$sql_h = "SELECT * FROM gallery where category='$categ_h'";
$result_h = $conn->query($sql_h);

// Vérifier s'il y a des résultats
if ($result_h->num_rows > 0) {
    // Afficher les données dans un tableau HTML
    while($row_h = $result_h->fetch_assoc()) {
    ?>
    <div class="col-md-3 col-lg-3 image-checkbox-container">
                                                                                    <img src="<?php echo "../".supprimer_chaine($row_h['image'], $chaine_a_supprimer); ?>" style="width: 100%;">
                                                                                    <div class="image-checkbox">
                                                                                        <input type="checkbox">
                                                                                    </div>
                                                                                </div>
    
    <?php

    }
} else {
    echo "Aucune image";
}

?> 
</div>
                                                                    </div>
                                                                    <div class="tab-pane" id="messages1" role="tabpanel">
                                                                        <div class="row mt-2 px-2 py-2">
                                                                         <?php
                                                                        // Requête SQL pour sélectionner les données de la table gallery

                                                                        

                                                                        $categ_v="voyage";
$sql_v = "SELECT * FROM gallery where category='$categ_v'";
$result_v = $conn->query($sql_v);

// Vérifier s'il y a des résultats
if ($result_v->num_rows > 0) {
    // Afficher les données dans un tableau HTML
    while($row_v = $result_v->fetch_assoc()) {
    ?>
    <div class="col-md-3 col-lg-3 image-checkbox-container">
                                                                                    <img src="<?php echo "../".supprimer_chaine($row_v['image'], $chaine_a_supprimer); ?>" style="width: 100%;">
                                                                                    <div class="image-checkbox">
                                                                                        <input type="checkbox">
                                                                                    </div>
                                                                                </div>
    
    <?php

    }
} else {
    echo "Aucune image";
}

?> 
</div>
                                                                    </div>
                                                                    <div class="tab-pane" id="settings1" role="tabpanel">
                                                                        <div class="row mt-2 px-2 py-2">
                                                                         <?php
                                                                        // Requête SQL pour sélectionner les données de la table gallery

                                                                        

                                                                        $categ_c="culture";
$sql_c = "SELECT * FROM gallery where category='$categ_c'";
$result_c = $conn->query($sql_c);

// Vérifier s'il y a des résultats
if ($result_c->num_rows > 0) {
    // Afficher les données dans un tableau HTML
    while($row_c = $result_c->fetch_assoc()) {
    ?>
    <div class="col-md-3 col-lg-3 image-checkbox-container">
                                                                                    <img src="<?php echo "../".supprimer_chaine($row_c['image'], $chaine_a_supprimer); ?>" style="width: 100%;">
                                                                                    <div class="image-checkbox">
                                                                                        <input type="checkbox">
                                                                                    </div>
                                                                                </div>
    
    <?php

    }
} else {
    echo "Aucune image";
}

?> 
</div>
                                                                    </div>


                                                                    <div class="tab-pane" id="videos" role="tabpanel">
                                                                        <div class="row mt-2 px-2 py-2">
                                                                         <?php
                                                                        // Requête SQL pour sélectionner les données de la table gallery

                                                                        

                                                                        $categ_vid="videos";
$sql_vid = "SELECT * FROM gallery where category='$categ_vid'";
$result_vid = $conn->query($sql_vid);

// Vérifier s'il y a des résultats
if ($result_vid->num_rows > 0) {
    // Afficher les données dans un tableau HTML
    while($row_vid = $result_vid->fetch_assoc()) {
    ?>
    <div class="col-md-3 col-lg-3 image-checkbox-container">
                                                                                   
                       
                       <div class="video-container">
        <div class="video-placeholder" id="video-placeholder" style=" width: 100%;height: 100%;background: url('<?php echo "../".supprimer_chaine($row_vid['image'], $chaine_a_supprimer); ?>') center center / cover no-repeat;
            cursor: pointer;"></div>
        <iframe class="video-iframe" id="video-iframe" src="" allow="autoplay; encrypted-media" style="display: none;width: 100%;height: 100%;border: none;" allowfullscreen></iframe>
    </div>
                                                                                    <div class="image-checkbox">
                                                                                        <input type="checkbox">
                                                                                    </div>
                                                                                </div>
    
    <?php

    }
} else {
    echo "Aucune vidéo";
}

?> 
</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <!-- Row end -->
                                                    </div>
                                                </div>
                                                <!-- Bootstrap tab card end -->  



                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Basic table card end -->
                                        <!-- Inverse table card start -->
                                        
                                       
                                       
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->

                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script>
        document.getElementById('video-placeholder').addEventListener('click', function() {
            var iframe = document.getElementById('video-iframe');
            iframe.src = "https://www.youtube.com/embed/ID_VIDEO?autoplay=1";
            iframe.style.display = 'block';
            this.style.display = 'none';
        });
    </script>
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- slimscroll js -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>
