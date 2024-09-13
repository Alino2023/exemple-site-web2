<?php
function AfficherFormulaireContact()
{
    require_once 'vue/formulaireNousContacter.php';
}

function AjouterCommentaire()
{
        if (!isset($_POST['nom'])) {
        header('Location: index.php?ressource=/nousContacter');
        return;
    }
    echo $_POST['nom'];
}
