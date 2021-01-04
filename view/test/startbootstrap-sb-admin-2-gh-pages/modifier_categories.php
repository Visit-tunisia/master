<?php


include('../../../Controller/CategorieCore.php');
include('../../../Controller/config.php');

$CatCore=new CategorieCore();
$listeCat=$CatCore->afficherCategories();
 
  if (isset($_POST['maj'])) {
  
     $idcat = $_POST['idcat'];
    $nom=$_POST['nomcat'];
    
        $catC1=new CategorieCore();
        
        $catC1->modifierCategorie($idcat,$nom);
       
    header("Location: afficher_categories.php");   
}

if (isset($_POST["idcat"])) 
{
    $catC=new CategorieCore();
    $result=$catC-> recupererCategorie($_POST['idcat']);
    foreach($result as $row)
    {
        $idcat = $row['idcat'];
        $nom=$row['nomcat']; 
   
    } 
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
                                <h1 class="h4 text-gray-900 mb-4"> Modifier une catégorie </h1>
                            </div>
                           <form name="fmaj" method="POST" action="modifier_categories.php" >
                            <input type="hidden" name="idcat" id="idcat"  value="<?php echo $idcat; ?>" />
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" 
                                            placeholder="Nom" name="nomcat" class="form-control form-control-user" value="<?php echo $nom; ?>">
                                    </div>
                                   
                                </div>
                                
                                 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                       <input type="submit" value="Modifier" class="btn btn-info" name="maj"/>
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