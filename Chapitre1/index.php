<?php
/**
 * @author Loretz Gaëtan
 * @version 1.0
 * @since 30.08.2018
 * Titre: EE Révision chapitre 1
 * Description : Création d'un site d'échange d'information basique
 * Copyright: Entreprise Ecole CFPT-I © 2016
 */
include_once 'Affichage.php';
session_start();
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $password = $_POST['password'];
    if($id == $_SESSION['id'] && $password = $_SESSION['password']) {
        $_SESSION['idConnect'] = $id;
        $_SESSION['passwordConnect'] = $password;
        header('Location: http://127.0.0.1/EE_Revision/Chapitre1/confirmation.php/');
        exit;
    }else{
        echo "L'identifiant ou le mot de passe est incorrect !";
        var_dump($_SESSION);
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chapitre 1</title>
    </head>
    <body>
        <?php showFormConnect(); ?>
        <a href='inscription.php'>Pas encore inscrit?</a>
    </body>
</html>
