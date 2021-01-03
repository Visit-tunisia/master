<?PHP
include "../entity/livraison.php";
include "../core/livraisonC.php";
if ( isset($_POST['username']) && isset($_POST['adress']) && isset($_POST['telephone'])  ){
$username=$_POST['username'];
$adress=$_POST['adress'];
$telephone=$_POST['telephone'];
$numcommande=1;
$total=200;
$idclient=1;
$etat="non_traiter";
$notifications="false";
//$date_liv= new date();
$livraison =new livraison($idclient,$username,$adress,$telephone,$numcommande,$total,$etat);// constructeur

$liv=new livraisonC();
$liv->ajouterlivraison($livraison,$notifications);
header('Location: afficher_liv.php');

}else{
	echo "vĂ©rifier les champs";
}
?>