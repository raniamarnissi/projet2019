<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Editer le client N°<?= $_GET['id'] ?></title>
</head>
<body>
    <?php
        include 'classes/user.class.php';
        $client = new user;
        if (!empty($_POST)) {
            $client->updateClient($_POST['id'], $_POST['username'], $_POST['email'], $_POST['password'], $_POST['phone'], $_POST['adresse']);
            header('Location:modif.php?notif=update');
            exit();
        } else {
            $showClient = $client->showOneClient($_GET['id']);
            $data = $showClient->fetch();
        }
    ?>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Editer le client</h3>
        </div>
        <fieldset>
            <legend>Mettre à jour le client N°<?= $_GET['id'] ?></legend>
            <form action="" method="post">
                <input type="hidden" value="<?= $data['id'] ?>" name="id">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">username</label>
                            <input type="text" value="<?= $data['username'] ?>" required name="username" class="form-control" id="username">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">email</label>
                            <input type="text" value="<?= $data['email'] ?>" required name="email" class="form-control" id="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dateN">password</label>
                            <input type="text" value="<?= $data['password'] ?>" required name="password" class="form-control" id="password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" value="<?= $data['phone'] ?>" required name="phone" class="form-control" id="phone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="text" value="<?= $data['adresse'] ?>" name="adresse" id="adresse" class="form-control">
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
