<?php
    require 'controller/controller.php';

    if(isset($_GET['page'])){
        $portfolio = $_GET['page'];
    }else{
        $portfolio = 'Accueil';
    }

    switch($portfolio){
        case 'Accueil' :
        include 'PageAccueil.php';
        break;
        case 'Navigation' :
        include 'controller/'.callController($portfolio).'php';
        break;    
    }
?>