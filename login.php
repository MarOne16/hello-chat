<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,500;0,800;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="actionInscription.php" method="GET" name="inscript">
    <table>
        <tr>
            <td><label for="">nom</label></td>
            <td><input type="text" name="nom" value="<?php if (isset ($_GET['nom'])) echo $_GET['nom'];?>"></td>
        </tr>
        <tr>
            <td><label for="">prénom</label></td>
            <td><input type="text" name="prenom" value="<?php if (isset ($_GET['prenom']))echo $_GET['prenom'];?>"> 
                
             </td>
        </tr>
        <tr>
            <td><label for="">email</label></td>
            <td><input type="mail" name="login" value="<?php if (isset ($_GET['login']))echo $_GET['login'];?>"></td>
        </tr>
        <tr>
            <td><label for="">mot de passe</label></td>
            <td><input type="password" name="psw" ></td>
            
        </tr>
        <tr><td><label for="">confirmer mot depasse</label></td>
        <td><input type="password" name="cpsw"></td>
    
    
    </tr>
        <tr>
            <td colspan="2">
                <?php
                if(isset($_GET['err'])){
                    switch($_GET['err']){
                        case 1:
                            echo"mot de passe doit etre identique a confirmer mot de passe!";
                        break;
                        case 2:echo"veuillez choisir un autre login!";
                        break;
                        default;
                         echo "inscriptiont ressuite ";
                         break;

                    }
                }
                
                ?>
            </td>
        </tr>
        <tr><td><button type="submit" name="valider">valider</button></td>
        <td><button type="reset" name="annuler">annuler</button></td>
    </tr>
    </table>
    </form>
            </center>
</body>
</html>