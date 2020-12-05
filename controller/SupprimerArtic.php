<?php
include "ContrArticle.php";

$articles = new articleC();

if (isset($_GET['IdArticle'])) {
    $articles->supprimerarticle($_GET['IdArticle']);
    echo "Success !";
  //  header('location:../view/back/startbootstrap-sb-admin-2-gh-pages/ModifierArtic.php');
} else {


    echo 'Erreur : try again';
    echo $_POST['IdArticle'];
}

?>
