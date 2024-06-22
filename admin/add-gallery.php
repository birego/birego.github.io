<?php
    include_once "inc/nav.php"; 
?>


                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Galerie</h5>
                                            <p class="m-b-0">Partagez vos souvenir et vos réalisations</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="home"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Remplir la galerie</a>
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
                                            <div class="card-header">
                                                <h5>Remplir la galerie</h5>
                                                <div class="card-header-right">
                                                    <a href="gallery">
                                                        <button type="button" class="btn btn-primary"> Catalogue d'images et des videos <i class="fas fa-arrow-right text-white"></i></button>
                                                    </a>
                                                </div>


                                                
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    
                                                <div class="col-lg-12">
                                                <div class="">
                                                    <form method="post" enctype="multipart/form-data" action="backend/add-gallery.php">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="category">Choisir une catégorie pour les images</label>
                    <select class="form-control" name="category">
                        <option value="nature">Nature</option>
                        <option value="humanitaire">Humanitaire</option>
                        <option value="culture">Culture</option>
                        <option value="voyage">Voyage</option>
                        <option value="videos">Vidéos</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label for="images">Charges les images</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple required>
                </div>

                <div class="form-group col-md-12">
                    <label for="link">Lien instagram</label>
                    <input type="text" class="form-control" id="link" name="link" value="https://www.instagram.com/davimage7/">
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name="save">Enregistrer</button>
        </form>
                                                </div>
                                                    




                                                   


                                                
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

    <!-- Required Jquery -->
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
