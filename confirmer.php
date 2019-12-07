<!DOCTYPE html>
<html lang="en">
<head>
  <title>Confirmer la commande</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
      <style>
    div.scrollmenu {
      background-color: rgb(97, 93, 93);
      overflow: auto;
      white-space: nowrap;
    }
    
    div.scrollmenu a {
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px;
      text-decoration: none;
    }
    
    div.scrollmenu a:hover {
      background-color: #777;
    }
    body {
      background :url("file:///home/majdi/sirine/Application/pages/images/background.jpg");
      -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            float:right;
    }
    form {
        width:700px;
        border: 0px solid black;}
        label{
          color:black ;
        }
        #nav {
	padding: 0; margin: 0;
	text-align: center; /* centrer le texte */
}
#nav li {
	display: inline;
	list-style: none;
}
#nav a {
	display:inline-block;
	margin: 0 30px;
  color:white;
}
    </style>
</head>
<body>
    <?php
    

function supprimerArticle($libelleProduit){
  //Si le panier existe
  if (creationPanier() && !isVerrouille())
  {
     //Nous allons passer par un panier temporaire
     $tmp=array();
     $tmp['libelleProduit'] = array();
     $tmp['qteProduit'] = array();
     $tmp['prixProduit'] = array();
     $tmp['verrou'] = $_SESSION['panier']['verrou'];

     for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
     {
        if ($_SESSION['panier']['libelleProduit'][$i] !== $libelleProduit)
        {
           array_push( $tmp['libelleProduit'],$_SESSION['panier']['libelleProduit'][$i]);
           array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
           array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
        }

     }
     //On remplace le panier en session par notre panier temporaire à jour
     $_SESSION['panier'] =  $tmp;
     //On efface notre panier temporaire
     unset($tmp);
  }
  else
  echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function modifierQTeArticle($libelleProduit,$qteProduit){
  //Si le panier éxiste
  if (creationPanier() && !isVerrouille())
  {
     //Si la quantité est positive on modifie sinon on supprime l'article
     if ($qteProduit > 0)
     {
        //Recharche du produit dans le panier
        $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

        if ($positionProduit !== false)
        {
           $_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit ;
        }
     }
     else
     supprimerArticle($libelleProduit);
  }
  else
  echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function MontantGlobal(){
  $total=0;
  for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
  {
     $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
  }
  return $total;
}

	?>

  <ul id="nav">
	<li><a href="menu.html">Menu</a></li>
	<li><a href="contact.html">Contact</a></li>
<li><a href="signin.html">Login</a> </li>
	<li><a href="panier.php"><img height="30" width="30" src="file:///home/majdi/sirine/Application/pages/images/panier.jpg">Shopping Cart</a></li>
</ul>
 
   <div class="container">
       <form  action="signin.php" method="post">
            <div class="jumbotron jumbotron-fluid">
            <h3> Votre commande à été enregistrer avec succées</h3>  
            </div> 
            <div class="form-group">
               <label>Nom :</label>
               <input  class="form-control" type="text" name="nom" placeholder="Votre nom svp !">
               </div>
               <div class="form-group">       
              <label>Prénom :</label>
               <input class="form-control" type="text" name="prenom" placeholder="Votre prénom svp !">
               </div>
               <div class="form-group">
               <label>Numéro de téléphone :</label>
               <input class="form-control" type="text" name="ntel" placeholder="Votre numéro de téléphone svp !">
               </div>
               <div class="form-group">
                <label>Adresse:</label>
               <input class="form-control" type="text" name="adr" placeholder="Votre adresse svp !">
               </div>
               <div class="form-group">
                <label>Paiement :</label>
               <input class="form-control" type="text" name="paiement" placeholder="Quel est le type de paiement ?">
               </div>
               <div class="form-check-check">
               <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="confirmer">
                    Je confirme mes données                    
                  </label></div>
                  <button type="submit" class="btn btn-success" value="$tmp">Commander</button>
                  <button type="reset" class="btn btn-info">Annuler</button>
            </form>
   </div>
</body>
</html>