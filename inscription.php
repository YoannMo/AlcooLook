<?php session_start(); ?>
<html>


      <?php
          try
          {
            $bdd = new PDO('mysql:host=localhost;dbname=alcoolook;charset=utf8', 'root', '');
          }
          catch(Exception $e)
          {
                  die('Erreur : '.$e->getMessage());
          }

          $nom = $_POST['nom'];
          $prenom = $_POST['prenom'];
          $email = $_POST['email'];
          $mdp = $_POST['mdp'];
          $pseudo = $_POST['pseudo'];
          $date = $_POST['date'];
          // On ajoute une entrée dans la table jeux_video
          $bdd->exec("INSERT INTO client(nom, prenom, email, mdp, pseudo, dateNaissance) VALUES('$nom', '$prenom', '$email', '$mdp', '$pseudo', '$date')");

      ?>


</html>
