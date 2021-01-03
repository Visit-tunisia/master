<?PHP
include "../entity/livraison.php";
include "../core/livraisonC.php";
$livraisonC=new livraisonC();



if (isset($_GET['id'])){
    $livr=new livraison($_GET['idclient'],$_GET['username'],$_GET['adress'],$_GET['telephone'],$_GET['numcommande'],$_GET['total'],$_GET['etat']);
    $livraisonC->modifierlivraison($livr,$_GET['id']);
    header('Location: afficher_liv.php');
  }
?>