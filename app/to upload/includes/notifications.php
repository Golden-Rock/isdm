   
    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
        <i class="zmdi zmdi-notifications"></i>
        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
        </a>
        <ul class="dropdown-menu pullDown">
            <li class="header">Notifications </li>
            <li class="header"> <i>Nouveau (<?php  $recup = $bdd -> query("SELECT * FROM notifications WHERE date_notif = '$today'  ");
                                                        echo $recup -> rowCount(); ?>)</i> </li>
            <li class="body">
                <ul class="menu list-unstyled">
                <?php 
                    $recup_admin = $bdd -> query("SELECT * FROM notifications WHERE date_notif = '$today' ORDER BY id_notif DESC ");
                    if($recup_admin -> rowCount() ): 
                        $i='0';
                    ?>
                    <?php while($data = $recup_admin -> fetch()): ?>
                    <li>
                        <a href="javascript:void(0);">
                            <div class="media"> 
                                <img class="media-object" width="50px" height="50px" src="assets/images/users/<?php echo recup_user_profil($data['mat_parent'],$bdd); ?>" alt="">
                                <div class="media-body">
                                    <span class="name"><?php echo $data['objet']; ?></span> 
                                    <span class="message"><?php echo $data['corps_notif'] ?></span> 
                                    <span class="name"><span class="time"><i class="zmdi zmdi-time"></i> <?php echo $data['date_notif'] ?></span></span>                                       
                                </div>
                            </div>
                        </a>
                    </li>      
                    <?php endwhile; ?>
                <?php endif; ?>  

                <li class="header">Ancienes </li>

                <?php 
                    $recup_admin = $bdd -> query("SELECT * FROM notifications WHERE date_notif != '$today' ORDER BY id_notif DESC ");
                    if($recup_admin -> rowCount() ): 
                        $i='0';
                    ?>
                    <?php while($data = $recup_admin -> fetch()): ?>
                    <li>
                        <a href="javascript:void(0);">
                            <div class="media"> 
                                <img class="media-object" width="50px" height="50px" src="assets/images/users/<?php echo recup_user_profil($data['mat_parent'],$bdd); ?>" alt="">
                                <div class="media-body">
                                    <span class="name"><?php echo $data['objet']; ?></span> 
                                    <span class="message"><?php echo $data['corps_notif'] ?></span> 
                                    <span class="name"><span class="time"><i class="zmdi zmdi-time"></i> <?php echo $data['date_notif'] ?></span></span>                                       
                                </div>
                            </div>
                        </a>
                    </li>   
                    <?php endwhile; ?>
                <?php endif; ?>  
                </ul>
            </li>
            
            <li class="footer"> <a href="javascript:void(0);">Voir plus</a> </li>
        </ul>
    </li>
   