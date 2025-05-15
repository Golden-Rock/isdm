<?php
$date=[
    [
        'titre'=>'00lllllllllllllllllllllllllllll',
        'contenu'=>'llllllll',
        'img4'=>'img/img1.jpg',
        'img1'=>'img/img2.jpg',
        'img2'=>'img/img3.jpg',
        'img3'=>'img/img4.jpg',
    ],
    [
        'titre'=>"111lllllllllllllllllllllllllllll",
        'contenu'=>'llllllll',

        'img1'=>'img/img5.jpg',
        'img2'=>'img/img2.jpg',
        'img3'=>'img/img3.jpg',
        'img4'=>'img/img4.jpg',
    ],
    [

    ],
    [

    ],

];
// var_dump($date); 
$int=rand(1,4);

$i=$_GET['id'];
// if($i):
    $titre =$date[$i]['titre'];
    $contenu=$date[$i]['contenu'];
   $img = $date[$i]['img'.$int];
   var_dump($img );
// else:
//     header('location: index');
// endif;
