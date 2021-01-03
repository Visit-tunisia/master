<?PHP
include "../core/livraisonC.php";




 
   
   
    $livraisonC=new livraisonC();
    $livraisonC->updatenotification();
    header('Location: checkout_billing_info.php');
  
?>