<?php
require_once '../../../Controller/ContrLieu.php';
require_once '../../../Model/lieu.php';

$evenement= new lieuC();
$liste=$evenement->afficherLieu();
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
         <h2>Evenements</h2>
         

    <a href="..\..\..\view\temp\ajout_li\ajout.php" class="btn btn-info">Ajouter un Lieu</a>


   <!-- <?php
   if(isset($_POST['Searchh']))
   {
    echo "HELOOOO";
        $liste=$evenement->chercherArticleAuteur($_POST['queryy']);
    

   }

   ?> -->
                            <form  method="POST" >
        <input type="text" name="queryy" id="searchText" />
        <input type="button" value="Search" name="search"  id="search" />
    </form>


        <table class="table" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Emplacement</th>
                    <th>Capacité</th>
                    <th>
 <div class="dropdown">
<?php

    if(isset($_POST['button1'])) {
        $liste=$evenement->sortdate('asc');  
        }
    if(isset($_POST['button2'])) {
            $liste=$evenement->sortdate('desc');  
        }
    

         

  ?>
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Sort by
  </button>
  <form method="POST">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

     <input class="dropdown-item" type="submit" name="button1" value="Capacite descendant" />
    <input class="dropdown-item" type="submit" name="button2" value="Capacite ascendant" />

  </div>
</form>

</div>


                    </th>



                </tr>
            </thead>
            <tbody>

                <?php
require_once "C:\wamp64\www\project\master\config3.php";
                    $db = config::getConnexion();
                    foreach ($liste as $pr)
                    {  ?>
                        <tr>
                        <td><?php echo $pr['idL']; ?></td>
                <td><?php echo $pr['emplacementL']; ?></td>
                <td><?php echo $pr['capaciteL']; ?></td>

                <td><a class="btn btn-success" href="http://localhost/project/master/view/temp/modifier_li/modifierL.php?id=<?php echo $pr['idL']; ?>">Update</a></td>
                <td> <form action="deleteLieu.php" method="POST"><input type="hidden" value="<?php echo $pr['idL']; ?> " name="idL" /> <button class="btn btn-danger" ><a>Supprimer</a></button></form></td>
            </tr>
     
<?php
                    }


                ?>
                


            </tbody>




        </table>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
document.getElementById('search').addEventListener('click',function(){
  var search = $('#searchText').val();
  console.log(search);
  $.ajax({
        url : 'searchLieu.php',
        data : 'search=' + search,
        type : 'GET',
        dataType : 'json', // On désire recevoir du HTML
        success : function(data){ // code_html contient le HTML renvoyé
           $("tbody").empty();
           data.map(function(row){
               $('tbody').append('<tr><td>'+row['idL']+'</td><td>'+row['emplacementL']+'</td><td>'+row['capaciteL']+'</td><td><a class="btn btn-success" href="http://localhost/project/master/view/temp/modifier_li/modifierL.php?id='+row["idL"]+'">Update</a></td><td> <form action="deleteLieu.php" method="POST"><input type="hidden" value="<?php echo $pr['idL']; ?> " name="idL" /> <button class="btn btn-danger" ><a>Supprimer</a></button></form></td> </tr>')
           })
        }
     }); 
})
</script>
</body>
                                                                             