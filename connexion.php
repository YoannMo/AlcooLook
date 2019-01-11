<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=alcoolook;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$mail = $_POST['mail'];
//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->exec("SELECT id, pass FROM membres WHERE email = '$mail'");
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
if ($_POST['pass'] === $resultat['pass']){
  echo "Connecté !";
}


?>
