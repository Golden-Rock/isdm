<?php 
     include('includes/connexion_bdd.php');
     if(!isset($_GET['mat'])) :
        header ("location: home");
     endif;

     $mat_receive = $_GET['mat'];
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from azim.hostlin.com/Labout/team-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 15:02:28 GMT -->
<head>
    <?php include('includes/base.php') ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php 
        $id= $_GET['mat'];
        
    
        $recup = $bdd -> prepare("SELECT * FROM member WHERE mat_member=?"); 
                
                $recup -> execute(array($id));
                $data_=$recup -> fetchAll();
    
            foreach ($data_ as $data) { }
               ?>
<title>ISDM TEAM - <?php echo $data['title_member'] ?> <?php echo $data['first_name'] ?> <?php echo $data['last_name'] ?></title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
<link href="assets/css/switcher-style.css" rel="stylesheet">
<link href="assets/css/odometer.css" rel="stylesheet">
<link href="assets/css/rtl.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/module-css/page-title.css" rel="stylesheet">
<link href="assets/css/module-css/about.css" rel="stylesheet">
<link href="assets/css/module-css/team-details.css" rel="stylesheet">
<link href="assets/css/module-css/cta.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper ltr">


        <!-- preloader -->
       <?php include('includes/preloader.php') ?>
        <!-- preloader end -->


        <!-- switcher menu -->
        <div class="switcher">
            <div class="switch_btn">
                <button><i class="fas fa-palette"></i></button>
            </div>
            <div class="switch_menu">
                <!-- color changer -->
                <div class="switcher_container">
                    <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-color" class="theme-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
        <!-- end switcher menu -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="http://azim.hostlin.com/Labout/index.html">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


         <!-- main header -->
       <?php include('includes/header.php') ?>
        <!-- main-header end -->


        <!-- Mobile Menu  -->
       <?php include('includes/mobile-menu.php') ?>
        <!-- End Mobile Menu -->

        <!-- main-content -->
        <main class="main-content alternat-2">
            <!-- page-title -->
            <section class="page-title centred">
                <div class="bg-layer" style="background-image: url(assets/images/background/page-title-4.jpg);"></div>
                <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-53.png);"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Team Details</h2>
                        <ul class="bread-crumb">
                            <li><a href="index.html">Home</a></li>
                            <li>-</li>
                            <li>Team Details</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- page-title end -->


            <!-- team-details -->
            <section class="team-details pt_120 pb_180">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image_block_two">
                                <div class="image-inner pr_110">
                                    <figure class="image"><img src="app/assets/images/users/<?php echo $data['user_profil'] ?>" alt=""></figure>
                                    <div class="experience-box bounce-slide">
                                        <div class="inner p_relative pt_19 pb_19">
                                            <h2>05 <span>Years</span></h2>
                                            <h3>Of Experience in Lab Research</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h2><?php echo $data['title_member'] ?> <?php echo $data['first_name'] ?> <?php echo $data['last_name'] ?></h2>
                                <span class="designation"><?php echo $data['poste_occupe'] ?> </span>
                                <p><?php echo $data['courte_bio'] ?></p>
                                
                                <?php /*
                                <h3>Plus d'informations</h3>
                                <p>We have been partnering with the laboratory service for several projects, and their commitment to quality assurance is unparalleled. The detailed document action and stringent quality control measures</p>
                                <div class="inner-box pt_25">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <span>Location</span>
                                                <h4>London, United Kingdom</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <span>Qualification</span>
                                                <h4>PHD in Bio Chemical</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <span>Email</span>
                                                <h4><a href="mailto:Brendan@example.com">Brendan@example.com</a></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <span>Awards</span>
                                                <h4>Best Scientist Physics</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                */ ?>
                                <div class="social-box">
                                    <p>Social</p>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- team-details end -->


             <!-- cta-style-two -->
             <?php include('includes/cta.php') ?>
            <!-- cta-style-two end -->
        </main>
        <!-- main-content end -->


       <!-- main-footer -->
       <?php include('includes/footer.php') ?>
        <!-- main-footer end -->




        <!--Scroll to top-->
        <div class="scroll-to-top">
            <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jQuery.style.switcher.min.js"></script>
    <script src="assets/js/language.js"></script>
    <script src="assets/js/scrolltop.min.js"></script>
    <script src="assets/js/gsap.js"></script>
    <script src="assets/js/ScrollTrigger.js"></script>
    <script src="assets/js/SplitText.js"></script>
    <script src="assets/js/odometer.js"></script>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/particles-config.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.hostlin.com/Labout/team-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 15:02:31 GMT -->
</html>
