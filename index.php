<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Gestion des clients</title>
</head>
<body>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Liste des clients</h3>
        </div>
        <?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
                   
                   
                    if ($_GET['notif'] == 'delete') echo 'Client supprimé avec succés';
                ?>
            </div>
        <?php endif ?>
        <br>
        <br>
 
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>cid</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>password</th>
                    <th>phone</th>
                    <th>adresse</th>
                    <th>Opérations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'classes/client.class.php';
                    $client = new client;
                    $listClients = $client->readAllClients();
                    $data = $listClients->fetchAll(); //une autre façon pour fetcher les données
                    // une autre façon pour ouvrir une structure entre le php et le HTML
                    //on ouvre la boucle avec les deux points(:)
                    foreach($data as $clientData):
                    ?>
                        <tr>
                            <td><?= $clientData['cid'] ?></td>   
                            <td><?= $clientData['nom'] ?></td>   
                            <td><?= $clientData['email'] ?></td>   
                            <td><?= $clientData['pwd'] ?></td>   
                            <td><?= $clientData['phone'] ?></td>   
                            <td><?= $clientData['adresse'] ?></td>
                            
                            <td><a href='delete.php?cid=<?=$clientData['cid']?>'<button type="submit" class="btn btn-danger">supprimer le client</button></a> &nbsp;&nbsp;
                             
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
