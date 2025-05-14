    <?php include('includes/connexion_bdd.php');
            include('functions/function_recup.php');
            $today = date("Y-m-d");
                
            $day_time= date("H : i");
    ?>
    <nav class="navbar p-l-5 p-r-5">
        <ul class="nav navbar-nav navbar-left">
            <li>
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="home"><img src="assets/images/logo/logo.png" width="50" alt="isdm"><span class="m-l-10"></span></a>
                </div>
            </li>
            <!-- <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
            <li class="d-none d-lg-inline-block"><a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
            <li class="d-none d-lg-inline-block"><a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a></li> -->
            <!-- <li><a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li> -->

           
            <?php include('notifications.php') ?>
            
          <?php include('includes/raccourcis.php') ?>
             
            <li class="d-none d-md-inline-block">
                <div class="input-group">                
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-search"></i>
                    </span>
                </div>
            </li>        
            <li class="float-right">
                <a href="deconnexion" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a>
                <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
            </li>
        </ul>
    </nav>