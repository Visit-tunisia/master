<?php
include "../../../controller/ContrArticle.php";
include_once "../../../model/Articles.php";

//$datetime = "28-1-2011 14:32:55";





$articleC = new articleC();
$error = "";


if (
    isset($_POST["titre"]) &&
    isset($_POST["texte"]) &&
    isset($_POST["auteur"]) &&
    isset($_POST["ImageUrl"]) &&
    isset($_POST["DateArticleN"])&&
    isset($_POST["TimeArticleN"]) 
) {
	
    if (
        !empty($_POST["titre"]) &&
        !empty($_POST["texte"]) &&
        !empty($_POST["auteur"]) &&
        !empty($_POST["ImageUrl"]) &&
        isset($_POST["DateArticleN"])&&
    isset($_POST["TimeArticleN"]) 
    ) {
    	
    	$datetimeN = $_POST['TimeArticleN'].' '.$_POST['DateArticleN'];
	 	$datetimeN = date("Y-m-d H:i:s",strtotime($datetimeN));
	 
	 	$datetimeC= $_POST['TimeArticleC'].' '.$_POST['DateArticleC'];
	 	$datetimeC = date("Y-m-d H:i:s",strtotime($datetimeC));
    //	echo 'aaaaaaaaaaaaaa'.$article['DateArticle'];
	 	if ($datetimeN <= $datetimeC) {
    $statuss='PUBLIE';
	}
	else
	{
	$statuss='NON PUBLIE';
	}


        $article = new article(
            $_POST['titre'],
            $_POST['texte'],
            $_POST['auteur'],
            $datetimeN,
           $datetimeC,
            $_POST['ImageUrl'],
            $statuss

        );
      //  $dateN = date('Y-m-d', strtotime($article['DateArticle']));
       // $timeN = $article['DateArticle']->format('H:i:s');
       // echo $article['DateArticle'];
		//$timeN = date('H:i:s', strtotime($_POST['DateArticle']));
		//echo $timeN;
		echo "aaaaaaaaaa4";
        $articleC->modifierarticle($article, $_GET['IdArticle']);
        echo "aaaaaaaaaa5";
    //    header('Location:../front/blogs.php');
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

    <title>Editer article</title>

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
                if (isset($_GET['IdArticle'])) {
                    $article = $articleC->recupererarticle($_GET['IdArticle']);
                ?>


                    <div class="container-fluid">

                        <div>
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label for="IdArticle">idArticle</label>
                                    <input type="text" class="form-control" name="IdArticle" id="IdArticle" value="<?php echo $article['IdArticle']; ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="titre">Titre</label>
                                    <input type="text" class="form-control" name="titre" id="titre" value="<?php echo $article['TitreArticle']; ?> ">
                                </div>


                                <div class="form-group">
                                    <label for="texte">Contenu</label>
                                    <textarea class="form-control" name="texte" rows="10"> <?php echo $article['DescriptionArticle']; ?>  </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="auteur">Auteur</label>
                                    <input type="text" class="form-control" name="auteur" value="<?php echo $article['AuteurArticle']; ?> ">
                                </div>
         

                                <div class="form-group">
                                    <label for="DateArticle">Date de publication de l'article</label>
                                    <input name="DateArticleN" type="date" value="<?php 
                                    $dateN = date('Y-m-d', strtotime($article['DateArticle']));





                                    echo $dateN;?>">
                                    <input name="TimeArticleN" type="time" value="<?php
                                    $timeN = date('H:i', strtotime($article['DateArticle']));
       									// echo $article['DateArticle'];
                                    echo $timeN;?>">
                                </div>
                                <div class="form-group">
                                    <label for="DateArticle">Date de creation/modification de l'article</label>
                                    <input name="DateArticleC" type="date" value="<?php $dateC = date('Y-m-d'); echo $dateC; ?>" readonly>
                                    <input name="TimeArticleC" type="time" value="<?php $timeC = date('H:i'); echo $timeC;  ?>" readonly>
                                </div>
                                <div class="form-group">
                                <label>Image Url</label>
										<input type="text" name="ImageUrl" value="<?php echo $article['ImageUrl'];?>">
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