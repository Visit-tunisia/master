<?PHP
include "../core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["id"])){
	$livraisonC->supprimerlivraison($_POST["id"]);
	header('Location: afficher_liv.php');

}

?>