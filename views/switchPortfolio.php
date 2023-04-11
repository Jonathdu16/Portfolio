<?php
    if(isset($_GET['page'])){
        $portfolio = $_GET['page'];
    }else{
        $portfolio = 'Accueil';
    }

    switch($portfolio){
        case 'Accueil' :
        include 'PageAccueil.php';
        break;
        case 'projets' :
        include 'projets.php';
        break;    
    }
?>