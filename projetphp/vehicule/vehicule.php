<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title> create vihicule</title>
</head>
<body>
<div class="container">
<h1>Liste des client:</h1>
    <table class="table">
    <thead class="thead-dark">
        <th>vid</th>
        <th>statut</th>
        <th>num_vehicule</th>

    </thead>
    <tbody>
        <?php

include 'dbconnexion.php';
$rep=$cnx->query('SELECT * FROM vehicule');
while($data=$rep->fetch()){
    echo '<tr>';
    echo '<td>'.$data['vid'].'</td>';
    echo '<td>'.$data['statut'].'</td>';
    echo '<td>'.$data['num_vehicule'].'</td>';
    echo '<td><a href="delete.php?vid='.$data['vid'].'"><button type="submit" class="btn btn-danger">supprimer le client</button></a> &nbsp;&nbsp;';
 

     
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