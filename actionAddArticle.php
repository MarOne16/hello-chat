<?php
if(isset($_POST['Ajouter'])){
    $nomphoto_temp=$_FILES['photo']['tmp_name'];
    $nomphoto     =$_FILES['photo']['name'];
    move_uploaded_file($nomphoto_temp,'image/'.$nomphoto);
    include('connexion2.php');
    $req=$pdo->prepare('insert into articles (libelle,prixunitaire,qteEnstock,seuil,image)values(?,?,?,?,?);');
    $req->execute(array($_POST['libelle'],$_POST['prixunitaire'],$_POST['qteEnstock'],$_POST['seuil'],$nomphoto));
    header('location:addArticle.php?err=1');
}
?>