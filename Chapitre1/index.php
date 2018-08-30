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
$idDefine = "bob";
$passwordDefine = "1234";
if (isset($_POST['submit'])) {
    $id = $_POST['identifiant'];
    $password = $_POST['identifiant'];
    if($id == $idDefine && $password = $passwordDefine) {
        $_SESSION['id'] = $id;
        $_SESSION['Password'] = $password;
        header('Location: confimration.php');
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
        <fieldset>
            <legend>Connection</legend>
            <form method="post" action="">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                Identifiant:
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name='identifiant' type='text' value=''/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mot de passe:
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name='motDePasse' type='text' value=''/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name='submit' type='submit' value='Valider'/>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </fieldset>
        <a href='#'>Pas encore inscrit?</a>
    </body>
</html>
