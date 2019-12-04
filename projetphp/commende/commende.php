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
    <title>Document</title>
</head>
<body>
<h1><centre> liste des commendes</center> </h1>
<div class="container">
 <h1>detait de commende</h1>
    <table class="table">
    <thead class="thead-dark">
        <th>oid</th>
        <th>pid</th>
        <th>cid</th>
        <th>quantité_produit</th>
        <th>odate</th>
        <th>statut_livraison</th>
        <th>vid</th>
       

    </thead>
    <tbody>
        <?php

include 'dbconnexion.php';
$rep=$cnx->query('SELECT * FROM commende');
while($data=$rep->fetch()){
    echo '<tr>';
    echo '<td>'.$data['oid'].'</td>';
    echo '<td>'.$data['pid'].'</td>';
    echo '<td>'.$data['cid'].'</td>';
    echo '<td>'.$data['quantite_produit'].'</td>';
    echo '<td>'.$data['odate'].'</td>';
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