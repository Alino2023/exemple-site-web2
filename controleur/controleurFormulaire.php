<?php

function afficherPageFormulaire()
{
  require_once 'vue/formulaire.php';
}

function ajouterElementFormulaire()
{
  // Modifiez la validation côté client avec les DevTools (F12) du navigateur et
  // envoyez de mauvaises données pour voir l'utilité de cette validation.
  if (
    !isset($_POST["nomDuChamp"]) ||
    strlen($_POST["nomDuChamp"]) < 3 || strlen($_POST["nomDuChamp"]) > 255
  ) {
    header("Location: index.php?ressource=/formulaire&erreur=Veuillez remplir le formulaire.");
  }

  require_once 'vue/affichageDonneesFormulaire.php';
}
