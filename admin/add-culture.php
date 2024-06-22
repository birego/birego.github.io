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
                                            <h5 class="m-b-10">Ajouter une décuverte de culture</h5>
                                            <p class="m-b-0">Utilisez cette section pour ajouter des voyage des découvertes des cultures</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="home"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Ajouter un voyage</a>
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
                                                <h5>Enregistrer une aventure</h5>
                                                <div class="card-header-right">
                                                    <a href="next-adventures">
                                                        <button type="button" class="btn btn-primary"> Découvertes des cultures <i class="fas fa-arrow-right text-white"></i></button>
                                                    </a>
                                                </div>


                                                
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    
                                                <div class="col-lg-12">
                                                <div class="">
                                                    <form method="post" enctype="multipart/form-data" action="backend/add-discoveries">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Titre de la la découverte culturelle</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Entrer l'intitulé de la découverte" name="title" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Lieu</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Entrer le lieu de la découverte" name="place" required>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="inputEmail4">Image 1</label>
                                    <input type="file" class="form-control" id="inputEmail4" name="image_1" required>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="inputEmail4">Image 2</label>
                                    <input type="file" class="form-control" id="inputEmail4" name="image_2" required>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="inputEmail4">Image 3</label>
                                    <input type="file" class="form-control" id="inputEmail4" name="image_3" required>
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Date de debut</label>
                                    <input type="date" class="form-control" id="inputEmail4" name="start_date" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Date de fin</label>
                                    <input type="date" class="form-control" id="inputPassword4" name="end_date" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlTextarea1">Détails de l'aventure</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="details" placeholder="Entrer les détails..." required></textarea>
                                </div>

                                
                            </div>
                            
                           
                            
                            
                            <button type="submit" class="btn  btn-primary" name="save">Enregistrer</button>
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
