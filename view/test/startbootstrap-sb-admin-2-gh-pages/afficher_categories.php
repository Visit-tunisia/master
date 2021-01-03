<?php

include('../../../Controller/config.php');
include('../../../Controller/CategorieCore.php');

$CatCore=new CategorieCore();
$listeCat=$CatCore->afficherCategories();


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
/*include("../../../Controller/AfficherArticle.php"); */
 ?>
<center> <div id="container">
         <h2>Liste des catégories  </h2>
         
    <center><a href="ajout_categories.php" class="btn btn-info">Ajouter une catégorie  </a></center>
   
<br><br>
   
                           


        <table class="table">
            <thead>
                                                                <tr>
                                                                    <th>Nom</th>
                                                                    
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
 
            <tbody>

              <?PHP
foreach($listeCat as $row){
    
    
  ?>
  <tr >
 
  <td align="center"><?PHP echo $row['nomcat']; ?></td>
 
  
<td align="center"><form method="POST" 
  action="supprimercategories.php">
  <input type="submit" name="supp" class="btn btn-info" value="Supprimer">
  <input type="hidden" value="<?PHP echo $row['idcat']; ?>" name="idcat">
  </form></td>
<div>
  <td align="center"><form method="POST" 
  action="modifier_categories.php">
  <input type="submit" name="modif" class="btn btn-info" value="Modifier">
  <input type="hidden" value="<?PHP echo $row['idcat']; ?>" name="idcat">
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