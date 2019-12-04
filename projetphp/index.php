
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title></title>
<body>
<div class="container">
<a href="commende.php"> <h1>Liste des client:</h1></a>
    <table class="table">
    <thead class="thead-dark">
        <th>cid</th>
        <th>nom</th>
        <th>email</th>
        <th>phone</th>
        <th>adresse</th>
        <th>operation</th>

    </thead>
    <tbody>
        <?php

include 'dbconnexion.php';
$rep=$cnx->query('SELECT * FROM client');
while($data=$rep->fetch()){
    echo '<tr>';
    echo '<td>'.$data['cid'].'</td>';
    echo '<td>'.$data['nom'].'</td>';
    echo '<td>'.$data['email'].'</td>';
    echo '<td>'.$data['phone'].'</td>';
    echo '<td>'.$data['adresse'].'</td>';
    echo '<td><a href="delete.php?cid='.$data['cid'].'"><button type="submit" class="btn btn-danger">supprimer le client</button></a> &nbsp;&nbsp;';
    echo ' <a href="commende.php?cid='.$data['cid'].'"><button type="submit" class="btn btn-success">voir la commande</button></a>  </td>';

     
}
?>
    </tbody>
</table>
</div>
</body>
</html>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>