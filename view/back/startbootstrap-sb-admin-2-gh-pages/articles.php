<?php
include '../../../Controller/ContrArticle.php';
include_once '../../../Model/Articles.php';

$articlee= new articleC();
$liste=$articlee->AfficherArticle();

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

      
        <?php
/*include("../../../Controller/AfficherArticle.php"); */
 ?>
 <div id="container">
         <h2>Articles</h2>
         
    <a href="ajouterArtic.php" class="btn btn-info">Ajouter un article</a>
   



        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Auteur</th>
                    <th>Date de publication</th>
                    <th>Date de creation / modification</th>
                    <th>Titre</th>
                    <th>Image Url</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>
 <div class="dropdown">
<?php

 if(isset($_POST['button1'])) {
            $liste=$articlee->sortdate1();  
        }
         if(isset($_POST['button2'])) {
            $liste=$articlee->sortdate2();  
        }
         if(isset($_POST['button3'])) {
            $liste=$articlee->sortdate3();  
        }
         if(isset($_POST['button4'])) {
            $liste=$articlee->sortdate4();  
        }

         

  ?>
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Sort by
  </button>
  <form method="POST">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

     <input class="dropdown-item" type="submit" name="button1" value="Date de publication descendant" />
    <input class="dropdown-item" type="submit" name="button2" value="Date de publication ascendant" />
   <input class="dropdown-item" type="submit" name="button3" value="Date de creation/modification descendant" /></button>
    <input class="dropdown-item" type="submit" name="button4" value="Date de creation/modification ascendant" />

 <!--   <a class="dropdown-item" name="button1" type="submit" href="">Date de publication descendant</a>
    <a class="dropdown-item" href="#">Date de publication ascendant</a>
    <a class="dropdown-item" href="#">Date de creation/modification ascendant</a>
    <a class="dropdown-item" href="#">Date de creation/modification ascendant</a> -->
  </div>
</form>

</div>


                    </th>



                </tr>
            </thead>
            <tbody>

                <?php
             //   $date = date('yy-m-d h:i:s');
            // echo $date;
              /*  if($result->num_rows>0)
                { */
                    foreach ($liste as $pr)
                    {  ?>
                        <tr>
                        <td><?php echo $pr['IdArticle']; ?></td>
                <td><?php echo $pr['AuteurArticle']; ?></td>
                <td><?php echo $pr['DateArticle']; ?></td>
                <td><?php echo $pr['DateCreation']; ?></td>
                <td><?php echo $pr['TitreArticle']; ?></td>
                <td style="white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 100px;"><?php echo $pr['ImageUrl']; ?></td>
                <td style="display: block;
  width: 100px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;"><?php echo $pr['DescriptionArticle']; ?></td>
                <td><?php echo $pr['Status']; ?></td>
                <td><a class="btn btn-success" href="ModifierArtic.php?IdArticle=<?php echo $pr['IdArticle']; ?>">Update</a></td>
                <td><a class="btn btn-danger"href="../../../Controller/SupprimerArtic.php?IdArticle=<?php echo $pr['IdArticle']; ?>">Delete</a></td>
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