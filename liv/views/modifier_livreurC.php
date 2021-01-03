<?PHP
include "../entity/livreur.php";
include "../core/livreurC.php";



if (isset($_POST['id'])){
    $cin=$_POST['cin'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $etat="";
    $livreur =new livreur($cin,$nom,$prenom,$email,$etat);
    $livreurC=new livreurC();
    $livreurC->modifierlivreur($livreur,$_POST['id']);
    header('Location: consulter_livreur.php');
  }
?>