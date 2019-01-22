<html>
<?php
session_start();
session_destroy();
header('Location: profilv2.php');
$_SESSION['prenom']="";
$_SESSION['nom']="";
$_SESSION['page']="";
exit();
?>
</html>
