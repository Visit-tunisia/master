<!DOCTYPE html>

<?PHP
session_start();

include "../core/compteC.php";


    $user=$_POST['username'];
   
    $mdp=$_POST['password'];
    if($_POST['username'] ==""){
		
		
		location ('location : login.php');
    

    }else{
        $compteC=new compteC();
        $result=$compteC->authentification($user,$mdp);
        $resultadmin=$compteC->recuperercompteadmin($user,$mdp);
        if ($resultadmin->fetch() == false)
        {
            if ($result->fetch() == false)
               {
            echo 'Pas de résultat';
               }else{
            $_SESSION["username"] = $user;
            
         
       

            header('Location: checkout_billing_info.php');
          
        }
    
        }else{
          
            $_SESSION["username"] = $user;
            echo$_SESSION["username"];
            header('Location: charts-flot.php');
            echo 'Pas de résultat3';
        }
       
        echo 'Pas de résultat4';
}
