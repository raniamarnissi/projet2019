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
        <form action="store.php" method="post">
       
           <div class="form-group">
               <label for="vid">
                vid
               </label>
               <input type="number" class="form-control" name="vid" id="vid">
           </div>
           <div class="form-group">
               <label for="statut">
               statut
               </label>
               <input type="number" class="form-control" name="statut" id="statut">
           </div>
           
           <div class="form-group">
               <label for="num_vehicule">
               num_vehicule
               </label>
               <input type="text" class="form-control" name="num_vehicule" id="num_vehicule">
           </div>
          
               <button class="btn btn-outline-success" type="submit">Enregistrer</button>
               <button class="btn btn-outline-danger" type="reset">annuler</button>
           </div>

        </form>
    </div>
</body>
</html>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>