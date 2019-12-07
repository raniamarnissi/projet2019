<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Nouveau vehicule</title>
</head>
<body>
    <?php
        if (!empty($_POST)) {
            include './classes/vehicule.class.php';
            $vehicule = new vehicule;
            $vehicule->addNewVehicule($_POST['statut'], $_POST['num_vehicule']);
            header('Location:vehicule.php?notif=add');
            exit();
        }
    ?>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Ajouter un nouveau vehicule</h3>
        </div>
        <fieldset>
            <legend>Nouveau vehicule</legend>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="statut">statut</label>
                            <input type="text" required name="statut" class="form-control" id="statut">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="num_vehicule">num_vehicule</label>
                            <input type="text" required name="num_vehicule" class="form-control" id="num_vehicule">
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