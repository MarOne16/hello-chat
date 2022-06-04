<?php
    if(isset($_POST['seConneter'])){
        include'connexion.php';
        $req = $pdo->prepare('select count(*) existe from client1 where login="marsaw@gmail.com" and psw="md5(kh10mlgo)";');
        $req->execute(array($_POST['login'],$_POST['psw']));
        $resultat=$req->fetch();
        if($resultat['existe']==0)
            header('location:connect.php?err=1&login='.$_POST['login']);
        else{
            session_start();
            $_SESSION['login']= $_POST['login'];
            header('location:accueil.php');
        }
    }
?>