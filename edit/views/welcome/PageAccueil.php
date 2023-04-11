<div class="welcome">
    <?php 
        session_start();
        include './models/welcome.php'; 
    ?>
    <form class="welcome-form" method="POST" action="index.php?page=editPageWelcome" enctype="multipart/form-data">
        <fieldset>
            <legend>Edition de la page d'accueil</legend>
            <div class="welcome-form-space">
                <div class="welcome-form-space-champ welcome-form-space-champ__texte-welcome">
                    <label for="texteWelcome">Edition du message d'accueil</label>
                    <textarea name="texteWelcome" id="text-welcome" cols="30" rows="10"><?= getWelcomeTexte(isset($_GET['page'])); ?></textarea>
                </div>
                <div class="welcome-form-space__line"></div>
                <div class="welcome-form-space-champ">
                    <label for="pictureWelcome">Photo de la page d'accueil</label>
                    <div class="welcome-form-space-champ__file"><input type="file" accept="images/png images/jpeg" name="pictureWelcome" id="picture-welcome" /></div>
                </div>
                <div class="welcome-form-space-champ">
                    <input type="text" name="currentSessionName" id="currentSessionName" value="PictureWelcome"/>
                </div>
            </div>
            <div class="welcome-form-space__btn">
                <?php if(getWelcomeTexte(isset($_GET['page']))) :?>
                    <input type="submit" value="Mettre à jour">
                    <input type="reset" value="Reinitialisez">
                <?php elseif(getWelcomeTexte(isset($_GET['page'])) == false): ?>
                    <input type="submit" value="Valider l'ajout">
                    <input type="reset" value="Reinitialisez">
                <?php endif; ?>
            </div>
        </fieldset>
    </form>
</div>