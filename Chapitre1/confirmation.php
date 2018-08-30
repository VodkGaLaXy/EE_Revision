<?php
/**
 * @author Loretz Gaëtan
 * @version 1.0
 * @since 30.08.2018
 * Titre: EE Révision chapitre 1
 * Description : Création d'un site d'échange d'information basique
 * Copyright: Entreprise Ecole CFPT-I © 2016
 */
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chapitre 1</title>
    </head>
    <body>
        <h1>Bonjour <?php echo $_SESSION['id']; ?> vous êtes connecté !</h1>
    </body>
</html>
