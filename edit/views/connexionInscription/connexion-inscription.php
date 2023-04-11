<div class="connexion">
    <?php 
        include './models/connexion-inscription.php'; 
        if(readMembres($pdo) == false){
    ?>

        <form class="connexion-form" action="index.php?page=validateInscription" method="POST">
            <fieldset>
                <legend>Edition de la page d'accueil</legend>
                <div class="connexion-form-space">
                    <div class="connexion-form-space-champ">
                        <label for="firstname">Prenom</label>
                        <input type="text" id="firstname" name="firstname" value="" require>
                    </div>
                    <div class="connexion-form-space-champ">
                        <label for="lastname">Nom</label>
                        <input type="text" name="lastname" id="lastname" value="" require>
                    </div>
                    <div class="connexion-form-space-champ">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" name="pseudo" id="pseudo" value="" require>
                    </div>
                    <div class="connexion-form-space-champ">
                        <label for="passwords">Mot de passe</label>
                        <input type="password" name="passwords" id="passwords" value="" require>
                    </div>
                    <div class="connexion-form-space-champ">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" value="" require>
                    </div>
                </div>
                <div class="connexion-form-space__btn">
                    <input type="submit" value="Valider l'inscription">
                    <input type="reset" value="Reinitialisez">
                </div>
            </fieldset>
        </form>
        <?php }else{ ?>
            <form class="connexion-form" action="index.php?page=validateConnexion" method="POST">
                <fieldset>
                    <legend>Connexion au portfolio</legend>
                    <div class="connexion-form-space">
                        <div class="connexion-form-space-champ">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" id="pseudo" name="pseudo" value="" require>
                        </div>
                        <div class="connexion-form-space-champ">
                            <label for="password">Mot de Passe</label>
                            <input type="password" name="password" id="password" value="" require>
                        </div>
                    </div>
                    <div class="connexion-form-space__btn">
                        <input type="submit" value="Connexion">
                        <input type="reset" value="Reinitialisez">
                    </div>
                </fieldset>
            </form>
        <?php } ?>
</div>