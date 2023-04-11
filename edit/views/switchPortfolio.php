<?php
    if(isset($_GET['page'])){
        $portfolio = $_GET['page'];
    }else{
        $portfolio = 'Accueil';
    }

    switch($portfolio){
        case 'Accueil' :
        include 'connexionInscription/connexion-inscription.php';
        break;
        case 'validateInscription' :
        include 'connexionInscription/validateInscription.php';
        break;
        case 'validateConnexion' :
        include 'connexionInscription/validateConnexion.php';
        break;
        case 'Welcome' :
        include 'welcome/PageAccueil.php';
        break;
        case 'projets' :
        include 'projets.php';
        break;  
        case 'editPageWelcome' :
        include 'welcome/editPageWelcome.php';
        break;  
    }
?>