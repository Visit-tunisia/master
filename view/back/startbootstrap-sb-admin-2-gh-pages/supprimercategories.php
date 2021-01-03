<?PHP
include('../../../Controller/CategorieCore.php');
include('../../../Controller/config.php');

if (isset($_POST["idcat"])) {
	$cat1C=new CategorieCore();
	$cat1C-> supprimerCategorie($_POST["idcat"]);
	header('Location: afficher_categories.php');

}

?>
