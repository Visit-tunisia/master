<?PHP
include "D:/wamp/www/project/master/controller/contrcompte.php";

$compte = new compteC();

if (isset($_GET["idUtili"])) {
    $compte->supprimercompte($_GET["idUtili"]);
    header('Location:http://localhost/project/master/view/temp/comptea.php');
}else{
    echo "error : try again ";
    echo $_POST['idUtili'];
}
?>
