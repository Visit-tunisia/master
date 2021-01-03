<?php
include 'D:/wamp/www/project/master/controller/contrcompte.php';
include_once 'D:/wamp/www/project/master/Model/compte.php';

$compte= new compteC();
$liste=$compte->Affichercompte();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>

<div id="wrapper">

        <?php
            include('navBar.php');
        ?>








      
 <div id="container">
         <h2>comptes</h2>

    <?php
//la recherche

if (isset($_GET['recherche'])) {
    $search_value = $_GET["recherche"];
    $liste = $compte->recherche($search_value);
}
?>

   <?php


 if(isset($_POST['button1'])) {
            $liste=$compte->sortdate1();  
        }
         if(isset($_POST['button2'])) {
            $liste=$compte->sortdate2();  
        }
         if(isset($_POST['button3'])) {
            $liste=$compte->sortdate3();  
        }
         if(isset($_POST['button4'])) {
            $liste=$compte->sortdate4();  
        }
 
  ?>
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Sort by
  </button>
  <form method="POST">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

     <input class="dropdown-item" type="submit" name="button1" value="login descendant" />
    <input class="dropdown-item" type="submit" name="button2" value="nom ascendant" />
   <input class="dropdown-item" type="submit" name="button3" value="prenom/modification descendant" /></button>
    <input class="dropdown-item" type="submit" name="button4" value="password/modification ascendant" />

 <!--   <a class="dropdown-item" name="button1" type="submit" href="">Date de publication descendant</a>
    <a class="dropdown-item" href="#">Date de publication ascendant</a>
    <a class="dropdown-item" href="#">Date de creation/modification ascendant</a>
    <a class="dropdown-item" href="#">Date de creation/modification ascendant</a> -->
  </div>
</form>
        
 <form method="get" action="comptea.php">
                            <input type="text" class=" btn btn-dark float-left" name="recherche" placeholder="">
                            <input type="submit" class="btn btn-dark float-left" value="Chercher">
                        </form>
                            
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>login</th>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>adresse mail</th>
                    <th>date de naissance</th>
                    <th>mot de passe</th>
                    

                </tr>
            </thead>
            <tbody>

                <?php
             
                    foreach ($liste as $pr)
                    {  ?>
                        <tr>
                        <td><?php echo $pr['idUtili']; ?></td>
                <td><?php echo $pr['login']; ?></td>
                <td><?php echo $pr['prenom']; ?></td>
                <td><?php echo $pr['nom']; ?></td>
                <td><?php echo $pr['mail']; ?></td>
                <td><?php echo $pr['datedenaissance']; ?></td>
                <td><?php echo $pr['password']; ?></td>
                <td><a class="btn btn-success" href="modifiercom.php?idUtili=<?php echo $pr['idUtili']; ?>">Update</a></td>
         <td><a class="btn btn-danger"href="../../controller/supp.php?idUtili=<?php echo $pr['idUtili']; ?>">Delete</a></td>
 <!-- <!-- - <td> <form method="POST" action="D:/wamp/www/ooo/controller/supp.php"> --> -->
                                            <!-- <input type="submit" name="supprimer" value="supprimer" class="btn btn-danger"> -->
                                            // <!-- <input type="hidden" value=<?PHP //echo $pr['idUtili']; ?> name="idUtili"> -->
                                        
                                        <!-- </form> -->
                                    <!-- </td> -->
            </tr>

<?php
                    }
               // }

                ?>
                


            </tbody>




        </table>
</div>
</div>
</body>
</html>