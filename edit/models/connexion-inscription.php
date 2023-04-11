<?php
    include __DIR__.'/connection.php';

    function readMembres($pdo){
        $membres = $pdo -> query("SELECT * FROM `users`");
        $connexion = $membres -> fetchAll();
        return $connexion;
    }

    function insertMembres($firstname, $lastname, $pseudo, $passwords, $email){
        if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['pseudo']) && isset($_POST['passwords']) && isset($_POST['email'])){
            if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['pseudo']) && !empty($_POST['passwords']) && !empty($_POST['email'])){
                if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    include 'models/connection.php';
                    $passwords = password_hash($_POST['passwords'], PASSWORD_DEFAULT);
                    $mem = $pdo -> prepare('INSERT INTO `users` (firstname, lastname, pseudo, passwords, email) VALUES (:firstname, :lastname, :pseudo, :passwords, :email)');
                        $mem -> bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
                        $mem -> bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
                        $mem -> bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
                        $mem -> bindValue(':passwords', $passwords, PDO::PARAM_STR);
                        $mem -> bindValue(':email', $_POST['email'], PDO::PARAM_STR);
                    $mem -> execute();
                    echo "Felicitation, vous êtes inscrit sur le Portfolio de COURTOIS Jonathan !";
                }else{
                    echo "Votre adresse mail n'est pas bonne !";
                }
            }else{
                echo "Veuillez remplir tous les champs !";
            }
        }
    }

    function connectMembres($pdo, $pseudo, $passwords){
        if(isset($_POST['pseudo']) && isset($_POST['password'])){
            if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
                $membres = $pdo -> query("SELECT * FROM `users`");
                $connexion = $membres -> fetchAll();
                if(password_verify($_POST['password'], $connexion['passwords']) && $_POST['pseudo'] == $connexion['pseudo']){
                    echo "Felicitation, vous êtes connecter sur le Portfolio de COURTOIS Jonathan !";
                }else{
                    echo "Vos identifiants ne sont pas bons !";
                }
            }else{
                echo "Veuillez remplir tous les champs !";
            }
        }
    }
    
?>