<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Nouveau produit</title>
</head>
<body>
    <?php
        if (!empty($_POST)) {
            include './classes/produit.class.php';
            $produit = new Produit;
            $produit->ajoutProduit($_POST['fichier'], $_POST['nom'], $_POST['descr'], $_POST['prix']);
            header('Location:menu.php?notif=add');
            exit();
        }
    ?>       

    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Ajouter un nouveau produit</h3>
        </div>
        <fieldset>
            <legend>Nouveau produit</legend>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Image du produit</label>
                            <input type="text" required name="fichier" class="form-control" id="fichier">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" required name="nom" class="form-control" id="nom">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="descr">Description :</label>
                            <input type="descr" required name="descr" class="form-control" id="descr">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="prix">Prix</label>
                            <input type="text" required name="prix" class="form-control" id="prix">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-outline-primary">Enregistrer</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-block btn-outline-secondary">Annuler</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>