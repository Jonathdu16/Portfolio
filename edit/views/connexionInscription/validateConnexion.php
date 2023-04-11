<?php include 'models/connexion-inscription.php'; ?>
<h1><?= connectMembres($pdo, $_POST['pseudo'], $_POST['password']) ?></h1>