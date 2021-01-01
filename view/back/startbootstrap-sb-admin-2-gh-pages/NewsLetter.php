<?php

include_once '../../../Controller/ContrArticle.php';
include_once '../../../Model/Articles.php';

include_once '../../../Controller/ContrNewsLetter.php';
include_once '../../../Model/NewsLetter.php';
//echo $totalP;


$Arti= new ArticleC();

$liste=$Arti->returnLatestArticle();

//echo 'aaaaaaaaaaaaa';

//echo $liste['AuteurArticle'];


$Mailss= new NewsLetterC();

$liste2=$Mailss->AfficherNewsLetter();
//$totalP=$articlee->calcTotalRows($perpage);


foreach ($liste2 as $pr)
{
                      
                        
                    //    echo $pr['IdNewsLetter'];
               // echo $pr['Email'];
    

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


<form method="post" action="../../../Controller/SendMail.php">
    <fieldset>
      <legend>Envoyer Mail</legend>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
    
  </form>
      
    
</div>
</body>
</html>