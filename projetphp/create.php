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
<div class="container">
</head>
<body>
<h1><centre></center> </h1>
<a href="#"> <h1>Liste des client:</h1></a>
    <table class="table">
    <thead class="thead-dark">  
        <th>oid</th>
        <th>pid</th>
        <th>cid</th>
        <th>quantité_produit</th>
        <th>odate</th>
        <th>quantite_client</th>
        <th>statut_livraison</th>
        <th>vid</th>
        
    </thead>
    <tbody>
        <?php

include 'dbconnexion.php';
$rep=$cnx->query('SELECT * FROM client');
while($data=$rep->fetch()){
    echo '<tr>'; echo '<td>'.$data['cid'].'</td>';
    echo '<td>'.$data['oid'].'</td>';
    echo '<td>'.$data['pid'].'</td>';
    echo '<td>'.$data['cid'].'</td>';
    echo '<td>'.$data['quantité_produit'].'</td>';
    echo '<td>'.$data['odate'].'</td>';
    echo '<td>'.$data['quantite_client'].'</td>';
    echo '<td>'.$data['statut_livraison'].'</td>';
    echo '<td>'.$data['vid'].'</td>';
    
     
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