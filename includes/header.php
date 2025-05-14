    <?php include('includes/connexion_bdd.php');
            $today = date("Y-m-d");
            $day_time= date("H : i");
    ?>
    
    <header class="main-header">
        <!-- header-top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="top-inner">
                    <p> Faculté des Sciences  FR | EN</p>
                    <ul class="social-links">
                        <li><span>Suivez nous:</span></li>
                        <li><a href="home"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="home"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="home"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- header-lower -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="home"><img src="assets/images/logo.png" width="80px" height="80px" alt=""></a></figure>
                    </div>
                    <div class="menu-area">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div> 
                        
                        <nav class="main-menu navbar-expand-md navbar-light clearfix">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="isdm-team">ISDM Team</a>
                                    </li> 
                                    <li class="dropdown"><a href="#">Organisation scientifique</a>
                                        <ul>
                                            <li ><a href="#">DMI ab</a></li>
                                            <li><a href="#">LIA</a></li>
                                            
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">Master</a>
                                        <ul>
                                            <li><a href="#">Faire son master à ISDM</a></li>
                                            <li><a href="#">Masters soutenus</a></li>
                                            <li><a href="#">Masters en cours</a></li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">Doctorat</a>
                                        <ul>
                                            <li><a href="#">Faire sa thèse à ISDM</a></li>
                                            <li><a href="#">Thèses soutenues</a></li>
                                            <li><a href="#">Thèses en cours</a></li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">Découvir</a>
                                        <ul>
                                            <li><a href="#">Publications</a></li>
                                            <li><a href="#">Projets</a></li>
                                            <li><a href="#">Partenaires</a></li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">Événements scientifiques </a>
                                        <ul>
                                            <li><a href="#">Séminaires scientifiques</a></li>
                                            <li><a href="#">Congrès et colloques</a></li>
                                        </ul>
                                    </li>  
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-right-content">
                        <div class="search-box-outer search-toggler mr_25">
                            <i class="icon-2"></i>
                        </div>
                        <?php /*
                        <div class="language-picker js-language-picker mr_25" data-trigger-class="btn btn--subtle">
                            <form action="#" class="language-picker__form">
                                <label for="language-picker-select">Select your language</label>
                                <select name="language-picker-select" id="language-picker-select">
                                    <option lang="de" value="deutsch"></option>
                                    <option lang="en" value="english" selected></option>
                                    <option lang="fr" value="francais"></option>
                                    <option lang="it" value="italiano"></option>
                                </select>
                            </form>
                        </div>
                        */ ?>
                        <div class="btn-box"><a href="home">Intranet</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="home"><img src="assets/images/logo.png" width="80px" height="80px" alt=""></a></figure>
                    </div>
                    <div class="menu-area">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <div class="menu-right-content">
                        <div class="search-box-outer search-toggler mr_25">
                            <i class="icon-2"></i>
                        </div>
                        <!-- <div class="language-picker js-language-picker mr_25" data-trigger-class="btn btn--subtle">
                            <form action="" class="language-picker__form">
                                <label for="language-picker-select">Select your language</label>
                                <select name="language-picker-select" id="language-picker-select">
                                    <option lang="de" value="deutsch"></option>
                                    <option lang="en" value="english" selected></option>
                                    <option lang="fr" value="francais"></option>
                                    <option lang="it" value="italiano"></option>
                                </select>
                            </form>
                        </div> -->
                        <div class="btn-box"><a href="home">Intranet</a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>