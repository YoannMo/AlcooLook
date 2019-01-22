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
    $pass = $_POST['pass'];
    //  Récupération de l'utilisateur et de son pass hashé
    if($_POST['pseudo'] !== "" && $_POST['pass'] !== ""){
      $reponse = $bdd->query("SELECT * FROM client WHERE pseudo LIKE '".$_POST['pseudo']."'");
        while($donnees=$reponse->fetch()){
          if($pass == $donnees['mdp']){
            session_start();
            header('Location: session.php');
            $_SESSION['prenom'] = $donnees['prenom'];
            $_SESSION['nom'] = $donnees['nom'];
            $_SESSION['page']="session.php";
          }
          else {
            header('Location: profilv2.php?erreur=1');
          }
        }
      }
    else {
        header('Location: profilv2.php?erreur=2');
    }

?>
</html>
