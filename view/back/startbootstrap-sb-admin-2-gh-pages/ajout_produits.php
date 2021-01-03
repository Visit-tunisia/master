<?php

include('../../../Controller/ProduitsCore.php');
include_once "../../../model/produits.php";
include('../../../Controller/CategorieCore.php');
include_once "../../../model/produits.php";
include('../../../Controller/config.php');

$CatCore=new CategorieCore();
$listeCat=$CatCore->afficherCategories();

if (isset($_POST['ajouter']) )
{
$produits=new produits(0,$_POST['nom'],$_POST['cat'],$_POST['description'],$_POST['prix'],$_POST['quantite'],$_POST['image']);
$produits1C=new ProduitsCore();
$produits1C->ajouterProduits($produits);
header('Location:Listeproduits.php ');  }
?>



<!DOCTYPE html>
<html lang="en">

<head>

<script type="text/javaScript">
    function verif()
    {
        var p= document.getElementById("prix").value ;
        alert (p);
        if (isNaN(parseFloat(p)){
            
                alert (" le prix est invalide ") ;
                return false ;
        }
            
            else if (parseFloat(p)<=0)
              { 
                    alert (" le prix doit etre positif ") ;
                 return false;
              }
              return true ;
    }

</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Visit Tunisia</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                   
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"> Ajouter un produit</h1>
                            </div>
                            <form onsubmit="" class="user"  action="ajout_produits.php" method="POST" >
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nom" name="nom">
                                    </div>
                                    <div class="col-sm-6">
                                       <select name ="cat" id="cat" class="select" required="true" placeholder="Catégorie" >
                                            <?PHP
                                                    foreach($listeCat as $row){
                                            ?>
                                            <option value=<?php echo $row['idcat']; ?>><?php echo $row['nomcat']; ?></option>
                                          <?php     
                                           }
                                            ?>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="description" id="description" rows="2" required="true" class="form-control form-control-user" placeholder="Description" ></textarea>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="prix" id="prix" required="true" class="form-control form-control-user" placeholder="Prix (en dinars)" />
                                    </div>
                                    <div class="col-sm-6">
                                       <input type="Number" name="quantite" id="quantite" min="0" required="true" class="form-control form-control-user" placeholder="Quantite" />
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <input type="file" name="image" id="image"  required="true"   />
    
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                       <input type="submit" value="Ajouter" class="btn btn-info" name="ajouter"/>
                                    </div>
                                    <div class="col-sm-6">
                                                                            <input type="reset" value="Vider"  class="btn btn-info"/>
                                    </div>
                                </div>
                               
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>