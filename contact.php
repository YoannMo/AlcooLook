<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
      <meta charset="utf-8" />
                          <!-- Pour un commentaire-->
        <link rel="stylesheet" href="sites.css">

        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" media="all"/>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <style>

      </style>
</head>


<body>
  <div class="cadres">


  <header>



             <div class="bandesup">





                      <div class="titre">
                          <h1><a href="test.php">AlcooLook</a></h1>
                      </div>

                      <div class="connect">
                        <h1><a href="profilv2.php">Me connecter</a></h1>

                      </div>

             </div>
  </header>

  <div class="conso">





           <div class="colormenu">


                     <div class="menu">

                          <ul style="padding: 0;">
                              <a href="profilv2.php"><li> Profil</li></a>
                              <a href="Site.php">  <li> Consommation</li></a>
                              <a href="travaux.html"><li> AlcooDex</li></a>
                              <a href="travaux.html"><li> Alcoopains</li></a>
                              <a href="travaux.html"><li> Parametres</li></a>
                              <a href="contact.html" style=""><li style="border-bottom-right-radius: 50px;height:141px;"> Nous Contacter</li></a>
                          </ul>
                    </div>
          </div>

            <div id="cadre" style="padding:2%;color:white;width:80%; margin:2%;;border:2px solid black;overflow:hidden;  background-color: #5D2839; border-radius : 10px; overflow:auto;">
              <center><h1 style="font-size:60px;font-family:'Biscuit';">Nous Contacter</h1></Center>
                  <center><form method="post">
                      <label style="font-size:40px;">Email : </label>
                      <input type="email" name="email" required><br>
                      <label style="font-size:40px;">Message : </label>
                      <textarea name="message" required></textarea><br>
                      <input type="submit">
                  </form></center>
                  <?php
                  if (isset($_POST['message'])) {
                      $position_arobase = strpos($_POST['email'], '@');
                      if($position_arobase === false)
                          echo '<p>Votre email doit comporter un arobase.</p>';
                      else {
                          $retour=mail('alcoolook.contact@gmail.com','Envoi depuis page Contact', $_POST['message'], 'From : ' . $_POST['email']);
                          if($retour)
                              echo '<p>Votre message a été envoyé.</p>';
                          else
                              echo '<p>Erreur.</p>';
                      }
                  }
                  ?>
            </div>


    </div>
</div>

</body>
</html>
