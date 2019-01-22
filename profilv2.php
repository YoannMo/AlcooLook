<!DOCTYPE html>
<html>
    <head>
        <title>Alcoolook</title>
<!--Ref CSS + Bootstrap -->
        <!--<link rel="stylesheet" href="profilv2.css">-->
        <link href="style.css" type="text/css" rel="stylesheet" />
        <link href="sites.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" media="all" />
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


    </head>
    <body>
      <div class="cadres">


      <header>



                 <div class="bandesup">


                    <div class="spacesup">


                          <div class="titre">
                              <h1><a href="test.php">AlcooLook</a></h1>
                          </div>

                      </div>
                 </div>
      </header>
    <div class="conso">



               <div class="colormenu">


                         <div class="menu">

                              <ul style="padding: 0">
                                <a href="profilv2.php"><li> Profil</li></a>
                                <a href="Site.php">  <li> Consommation</li></a>
                                <a href="travaux.html"><li> AlcooDex</li></a>
                                <a href="travaux.html"><li> Alcoopains</li></a>
                                <a href="travaux.html"><li> Parametres</li></a>
                                <a href="travaux.html" style=""><li style="border-bottom-right-radius: 50px;height:142px;"> Nous Contacter</li></a>
                              </ul>
                        </div>
              </div>

                 <!--Mon bloc en entier-->
                <div id="cadre" style="width:80%; margin:2%;;border:2px solid black;overflow:hidden;">

                      <div class="row">
                        <div class="offset-sm-3 col-sm-6 offset-sm-3" style="padding:2%;">
                          <center><h1>Alcoolook</h1></center>
                        </div>
                      </div>      <!--Titre-->

                      <div class="row" style="height:100%;">        <!-- Ligne qui contient les deux parties -->

                        <div id="gauche" style="width:60%; padding:3%;background-color: rgba(0,0,0,0.2); border-top: 2px solid black;">    <!--Partie gauche-->
                          <center><h2 class="bienv" style="margin-bottom:5%;font-family:'Biscuit';font-size:40px;color:white;">Se connecter</h2></center>
                          <center><button type="submit" onclick="slidegd()" class="btn btn-lg boutco" style="margin-top:6%;color:white;border:2px white solid;display:none;">Se connecter</button></center>
                          <form id="forco" method="POST" action="connexion.php" style="display:block;">
                            <div class="form-group">
                              <label for="exampleInputEmail1" style="color:white;">Pseudo : </label>
                              <input type="text" name="pseudo" class="form-control" aria-describedby="emailHelp" placeholder="alcoolook.attention@gmail.com">
                              <small class="form-text text-muted" style="color:white;">Nous ne communiquerons pas votre adresse mail.</small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1" style="color:white;">Mot de passe : </label>
                              <input type="password" name="pass" class="form-control" placeholder="Mot De Passe">
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input">
                              <label class="form-check-label" for="exampleCheck1" style="color:white;">Se souvenir de moi</label>
                            </div>
                            <center><button type="submit" class="btn btn-lg" style="margin-top:6%;color:white;border:2px white solid;">Se connecter</button></center>
                            <?php
                              if(isset($_GET['erreur'])){
                                $err = $_GET['erreur'];
                              if($err==1 || $err==2)
                                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                              }
                            ?>
                          </form>


                        </div>

                        <div id="droite" style="width:40%;padding:3%; background-color:rgba(0,0,0,0.5); border-top: 2px solid black;">          <!--Partie droite-->
                            <center><h2 class="insc" style="margin-bottom:20%;margin-top:30%;font-family:'Biscuit';font-size:40px;color:white;">Nouveau membre ?</h2></center>
                            <center><button type="button" onclick="slidedg()" class="btn btn-lg premierbout" style="color:white;border:2px white solid;display:block;">Inscription</button></center>


                            <form id="forins" method="POST" action="inscription.php" style="display:none;">    <!--Premier formulaire d'inscription -->

                                  <div class="form-group partie1" style="display:none;">
                                    <label for="usr" style="color:white;">Nom : </label>
                                    <input type="text" name="nom" class="form-control">
                                  </div>
                                  <div class="form-group partie1" style="display:none;">
                                    <label for="usr" style="color:white;">Pr&eacute;nom : </label>
                                    <input type="text" name="prenom" class="form-control">
                                  </div>
                                  <div class="form-group partie1" style="display:none;">
                                    <label for="exampleInputEmail1" style="color:white;">Adresse mail : </label>
                                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small  class="form-text text-muted" style="color:white;">Nous ne communiquerons pas votre adresse mail.</small>
                                  </div>
                                  <div class="form-group partie1" style="display:none;">
                                    <label for="exampleInputPassword1" style="color:white;">Mot de passe : </label>
                                    <input type="password" name="mdp" class="form-control" placeholder="Password">
                                  </div>
                                  <center><button type="button" onclick="appform2()" class="btn btn-lg deuxiemebout" style="color:white;border:2px white solid;display:none;">Suivant</button></center>

                                  <div class="form-group partie2" style="display:none;">
                                    <label for="usr" style="color:white;">Pseudo : </label>
                                    <input type="text" name="pseudo" class="form-control">
                                  </div>
                                  <div class="form-group partie2" style="margin-top:30px;display:none;">
                                    <label for="start" style="color:white;">Date de naissance : </label>
                                    <input type="date" name="date" value="2018-07-22" min="1900-01-01" max="2018-12-31">
                                  </div>
                                  <div class="form-check partie2" style="margin-top:30px;display:none;">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label" for="exampleCheck1" style="color:white;">J'accepte les conditions d'utilisation de Alcoolook</label>
                                  </div>
                                  <!--<center><div class="g-recaptcha partie2" data-sitekey="6LdFlogUAAAAAMKIUTHv-RMJjy7P8AEvB3XNrbhx" style="margin-top:30px;"></div></center>-->
                                  <center><button type="button" onclick="retour()" class="btn btn-lg partie2" style="color:white;border:2px white solid;margin-right:30px;display:none;">Retour</button></center>
                                  <center><button type="submit" class="btn btn-lg partie2" style="color:white;border:2px white solid;margin-left:30px;display:none;">Inscription</button></center>
                                  </div>


                            </form>


                        </div>

                    </div>



              </div>

        <script>



          var objgauche, width1, objdroite, width2, objcadre, widthtot;         //Variables

        function retour(){
          $('.partie1').css('display','block');
          $('.partie2').css('display','none');
          $('.premierbout').css('display','none');
          $('.deuxiemebout').css('display','block');
        }

        function slidedg(){       //Quand on clique sur Inscription, le formulaire d'inscription apparaît
          function finwidth(){
            clearInterval(slide);
            slide = 0;
          }
           objgauche = document.getElementById('gauche');
           width1 = objgauche.offsetWidth;
           objdroite = document.getElementById('droite');
           width2 = objdroite.offsetWidth;
           widthtot = width1 + width2;
           widthtot = 0.6*widthtot;
           var slide = setInterval(function(){
                objgauche.style.width = objgauche.offsetWidth + (-1) +"px";
                objdroite.style.width = objdroite.offsetWidth + 1 +"px";
                width2 = objdroite.offsetWidth;
                if(width2>widthtot){
                  finwidth();
                }
            },1);
          $('#forco').css('display','none');
          $('.premierbout').css('display','none');
          $('.deuxiemebout').css('display','block');
          $('#forins').css('display','block');
          $('.partie1').css('display','block');
          $('.insc').css('margin-top','3px');
          $('.insc').css('margin-bottom','5%');
          $('.bienv').css('margin-top','30%');
          $('.bienv').css('margin-bottom','20%');
          $('#droite').css('background-color','rgba(0,0,0,0.2)');
          $('#gauche').css('background-color','rgba(0,0,0,0.5)');
          $('.boutco').css('display','block');
        }


        function slidegd(){       //Quand on clique sur se connecter, les deux cadres email/mdp apparaissent
          function finwidth(){
            clearInterval(slide);
            slide = 0;
          }
           objgauche = document.getElementById('gauche');
           width1 = objgauche.offsetWidth;
           objdroite = document.getElementById('droite');
           width2 = objdroite.offsetWidth;
           widthtot = width1 + width2;
           widthtot = 0.6*widthtot;
           var slide = setInterval(function(){
                objgauche.style.width = objgauche.offsetWidth + 1 +"px";
                objdroite.style.width = objdroite.offsetWidth + (-1) +"px";
                width1 = objgauche.offsetWidth;
                if(width1>widthtot){
                  finwidth();
                }
            },1);
          $('#forco').css('display','block');
          $('#forins').css('display','none');
          $('.insc').css('margin-top','30%');
          $('.insc').css('margin-bottom','20%');
          $('.bienv').css('margin-top','auto');
          $('.bienv').css('margin-bottom','5%');
          $('.premierbout').css('display','block');
          $('.deuxiemebout').css('display','none');
          $('.partie2').css('display','none');
          $('.partie1').css('display','none');
          $('#droite').css('background-color','rgba(0,0,0,0.5)');
          $('#gauche').css('background-color','rgba(0,0,0,0.2)');
          $('.boutco').css('display','none');
        }

        function appform2(){
            $('.partie2').css('display','block');
            $('.partie1').css('display','none');
            $('.deuxiemebout').css('display','none');
        }

        </script>



    </div>
    </div>













    </body>
</html>
