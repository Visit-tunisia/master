<?php


include('../../../Controller/CategorieCore.php');
include('../../../Controller/config.php');
include_once "../../../model/categorie.php";

if (isset($_POST['ajouter']) )
{

$cat=new categorie(0,$_POST['nom']);
$categorie1C=new categorieCore();
$categorie1C->ajoutercategorie($cat);

header('Location:afficher_categories.php ');



    
}


?>



<!DOCTYPE html>
<html lang="en">

<head>





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
                                <h1 class="h4 text-gray-900 mb-4"> Ajouter une catégorie </h1>
                            </div>
                            <form class="user"  action="ajout_categories.php" method="POST" >
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nom" name="nom">
                                    </div>
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