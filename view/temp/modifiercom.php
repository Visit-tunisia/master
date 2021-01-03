<?php
include "D:/wamp/www/project/master/controller/contrcompte.php";
include_once "D:/wamp/www/project/master/Model/compte.php";







$compteC = new compteC();
$error = "";


if (
    isset($_POST["login"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["mail"]) &&
    isset($_POST["password"]) &&
    isset($_POST["datedenaissance"])
    
) {
	
    if (
        !empty($_POST["login"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["mail"]) &&
        !empty($_POST["password"]) &&
        isset($_POST["datedenaissance"])
    )
    {
    
    	
    	
    


        $compte = new compte(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['login'],
            $_POST['datedenaissance'],
            $_POST['password'],
            $_POST['mail']


        );
    
		
        $compteC->modifiercompte($compte, $_GET['idUtili']);
        
       header('http://localhost/project/master/view/temp/comptea.php');
    } else
        echo "Missing information";
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

    <title>Editer compte</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

 

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">



                <!-- Begin Page Content -->

                <div id="error">
                    <?php echo $error; ?>
                </div>

                <?php
                if (isset($_GET['idUtili'])) {
                    $compte = $compteC->recuperercompte($_GET['idUtili']);
                ?>


                    <div class="container-fluid">

                        <div>
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label for="idUtili">idUtili</label>
                                    <input type="text" class="form-control" name="idUtili" id="idUtili" value="<?php echo $compte['idUtili']; ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="login">login</label>
                                    <input type="text" class="form-control" name="login" id="login" value="<?php echo $compte['login']; ?> ">
                                </div>
                                <div class="form-group">
                                    <label for="prenom">prenom</label>
                                    <input type="text" class="form-control" name="prenom" id="prenom" value="<?php echo $compte['prenom']; ?> ">
                                </div>
                                <div class="form-group">
                                    <label for="nom">nom</label>
                                    <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $compte['nom']; ?> ">
                                </div>
                                <div class="form-group">
                                <label for="mail">mail</label>
                                    <input type="text" class="form-control" name="mail" id="mail" value="<?php echo $compte['mail']; ?> ">
                                </div>
                                <div class="form-group">
                                <label for="password">password</label>
                                    <input type="password" class="form-control" name="password" id="password" value="<?php echo $compte['password']; ?> ">
                                </div>

                                <div class="form-group">
                                    <label for="datedenaissance">date de naissance</label>
                                    <input name="datedenaissance" type="date" value="<?php echo $compte['datedenaissance']; ?>" >
                                    
                                
                                    
                                </div>
                                
								



                                <button type="Submit" value="Envoyer" class="btn btn-primary">Submit</button>

                            </form>
                        </div>






                    </div>
                    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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
<?php
                } else {
                    echo "error ";
                }
?>
</body>

</html>