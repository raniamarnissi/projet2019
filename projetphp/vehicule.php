<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Gestion des vehicule</title>
</head>
<body>

    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Liste des vehicule</h3>
        </div>
        <?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
                     if ($_GET['notif'] == 'add') echo 'Client ajouté avec succés';
                    if ($_GET['notif'] == 'update') echo 'Client modifié avec succés';
                    if ($_GET['notif'] == 'delete') echo 'vehicule supprimé avec succés';
                ?>
            </div>
        <?php endif ?>
        <br>
        <br>
        <br>
<a href="createvehicule.php" class="btn btn-primary">Nouveau vehicule</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>vid</th>
                    <th>statut</th>
                    <th>num_vehicule</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'classes/vehicule.class.php';
                    $vehicule = new vehicule;
                    $listVehicule = $vehicule->readAllVehicule();
                    $data = $listVehicule->fetchAll(); //une autre façon pour fetcher les données
                    // une autre façon pour ouvrir une structure entre le php et le HTML
                    //on ouvre la boucle avec les deux points(:)
                    foreach($data as $vehiculeData):
                    ?>
                        <tr>
                            <td><?= $vehiculeData['vid'] ?></td>   
                            <td><?= $vehiculeData['statut'] ?></td>   
                            <td><?= $vehiculeData['num_vehicule'] ?></td> 
                            
                             <td>
                             <a href='editevehicule.php?vid=<?= $vehiculeData['vid'] ?>' class="btn btn-outline-warning">Editer</a>&nbsp;&nbsp;  
                           <a href='deletevehicule.php?vid=<?=$vehiculeData['vid']?>'<button type="submit" class="btn btn-danger">supprimer le vehicule</button></a> &nbsp;&nbsp;
    

 
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
