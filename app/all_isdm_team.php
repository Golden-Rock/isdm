<?php include('includes/usefull_file.php'); ?>
<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from wrraptheme.com/templates/oreo/hospital/html/light/doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2025 15:06:08 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Isdm by Golden rock sarl">

<title>::Isdm team</title>
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-cyan">
<!-- Page Loader -->
<!-- <?php include('includes/loader.php') ?> -->
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


<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>ISDM Team
                <!-- <small>Welcome to Isdm</small> -->
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                <button class="btn btn-white btn-icon btn-round d-none d-md-inline-block float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="home"><i class="zmdi zmdi-home"></i>Isdm</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">ISDM Team</a></li>
                    <!-- <li class="breadcrumb-item active">Liste</li> -->
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs padding-0">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Permanent">Card</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Consultant">Liste</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content m-t-10">
                    <!-- liste sous forme de card -->
                    <div class="tab-pane active" id="Permanent">
                        <div class="row clearfix">
                        <?php $c1='blue'; $c2='khaki'; $c3='parpl'; $c4='pink'; $c5='seagreen'; ?>
                        <?php $i=random_int(1,5); ?>
                            
                            <?php 
                                $recup_admin = $bdd -> query("SELECT * FROM member WHERE is_isdm_team = '1' ORDER BY id_member DESC ");
                                if($recup_admin -> rowCount() ): 
                                    $i='0';
                                ?>
                                <?php while($data = $recup_admin -> fetch()): ?>
                                   
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="card xl-<?php if($title_member=='Dr'): 
                                                                    echo $c1;
                                                                else: 
                                                                   if($title_member=='Pr'):
                                                                    echo $c2;
                                                                   else: 
                                                                     if($title_member=='Mr'): 
                                                                        echo $c3;
                                                                     else: 
                                                                        echo $c4;
                                                                     endif;
                                                                   endif;
                                                                endif;
                                       ?> member-card doctor">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="assets/images/users/<?php echo $data['user_profil']; ?>" class="img-fluid" alt="profile-image">                               
                                            </div>
                                            <div class="detail"> 
                                                <h4 class="m-b-0"><?php echo $data['title_member']; ?> <?php echo $data['first_name']; ?> <?php echo $data['last_name']; ?></h4>
                                                <p class="text-muted"><?php echo $data['poste_occupe']; ?></p>
                                                <ul class="social-links list-inline m-t-20">
                                                    <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                                    <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                                    <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted"><?php echo $data['adresse']; ?></p>                           
                                                <a href="#"  class="btn btn-default btn-round btn-simple">Voir le profil</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div> 
                    </div>

                    <!-- liste sous forme de liste avec possibilité de recherche -->
                    <div class="tab-pane" id="Consultant">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>profil</th>
                                            <th>Nom(s)</th>
                                            <th>Prénom(s)</th>
                                            <!-- <th>Age</th> -->
                                            <!-- <th>Sexe</th> -->
                                            <!-- <th>Pays</th>                                             -->
                                            <th>Contact</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $recup_admin = $bdd -> query("SELECT * FROM member WHERE is_isdm_team = '1' ORDER BY id_member DESC ");
                                        if($recup_admin -> rowCount() ): 
                                            $i='0';
                                        ?>
                                        <?php while($data = $recup_admin -> fetch()): ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><span class="list-icon"><img class="patients-img" src="assets/images/users/<?php echo $data['user_profil'] ?>" alt="" height="40" width="40" class="rounded-circle"></span></td>
                                            
                                            <td><?php echo $data['last_name'] ?></td>
                                            <td><?php echo $data['first_name'] ?> </td>
                                            <!-- <td>102</td> -->
                                           
                                            <td><?php echo $data['phone'] ?></td>
                                            <td>...</td>
                                        </tr>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Bootstrap JS and jQuery v3.2.1 -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<!-- Jquery Core Js --> 
<!-- Jquery DataTable Plugin Js --> 
<script src="assets/bundles/datatablescripts.bundle.js"></script>

<script src="assets/js/pages/tables/jquery-datatable.js"></script>
</body>

<!-- Mirrored from wrraptheme.com/templates/oreo/hospital/html/light/doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2025 15:06:14 GMT -->
</html>