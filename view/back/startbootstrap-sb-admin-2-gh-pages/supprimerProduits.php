<?PHP
include('../../../Controller/ProduitsCore.php');
include('../../../Controller/config.php');
$produits1C=new ProduitsCore();
if (isset($_POST["idprod"])) {
	$produits1C-> supprimerProduits($_POST["idprod"]);
	header('Location: listeproduits.php');
}

?>
