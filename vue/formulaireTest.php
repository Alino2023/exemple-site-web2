<?php $titreOnglet = 'Test'; ?>

<?php // Tout ce qui se trouve entre ob_start et ob_get_clean n'est pas affiché à l'écran, mais retourné par ob_get_clean. 
?>
<?php ob_start(); ?>

<h1 class="text-center">Test</h1>
<form class="w-50 mx-auto" method="post" action="index.php?ressource=/test&methode=POST">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="input-test" name="CeQueVousVoulez" placeholder="test">
        <label for="input-test">test</label>
    </div>

    <button type="submit" class="btn btn-primary"> Soumettre</button>
</form>

<?php // $contenu sera utilisé par vue/gabarit.php 
?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'vue/gabarit.php'; ?>