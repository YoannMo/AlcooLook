<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
      <meta charset="utf-8" />
                          <!-- Pour un commentaire-->
        <link rel="stylesheet" href="Site.css">
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
                          <h1><a href="Site.php">AlcooLook</a></h1>
                      </div>

                      <div class="connect">
                        <h1><a href="deco.php">Me déconnecter</a></h1>

                      </div>

             </div>
  </header>


        <div class="conso">


           <div class="colormenu">


                     <div class="menu">

                          <ul style="padding: 0;">
                              <a href="profilv2.php"><li> Profil</li></a>
                              <a href="Site.html">  <li> Consommation</li></a>
                              <a href="AlcooDex.html"><li> AlcooDex</li></a>
                              <a href="Alcoopains.html"><li> Alcoopains</li></a>
                              <a href="settings.html"><li> Parametres</li></a>
                              <a href="contact.html" style=""><li style="border-bottom-right-radius: 50px;height:141px;"> Nous Contacter</li></a>
                          </ul>
                    </div>
           </div>

               <div id="cadre" style="width:auto; margin-left:auto;margin-right:auto;margin-top:2%;margin-bottom: 2%;padding:2%;border:2px solid black;display:flex;flex-direction: column;overflow:hidden;">
                 <div>
                   <center><img src="imgtest.jpg" style ="border-radius:50%;height:100px;"></center>
                 </div>
                 <div>
                   <center><h1><?php echo $_SESSION['prenom']." ".$_SESSION['nom'] ?></h1></center>
                 </div>
                 <div>
                     <center><h2>Mes dernières consommations :</h2></center>
                 </div>
                 <div>
                     <center><h2>Mes derniers succès :</h2></center>
                 </div>
                 <div>
                   <center>  <p>BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla</p></center>
                 </div>
               </div>

        </div>

</div>

</body>
</html>
