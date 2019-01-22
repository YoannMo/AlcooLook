<?php
//
// Notre fonction PHP pour afficher les messages :
//
function afficher()
{
        $reponse = new xajaxResponse();// Création d'une instance de xajaxResponse pour traiter les réponses serveur.
        $chat = '';// Initialisation de la variable $chat.
        $fichier_texte = fopen('./chat.txt', 'r');// On ouvre notre fichier texte en lecture seule.
        $chat = fread($fichier_texte, filesize('./chat.txt'));// On lit notre fichier et on stocke son contenu dans la variable $chat
        fclose($fichier_texte);//On ferme notre fichier texte.
        $reponse->assign('block', 'innerHTML', $chat);// Enfin, on remplace le contenu du div 'block' par le contenu de $chat
        return $reponse;
}

//
// Notre fonction PHP envoyer pour envoyer un message :
//
function envoyer($posteur, $message)
{
        $reponse = new xajaxResponse();//Création d'une instance de xajaxResponse pour traiter les réponses serveur.
        $fichier_texte = fopen('./chat.txt', 'a');//On ouvre notre fichier texte en écriture seule.
        fwrite($fichier_texte, addslashes('<strong>' . htmlentities($posteur) . ':</strong>' . htmlentities($message) . '<br />'));// On stocke le message dans notre fichier.
        fclose($fichier_texte);// On ferme notre fichier texte.
        $reponse->clear('message', 'value');// On vide le champ contenant le message de l'utilisateur.
        $reponse->call('xajax_afficher');// On appelle la fonction afficher pour afficher les messages pour que l'utilisateur voie son message à l'écran.
        return $reponse;
}

//
// Ouverture de la librairie xajax, instanciation d'un objet de la classe xajax, puis déclaration de nos fonctions PHP.
//
require_once('./xajax_core/xajax.inc.php');
$xajax = new xajax(); //On initialise l'objet xajax.
$xajax->register(XAJAX_FUNCTION, 'afficher');// On enregistre nos fonctions.
$xajax->register(XAJAX_FUNCTION, 'envoyer');
$xajax->processRequest();// Fonction qui va se charger de générer le Javascript, à partir des données que l'on a fournies à xAjax APRÈS AVOIR DÉCLARÉ NOS FONCTIONS.
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
        <head>
                <title>Chat xAjax</title>
                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
                <?php $xajax->printJavascript(); /* Affiche le Javascript */?>
                <script type="text/javascript">
                function refresh()// Code javascript qui va appeler la fonction afficher toutes les 5 secondes.
                {
                        xajax_afficher();
                        setTimeout(refresh, 5000);
                }
                </script>
        </head>
        <body>
                <div id="block"></div>
                <form action="">
                        <fieldset>
                         <legend>Entrer ici votre message :</legend>
                         <div>
                          <label>Nom : <input type="text" size="15" id="posteur" /></label><br />
                          <label>Message : <input type="text" size="50" id="message" /></label><br />
                          <input type="submit" value="Envoyer" onclick="xajax_envoyer(document.getElementById('posteur').value, document.getElementById('message').value); return false;" />
                         </div>
                        </fieldset>
                </form>
                <script type="text/javascript">
                        refresh();//On appelle la fonction refresh() pour lancer le script.
                </script>
        </body>
</html>
