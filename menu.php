<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>menu</title>
</head>
<body>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Menu :</h3>
        </div>
        <?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
                    if ($_GET['notif'] == 'add') echo 'Produit ajouté avec succés';
                    if ($_GET['notif'] == 'update') echo 'Produit modifié avec succés';
                    if ($_GET['notif'] == 'delete') echo 'Produit supprimé avec succés';
                ?>
            </div>
        <?php endif ?>
        <br>
        <a href="create.php" class="btn btn-primary">Nouveau produit</a>
        <br>
        <br>
        <table class="table table-hover">
        <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'classes/produit.class.php';
                    $produit = new Produit;
                    $listProduit = $produit->readAllProduit();
                    $data = $listProduit->fetchAll(); //une autre façon pour fetcher les données
                    // une autre façon pour ouvrir une structure entre le php et le HTML
                    //on ouvre la boucle avec les deux points(:)
                    foreach($data as $produitData):
                    ?>
                        <tr>
                            <td><?= $produitData['pid'] ?></td>   
                            <td><img src = "<?php echo $produitData['fichier'] ?>" style="width:350px;height:200px;border:5000px; " /></td>
                            <td><?= $produitData['nom'] ?></td>   
                            <td><?= $produitData['descr'] ?></td>   
                            <td><?= $produitData['prix'] ?></td>   
                            <td>
                                <a href='edit.php?pid=<?= $produitData['pid'] ?>' class="btn btn-outline-warning">Editer</a>&nbsp;&nbsp;
                                <br><br>
                                <a href='delete.php?pid=<?= $produitData['pid'] ?>' class="btn btn-outline-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach //on ferme la boucle qu'on a ouvert précédemment avec php ?>
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
