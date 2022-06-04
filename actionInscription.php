<?php
    if (isset($_GET['valider'])){
        if($_GET['psw'] != $_GET['cpsw'])
           header('location:login.php?err=1&nom='.$_GET['nom']
                                            .'&prenom='.$_GET['prenom']
                                            .'&login='.$_GET['login']);
    else{
        include'connexion.php';
        $req=$pdo->prepare('select count(*) existe
                            from client1
                            where login=?;');
        $req->execute(array($_GET['login']));
        $resultat=$req->fetch();
        if($resultat['existe']==1)
            header('location:login.php?err=2&nom='.$_GET['nom']
                                             .'&prenom='.$_GET['prenom']
                                             .'&login='.$_GET['login']);
        else{
            $req2=$pdo->prepare('insert into client1 values(?,?,?,md5(?));');
            $req2->execute(array($_GET['login'],
                                 $_GET['nom'],
                                 $_GET['prenom'],
                                 $_GET['psw']));
            header('location:login.php?err=3');
        }
    }
    }
?>
