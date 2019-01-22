<?php session_start();
if (!isset($_SESSION['page']))
{
  $_SESSION['page']="profilv2.php" ;
}
?>
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
                        <?php if ($_SESSION['page']=="profilv2.php")
                        {
                          echo "<h1><a href='profilv2.php'>Me connecter</a></h1>";
                        }
                        else if ($_SESSION['page']=="session.php")
                        {
                          echo "<h1><a href='deco.php'>Me deconnecter</a></h1>";
                        }
                        ?>
                      </div>

             </div>
  </header>

    <div class="conso">





           <div class="colormenu">


                     <div class="menu">

                          <ul style="padding: 0;height:100%;">
                              <?php  echo"<a href='".$_SESSION['page']."'><li> Profil </li></a>"; ?>
                              <a href="Site.php">  <li> Consommation</li></a>
                              <a href="Travaux.html"><li> AlcooDex</li></a>
                              <a href="Travaux.html"><li> Alcoopains</li></a>
                              <a href="Travaux.html"><li> Parametres</li></a>
                              <a href="contact.php" style=""><li style="border-bottom-right-radius: 50px;height:141px;"> Nous Contacter</li></a>
                          </ul>
                    </div>
           </div>

           <div style="width:100%;">
             <div style="margin-left:40%;margin-top:10%;">
              <center><h1 style="font-family:'summit';color:white;font-size:100px;margin-top:10%;">Alcoolook</h1></center>
              <center><button class="btn btn-lg" style="background-color:#5D2839;color:white;margin-right:2%;">Connaître mon taux d'alcool</button></center>
          </div>

    </div>
</div>

</body>
</html>
