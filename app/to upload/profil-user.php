<?php include('includes/usefull_file.php'); ?>
<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from wrraptheme.com/templates/oreo/hospital/html/light/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2025 15:05:52 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="ISDM By Golden Rock Sarl">

<title>:: ISDM :: Profile</title>
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/dropzone/dropzone.css">
<link rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/timeline.css">
<link rel="stylesheet" href="assets/css/color_skins.css"></head>
<body class="theme-cyan">
<!-- Page Loader -->
<!-- <div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="https://wrraptheme.com/templates/oreo/hospital/html/assets/images/logo.svg" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>        
    </div>
</div> -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Top Bar -->
<?php include('includes/header.php') ?>
<!-- Left Sidebar -->
<?php include('includes/sidebar.php') ?>
<!-- Right Sidebar -->
 <?php include('includes/rightbar.php') ?>
<!-- Chat-launcher -->
<?php include('includes/chatbot.php') ?>
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-sm-12">
                <h2>Profil
                <!-- <small>Bienvenue chez Yemak Wellness</small> -->
                </h2>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round d-none d-md-inline-block float-right m-l-10" type="button">
                    <i class="zmdi zmdi-edit"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="home"><i class="zmdi zmdi-home"></i>Isdm</a></li>
                    <li class="breadcrumb-item active">Profil</li>
                </ul>                
            </div>
        </div>
    </div>    
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card profile-header">
                    <div class="body text-center">
                        <div class="profile-image"> <img src="assets/images/users/<?php echo $_SESSION['user_profil']; ?>" alt=""> </div>
                        <div>
                            <h4 class="m-b-0"><strong><?php echo $_SESSION['first_name']; ?> </strong> <?php echo $_SESSION['last_name']; ?></h4>
                            <span class="job_post">
                            <p><?php echo $_SESSION['adresse']; ?></p>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-round">Suivre</button>
                            <button class="btn btn-primary btn-round btn-simple">Message</button>
                        </div>
                        <p class="social-icon m-t-5 m-b-0">
                            <a title="Twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="Facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                            <a title="Google-plus" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="Behance" href="javascript:void(0);"><i class="zmdi zmdi-behance"></i></a>
                            <a title="Instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram "></i></a>
                        </p>
                    </div>                    
                </div>    
                <?php /*                           
                <div class="card">
                    <div class="body">
                        <div class="workingtime">
                            <h6>Working Time</h6>
                            <small class="text-muted">Tuesday</small>
                            <p>06:00 AM - 07:00 AM</p>
                            <hr>
                            <small class="text-muted">Thursday</small>
                            <p>06:00 AM - 07:00 AM</p>
                            <hr>
                        </div>
                        <div class="reviews">
                            <h6>Reviews</h6>
                            <small class="text-muted">Staff</small>
                            <p>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                            </p>
                            <hr>
                            <small class="text-muted">Punctuality</small>
                            <p>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                            </p>
                            <hr>
                            <small class="text-muted">Helpfulness</small>
                            <p>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                            </p>
                            <hr>
                            <small class="text-muted">Knowledge</small>
                            <p>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                            </p>
                            <hr>
                            <small class="text-muted">Cost</small>
                            <p>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Followers">Followers</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#friends">Friends</a></li>                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane body active" id="Followers">
                            <ul class="right_chat list-unstyled">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Chris Fox</span>
                                                <span class="message">Designer, Blogger</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Joge Lucky</span>
                                                <span class="message">Java Developer</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Isabella</span>
                                                <span class="message">CEO, Thememakker</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Folisise Chosielie</span>
                                                <span class="message">Art director, Movie Cut</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Alexander</span>
                                                <span class="message">Writter, Mag Editor</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>                        
                            </ul>
                        </div>
                        <div class="tab-pane body" id="friends">
                            <ul class="new_friend_list list-unstyled row">
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="#">
                                        <img src="assets/images/sm/avatar1.jpg" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Jackson</h6>
                                        <small class="join_date">Today</small>
                                    </a>
                                </li>
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="#">
                                        <img src="assets/images/sm/avatar2.jpg" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Aubrey</h6>
                                        <small class="join_date">Yesterday</small>
                                    </a>
                                </li>
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="#">
                                        <img src="assets/images/sm/avatar3.jpg" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Oliver</h6>
                                        <small class="join_date">08 Nov</small>
                                    </a>
                                </li>
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="#">
                                        <img src="assets/images/sm/avatar4.jpg" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Isabella</h6>
                                        <small class="join_date">12 Dec</small>
                                    </a>
                                </li>
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="#">
                                        <img src="assets/images/sm/avatar1.jpg" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Jacob</h6>
                                        <small class="join_date">12 Dec</small>
                                    </a>
                                </li>
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="#">
                                        <img src="assets/images/sm/avatar5.jpg" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Matthew</h6>
                                        <small class="join_date">17 Dec</small>
                                    </a>
                                </li>                            
                            </ul>
                        </div>                        
                    </div>
                </div>  
                */ ?>               
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <!-- <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#about">About</a></li> -->
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Account">Mon Compte</a></li>                        
                    </ul>
                    <div class="tab-content">
                        <?php /*
                        <div class="tab-pane body " id="about">
                            <p>Dr. Charlotte Deo Leon is a neurosurgeon in East Patchogue,Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. He received his medical degree from Harvard Medical School and has been in practice for 21 years. He is one of 5 doctors at Brookhaven Memorial Hospital Medical Center and one of 9 at Southside Hospital who specialize in Neurological Surgery.</p>
                            <h6>Qualifications</h6>
                            <hr>
                            <ul class="list-unstyled">
                                <li>
                                    <p><strong>Hospital Affiliations:</strong> UCSF MEDICAL CENTER</p>
                                </li>
                                <li>
                                    <p><strong>Medical School:</strong> Palmer College of Chiropractic 1978</p>
                                </li>
                                <li>
                                    <p><strong>Residency:</strong> New york</p>
                                </li>
                                <li>
                                    <p><strong>Certifications:</strong> Certified Chiropractic Sports Physician 1982</p>
                                </li>
                                <li>
                                    <p><strong>Gender:</strong> Female</p>
                                </li>
                                <li>
                                    <p><strong>Experience / Tranining:</strong> Past-President, Int. Fed. 1991</p>
                                </li>
                                <li>
                                    <p><strong>Internship:</strong> Palmer Clinic</p>
                                </li>
                            </ul>
                            <h6>Specialties</h6>
                            <hr>
                            <ul class="list-unstyled specialties">
                                <li>Breast Surgery</li>
                                <li>Colorectal Surgery</li>
                                <li>Endocrinology</li>
                                <li>Cardiology</li>
                                <li>Cosmetic Dermatology</li>
                                <li>Mole checks and monitoring</li>
                                <li>Clinical Neurophysiology</li>
                            </ul>
                        </div>
                        */ ?>
                        <div class="tab-pane body active" id="Account">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  value="<?php echo $_SESSION['password']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Nouveau mot de passe">
                                </div>
                                <button type="submit" class="btn btn-warning btn-round">Enregister les Modifications</button>
                            </form>

                            <hr> <br>
                            <form action="processings/update_basic_info.php" method="post" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="first_name" value="<?php echo $_SESSION['first_name']; ?>" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="last_name" value="<?php echo $_SESSION['last_name']; ?>" >
                                        </div>
                                    </div> 
                                    
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <sub>Photo de profil</sub>
                                            <input type="file" class="form-control" name="user_profil" placeholder="photo">
                                        </div>
                                    </div> 
                                    
                                    
                                    <div class="col-lg-6 col-md-12">
                                        <div class="input-group"> </span>
                                        <input type="text" class="form-control" name="phone" placeholder="contact" value="<?php echo $_SESSION['phone']; ?>" >
                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ville" value="<?php echo $_SESSION['adresse']; ?>" placeholder="Adresse">
                                        </div>
                                    </div>
                                        <input type="hidden" name="mat_member" value="<?php echo $_SESSION['mat_member'] ?>" >
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success btn-round">Enregister</button>
                                    </div>
                                </div>
                            </form>
                        </div>                        
                    </div>
                </div>

                         
            </div>
        </div>        
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/pages/charts/jquery-knob.js"></script>
</body>

<!-- Mirrored from wrraptheme.com/templates/oreo/hospital/html/light/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2025 15:06:03 GMT -->
</html>