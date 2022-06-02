<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="tools/bootstrap-5.0.2/css/bootstrap.min.css" >
    <title>Document</title>
    
    </style>
</head>
<body>
    <form method="POST" action="actionAddArticle.php" enctype="multipart/form-data" >
        <div class="container mt-4 " style="width:50%" >
            <div class="container text-center position-relative"><h1>Ajout Article <span ><div class="spinner-border text-success"></div></span></h1></div><div class="d-grid">
                <div class="row">
            <div class="col"><input type="text" name="libelle" class="form-controle mt-3 " placeholder="libellé" required ></div> 
            <div class="col"><input type="text" name="prixunitaire" class="form-controle mt-3 " placeholder="Prix Unitaire" required > </div>
            <div class="col"><input type="text" name="qteEnstock" class="form-controle mt-3 " placeholder="Quantité Enstock" required ></div>
            <div class="col"><input type="text" name="seuil" class="form-controle mt-3" placeholder="Seuil Stock" required ></div>
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control mt-3" id="inputGroupFile02">
                <label class="input-group-text mt-3" for="inputGroupFile02">Upload</label>
</div> 
            <div class="d-grid" >
                <button name="Ajouter" type="submit" class="w-60 btn btn-lg btn-success mt-3" >Ajouter</button>
            </div>
            <?php
            if(isset($_GET['Ajouter']) && $_GET['err']==1){
            echo 'Ajout réussi';}
            ?><div class="alert alert-success">
            <a href="afficherArticle.php" class="alert-link">Afficher Article</a>.
          </div>
            
        </div>
    </form>
</body>
</html>