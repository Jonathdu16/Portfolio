<?php include 'models/connexion-inscription.php'; ?>

<h1> <?= insertMembres($_POST['firstname'], $_POST['lastname'], $_POST['pseudo'], $_POST['passwords'], $_POST['email']); ?> </h1>