<?PHP
include "../entity/livreur.php";
include "../core/livreurC.php";
if ( isset($_POST['cin']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])   ){
$cin=$_POST['cin'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$etat="libre";
//$date_liv= new date();
$livreur =new livreur($cin,$nom,$prenom,$email,$etat);// constructeur

$liv=new livreurC();
$liv->ajouterlivreur($livreur);
header('Location: charts-flot.html');

}else{
	echo "vĂ©rifier les champs";
}
?>