<?php $titreOnglet = 'Nous Contacter'; ?>

<?php // Tout ce qui se trouve entre ob_start et ob_get_clean n'est pas affiché à l'écran, mais retourné par ob_get_clean. 
?>
<?php ob_start(); ?>

<h1 class="text-center">Nous Contacter</h1>

<form class="mx-auto w-50" action="index.php?ressource=/nousContacter&methode=POST" method="post">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
        <label for="nom">Nom</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="courriel" name="courriel" placeholder="courriel">
        <label for="courriel">Adresse courriel</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Entrez un commentaire" id="commentaire" name="commentaire"></textarea>
        <label for="commentaire">Commentaire</label>
    </div>
    <button type="submit" class="btn btn-light border border-primary"> Soumettre</button>
</form>

<?php // $contenu sera utilisé par vue/gabarit.php 
?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'vue/gabarit.php'; ?>