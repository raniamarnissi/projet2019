<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>panier</title>
</head>
<body>
<?php
include 'panier.class.php';

if (isset($_SESSION)) {
    $_SESSION['nomproduit']=$_GET['nomp'];
    $_SESSION['idproduit']=$_GET['idp']; 
    $_SESSION['$prixunitaire']=$prixunitaire;
}

?>
    <div class="container">
        <form action="chariot.php" method="post">
            <div class="form-group">
                <h2 class="jombostron">panier</h2>            
                <h6>VOTRE ARTICLE: </h6>
                <input type="text" name="nomp" class="form-control" disabled value="<?php
                if (isset($_SESSION['nomproduit'])) {
                    echo $_SESSION['nomproduit'] ; }?>">

                </br> 
                quantité 
                    <select name="qte" id="qte" class="form-control" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                    </select>
                prix unitaire
                <input type="text" class="form-control" disabled value="$prixunitaire">
                prix total
                    <div class="alert alert-success alert-dismissable">
                        <input type="text" class="form-control" disabled value="<?=$_prixtotal?>">
                    </div>
                statut delevry</br> 
                <select name="statut" id="statut" class="form-control">
                        <option value="1">livrer</option>
                        <option value="0">non livrer</option>
                </select>
                <button type="submit" name="" class="btn btn-outline-success">confirm order</button> 
                </br>
                <button type="reset" class="btn btn-outline-danger" ><a href="">annuler</a></button> </br>
            </div>
        </form>
    </div>

</body>
</html>