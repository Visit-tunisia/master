<?PHP
include "../entity/livraison.php";
include "../core/livraisonC.php";
$livraisonC=new livraisonC();



if (isset($_GET['id'])){
    $livraisonC->traiter($_GET['id']);
    header('Location: consulter_livraison.php');
  }
?>