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
    $inputs = array();
    $inputsNames = array();
    $inputs[0] = $_POST['firstName'];
    $inputs[1] = $_POST['name'];
    $inputs[2] = $_POST['id'];
    $inputs[3] = $_POST['password'];
    $inputs[4] = $_POST['passwordValidation'];

    if (isset($firstName) && isset($name) && isset($id) && isset($password) && isset($passwordValidation)) {
        $_SESSION[$inputsNames[0]] = $inputs[0];
        /*for ($i = 0; $i < 5; $i++) {
            $_SESSION[$inputsNames[$i]] = $inputs[$i];
        }*/
    } else {
        echo "nope";
        var_dump($_SESSION);
        var_dump($inputs);
        echo $_SESSION[$inputsNames[0]];
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
<?php showFormRegister(); ?>
        <a href='index.php'>retour accueil</a>
    </body>
</html>
