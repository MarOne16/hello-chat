<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="tools/bootstrap-5.0.2/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
    <?php
        include('connexion2.php');
        $req=$pdo->prepare('select * from articles;');
        $req->execute();
        $articles=$req->fetchAll();
    ?>
    <div class="container mt-3" >
        <h2>Articles</h2>
        <div class="row">
            <?php
            foreach ($articles as $article ) {
            ?>
            <div class="col-sm-3">
                <div class="card" style="width: 30 px">
                    <img class="card-img-top" src="image/<?php echo $article['image'];?>"alt="card image" style="width: 100%;">
                    <div class="card-body">
                        <h4 class="card-title" ><?= $article['libelle']; ?></h4>
                        <p class="card-text" ><?= $article['prixunitaire']."DH";?></p>
                        <a href="#" class="btn btn-primary"  >Détail article</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</body>
</html>