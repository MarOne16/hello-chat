<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['login']))
            echo"bienvenu".$_SESSION['login'];
        else
            header('location:login.php?err=2');
    ?>
    <br>
    <a href="logout.php">Se deconnecter</a>

</body>
</html>