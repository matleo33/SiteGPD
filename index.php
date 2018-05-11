<?php
session_start();
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link href="./../css/style.css" rel="stylesheet">
        <title>Site GPD</title>
    </head>
    <body>
        <?php
        if (isset($_SESSION["USER_ID"])) {
            if ($_SESSION["USER_ID"] == 1) {//Compte admin
                include 'admin.php';
            } else {
                include 'joueur.php'; //compte joueur
            }
        } else {
            include 'connexion.php'; //page de connexion
        }
        ?>
    </body>
</html>