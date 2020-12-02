<?php
include_once"../../../config.php";

$sql= 'SELECT * FROM `articles`';


$result= $conn->query($sql);

?>
<html lang="en">

<head>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  

</head>
<body>
<div class="container">
    <h2>Articles</h2>
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
                if($result->num_rows>0)
                {
                    while($row=$result->fetch_assoc())
                    {  ?>
                        <tr>
                        <td><?php echo $row['IdArticle']; ?></td>
                <td><?php echo $row['AuteurArticle']; ?></td>
                <td><?php echo $row['DateArticle']; ?></td>
                <td><?php echo $row['TitreArticle']; ?></td>
                <td><?php echo $row['DescriptionArticle']; ?></td>
                <td><a href="../../../Controller/ModifierArticle.php?IdArticle=<?php echo $row['IdArticle']; ?>">Update</a></td>
                <td><a href="../../../Controller/SupprimerArticle.php?IdArticle=<?php echo $row['IdArticle']; ?>">Delete</a></td>
            </tr>

<?php
                    }
                }

                ?>
                


            </tbody>




        </table>

</div>
</body>
</html>
