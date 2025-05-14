<?php include('includes/usefull_file.php'); ?>
<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from wrraptheme.com/templates/oreo/hospital/html/light/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2025 15:06:14 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Isdm by Golden rock sarl ">

<title>:: Isdm:: Formulaire d'ajout d'un nouveau membre</title>
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/dropzone/dropzone.css">
<link rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-cyan">

<div class="overlay"></div>
<!-- Top Bar -->
<!-- Top Bar -->
<!-- Chat-launcher -->
    <?php include('includes/chatbot.php') ?>

<section class="content">
    <div class="block-header">
        
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2><strong>Formulaire d'ajout</strong> d'un<small> nouveau membre</small> </h2>
						<ul class="header-dropdown">
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
					</div>
                    <form action="processings/add_isdm_member_website.php" enctype="multipart/form-data" method="post">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" require class="form-control" name="first_name" placeholder="Prénom(s)">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" require class="form-control" name="last_name" placeholder="Nom(s)">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <select name="title_member" require class="form-control show-tick">
                                        <option value="">--</option>
                                        <option value="Pr.">Pr.</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Mme.">Mme.</option>
                                        <option value="Mr.">Mr.</option>
                                    </select> 
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="adresse" class="form-control" placeholder="Adresse">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" required name="email" class="form-control" placeholder="Adresse Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Contact">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="poste_occupe" placeholder="Poste occupé">
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Photo de profil</label>
                                        <input type="file" name="user_profil" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">Enregister</button>
                                    <a href="add-doctor" class="btn btn-default btn-round btn-simple">Annuler</a>
                                </div>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Bootstrap JS and jQuery v3.2.1 -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->  

<script src="assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->
<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>

<!-- Mirrored from wrraptheme.com/templates/oreo/hospital/html/light/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2025 15:06:15 GMT -->
</html>