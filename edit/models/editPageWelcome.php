<?php
    include 'connection.php';

    function insertContainWelcome($picture, $text){
        if(isset($_FILES['pictureWelcome']) && isset($_POST['texteWelcome'])){
            if(!empty($_FILES['pictureWelcome']) && !empty($_POST['texteWelcome'])){
                $jojo = 'jojo';
                $createFolder = mkdir('../views/images/'.$jojo);
                $data = [
                    'title' => htmlspecialchars($_POST['texteWelcome']),
                    'img_link' => '../views/images/'.$jojo.'/'.$_FILES['pictureWelcome']['name'],
                    'img_file' => $_FILES['pictureWelcome']['tmp_name']
                ];
                move_uploaded_file($data['img_file'], $data['img_link']);
                echo "Félicitations, vous avez édité votre page d'acceuil !";
                var_dump($_FILES['pictureWelcome']);
            }else{
                echo "Veuillez remplir tous les champs !";
            }
        }
    }
?>