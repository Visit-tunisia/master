<?php
include('../../../Controller/ProduitsCore.php');
include('../../../Controller/config.php');
include('../../../Controller/CategorieCore.php');

$CatCore=new CategorieCore();
$listeCat=$CatCore->afficherCategories();

$nomp="";
$cat="";
$tri="nom";
if (isset($_POST['rechercher'])) {
  
     $nomp = $_POST['nom'];
    $cat=$_POST['cat'];
    $tri=$_POST['ordre'];
}
$produits1C=new ProduitsCore();
$listeProduits=$produits1C->afficherProduits($nomp, $cat, $tri);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>

<div id="wrapper">

        <?php
            include('navBar.php');
        ?>

      
        <?php

 ?>
<center> <div id="container">
         <h2>Liste des produits </h2>
         
    <center><a href="ajout_produits.php" class="btn btn-info">Ajouter un produit </a></center>
   
<br><br>
   
                            <form  method="POST" action="listeproduits.php">
							<h5> Critères de recherche </h5>
							<div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nom du produit" name="nom" value="<?php echo $nomp; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                       <select name ="cat" id="cat" class="select" required="true" placeholder="Catégorie" >
									   <option value="0" <?php if ($cat=="") { ?>selected="true" <?php } ?>>Toutes les catégories</option>
                                            <?PHP
                                                    foreach($listeCat as $row){
                                            ?>
                                            <option value=<?php echo $row['idcat']; ?> <?php if ($cat==$row['idcat']) { ?>selected="true" <?php } ?>><?php echo $row['nomcat']; ?></option>
                                          <?php     
                                           }
                                            ?>
                                            </select>
											
											  
                                    </div>
									<br><br>
									<div class="col-sm-6">
									<label>Trier par </label>
									<select name ="ordre" id="ordre" class="select" required="true" placeholder="Trier par"  >
									   <option value="nom" <?php if ($tri=="nom") { ?>selected="true" <?php } ?>>Nom du produit</option>
									   <option value="prix" <?php if ($tri=="prix") { ?>selected="true" <?php } ?>>Prix du produit</option>
                                            
                                            </select>
                                       
                                    </div>
									<div class="col-sm-6">
									
                                       <input type="submit" value="Rechercher" class="btn btn-info"  name="rechercher"/>
                                    </div>
                                </div>
       
    </form>


        <table class="table">
            <thead>
                                                                <tr>
                                                                    <th>Nom</th>
                                                                    <th>Catégorie</th>
                                                                    <th>Description</th>
                                                                    <th>Prix</th>
                                                                    <th>Quantité</th>
                                                                    <th>Image</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
 
            <tbody>

              <?PHP
foreach($listeProduits as $row){
    $cat=$produits1C->afficherCat($row['categorie']);
    
  ?>
  <tr >
 
  <td align="center"><?PHP echo $row['nom']; ?></td>
 
  <td align="center"><?PHP echo $cat; ?></td>
  <td align="center"><?PHP echo $row['description']; ?></td>
  <td align="center"><?PHP echo $row['prix']; ?></td>
    <td align="center"><?PHP echo $row['quantite']; ?></td>
  <td align="center" ><img width="100"
     height="100"src="../../../view/images_produits/<?php echo $row['image']; ?>" /></br> 
<td  align="center"><form method="POST" 
  action="supprimerProduits.php">
  <input type="submit" name="supprimer" class="btn btn-info" value="Supprimer">
  <input type="hidden" value="<?PHP echo $row['idprod']; ?>" name="idprod">
  </form>
  </td>
<div>
  <td align="center"><form method="POST" 
  action="modifier_produits.php">
  <input type="submit" name="modif" class="btn btn-info" value="Modifier">
  <input type="hidden" value="<?PHP echo $row['idprod']; ?>" name="idprod">
  </form></td>
  </tr>  </div>
  
  <?PHP
}
?>
                


            </tbody>




        </table>
</div>
</center>
</div>
</body>
</html>