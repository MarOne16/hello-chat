<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="actionConnect.php" method="post">
        <table>
            <tr>
                <td><label for="">login</label></td>
                <td><input type="mail" name="login" value="<?php if (isset ($_GET['login']))echo $_GET['login'];?>"></td>
            </tr>
            <tr>
                <td><label for="">mot de passe</label></td>
                <td><input type="password" name="psw" ></td>
            </tr>
            <tr>
                <td colspan="2" style="color : red">
                    <?php
                        if(isset($_GET['err'])){
                            if($_GET['err']==1)
                                echo"login ou psw incorrect";
                            else
                                echo"vous dever vous connecter";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="seConneter">valider</button>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="login.php">S'inscription</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>