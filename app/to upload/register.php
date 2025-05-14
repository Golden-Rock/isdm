<?php include('includes/connexion_bdd.php') ?>
<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from wrraptheme.com/templates/oreo/hospital/html/light/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2025 15:06:25 GMT -->
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="ISDM by Golden rock sarl">

    <title>:: ISDM :: Inscription </title>
    <!-- Favicon-->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/authentication.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-cyan authentication sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">        
        <div class="navbar-translate n_logo">
            <a class="navbar-brand" href="javascript:void(0);" title="" target="_blank">ISDM</a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Twitter" href="javascript:void(0);" target="_blank">
                        <i class="zmdi zmdi-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Like us on Facebook" href="#" target="_blank">
                        <i class="zmdi zmdi-facebook"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Instagram" href="#" target="_blank">                        
                        <i class="zmdi zmdi-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link btn btn-white btn-round" href="login">Connexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url(assets/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="post" action="processings/register.php">
                    <div class="header">
                        <div class="logo-container">
                            <img src="assets/images/logo/logo.png" alt="">
                        </div>
                        <h5>S'inscrire</h5>
                        <span>En tant que nouveau membre</span>
                    </div>
                    <div class="content">                                                
                        <div class="input-group">
                            <!-- <label for="">Nom(s)</label> <br> -->
                            <input type="text" class="form-control" name="last_name" placeholder="Entrer votre Nom(s)">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>

                        <div class="input-group">
                            <!-- <label for="">Nom(s)</label> <br> -->
                            <input type="text" class="form-control" name="first_name" placeholder="Entrer votre Prenom(s)">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                       
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" placeholder="Entrer votre Email">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" name="phone" placeholder="Entrer votre contact ">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-phone"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Mot de passe" name="password" class="form-control" />
                            <span class="input-group-addon">
                                <!-- <i class="zmdi zmdi-lock"></i> -->
                            </span>
                        </div>                        
                    </div>
                    <div class="checkbox">
                            <input id="terms" type="checkbox">
                            <label for="terms">
                            J'ai lu et j'accepte les <a href="javascript:void(0);">conditions d'utilisation</a>
                            </label>
                        </div>
                    <div class="footer text-center">
                        <button  class="btn btn-warning btn-round btn-block  waves-effect waves-light">Inscription</button>
                        
                        <h5><a class="link" href="login">Vous avez déjà un abonnement ? <b style="color:rgb(35, 148, 228);">Connectez vous</b> </a></h5>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#" target="_blank">Contactez-nous</a></li>
                    <li><a href="#" target="_blank">À Propos de nous</a></li>
                    <li><a href="javascript:void(0);">FAQ</a></li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                <span>Tous droits reservé par <a href="https://goldenrock.io"  style="color :rgb(255, 174, 34)" target="_blank">GOLDEN ROCK SARL</a></span>
            </div>
        </div>
    </footer>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script>
   $(".navbar-toggler").on('click',function() {
    $("html").toggleClass("nav-open");
});
</script>
</body>

<!-- Mirrored from wrraptheme.com/templates/oreo/hospital/html/light/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2025 15:06:25 GMT -->
</html>