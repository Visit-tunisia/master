<?php
require_once '../../../Controller/ContrArticle.php';
require_once '../../../Controller/ContrCommentaire.php';
include_once '../../../Model/Articles.php';

?>

<?php
session_start();
// Page was not reloaded via a button press

$articleC = new articleC();
$num = 1;
$maction = 'afficher';
$par = "";
if (isset($_GET['maction'])) {
    $maction = $_GET['maction'];
}
if ($maction == 'trier') {
    $par = $_GET['par'];
    $listeCommentaire = $cc->trier($par);
} else if ($maction == 'stat') {
    $num = $_GET['num'];
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

      
      <?PHP

                        $listearticle = $articleC->AfficherArticle();

                        $commentairesC = new CommentaireC();
                        $nbrCommentairesTotale = $commentairesC->nbrCommentairesTotale();
                        //echo "Nbr de commentaires total :" . $nbrCommentairesTotale->sum;

                        ?>

<div class="card-header d-flex align-items-center">
                        <h3 class="h4"> Statistique Commentaires </h3>
                    </div>
                    <div class="card-body">
                       <!-- <div class="dropdown">

                            <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                STAT </a>

                            <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item " href="Stats.php?maction=stat&num=1">Number of comments by article</a>
                                <a class="dropdown-item " href="Stats.php?maction=stat&num=2">Number of comments by article last 24 hours</a>


                            </div>
                        </div> -->
                        

 <div class="table-responsive">
                            <?php
                            if ($num == 1)
                                require_once 'Stats.php';
                            else if ($num == 2)
                                require_once 'Stats.php';
                            ?>
                        </div>
                      </div>

</div>
</body>
</html>