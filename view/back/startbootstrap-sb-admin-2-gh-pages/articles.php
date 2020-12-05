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
                    <th>date</th>
                    <th>titre</th>
                    <th>Description</th>

                </tr>
            </thead>
            <tbody>
                <?php
              /*  if($result->num_rows>0)
                { */
                    foreach ($liste as $pr)
                    {  ?>
                        <tr>
                        <td><?php echo $pr['IdArticle']; ?></td>
                <td><?php echo $pr['AuteurArticle']; ?></td>
                <td><?php echo $pr['DateArticle']; ?></td>
                <td><?php echo $pr['TitreArticle']; ?></td>
                <td><?php echo $pr['DescriptionArticle']; ?></td>
                <td><a href="ModifierArtic.php?IdArticle=<?php echo $pr['IdArticle']; ?>">Update</a></td>
                <td><a href="../../../Controller/SupprimerArtic.php?IdArticle=<?php echo $pr['IdArticle']; ?>">Delete</a></td>
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