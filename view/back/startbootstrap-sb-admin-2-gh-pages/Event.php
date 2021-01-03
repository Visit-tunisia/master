<?php
require_once '../../../Controller/ContrEvent.php';
require_once '../../../Model/events.php';

$evenement= new eventC();
$liste=$evenement->afficherEvent();
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
    <link href="css/tableauDeBoard.css" rel="stylesheet">

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
        <a href="..\..\..\view\temp\ajout_ev\ajout.php" class="btn btn-info" id="btn">Ajouter un evenement</a>
    </form>


        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>image</th>
                    <th>Nom</th>
                    <th>Date évènement</th>
                    <!-- <th>Date fin évènement</th> -->
                    <th>Lieu</th>
                    <th>Nombre Participant</th>
                    <th>Petite Discription</th>
                    <th>Description</th>
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
                { */require_once "C:\wamp64\www\ProjWeb\master\config2.php";
                    $db = config::getConnexion();
                    foreach ($liste as $pr)
                    {  ?>
                        <tr>
                        <td><?php echo $pr['idEv']; ?></td>
                <td><?php echo $pr['imageEv']; ?></td>
                <td><?php echo $pr['nomEv']; ?></td>
                <td><?php echo $pr['dateEv']; ?></td>
                <!-- <td><?php echo $pr['datefinEv']; ?></td> -->
                <td><?php $sql1 =" SELECT emplacementL from  lieuevenement  where idL=".$pr['idL'].";";
                        $liste1 = $db->query($sql1);
                        foreach($liste1 as $row){
                            echo $row['emplacementL'];?></td>
                        <?php } ?>
                </td>

                <td style="white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 100px;"><?php echo $pr['nbpEv']; ?></td>
                <td style="display: block;
  width: 100px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;"><?php echo $pr['pdiscripEv']; ?></td>
                <td><?php echo $pr['discripEv']; ?></td> 
                <td><a class="btn btn-success" href="http://localhost/project/master/view/temp/modifier_ev/modifierEv.php?id=<?php echo $pr['idEv']; ?>">Update</a></td>
                <td> <form action="delete.php" method="POST"><input type="hidden" value="<?php echo $pr['idEv']; ?> " name="idEv" /> <button class="btn btn-danger" ><a>Supprimer</a></button></form></td>
            </tr>
     
<?php
                    }
               // }

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
        url : 'searchEvent.php',
        data : 'search=' + search,
        type : 'GET',
        dataType : 'json', // On désire recevoir du HTML
        success : function(data){ // code_html contient le HTML renvoyé
           $("tbody").empty();
           data.map(function(row){
               console.log("dkhal")
               $('tbody').append('<tr><td>'+row['idEv']+'</td><td>'+row['imageEv']+'</td><td>'+row['nomEv']+'</td><td>'+row['dateEv']+'</td><td>'+row['datefinEv']+'</td><td>'+row['emplacement']+'</td><td>'+row['nbpEv']+'</td><td>'+row['pdiscripEv']+'</td><td>'+row['discripEv']+'</td> <td><button class="btn btn-success" ><a href="http://localhost/project/master/view/temp/modifier_ev/modifierEv.php?id='+row["idEv"]+'">Update</a></button></td><td> <form action="delete.php" method="POST"><input type="hidden" value="<?php echo $pr['idEv']; ?> " name="idEv" /> <button class="btn btn-danger" ><a>Supprimer</a></button></form></td> </tr>')
           })
        }
     }); 
})
</script>
<style>
    #tab{
    position:relative;
    width:100%;
    max-width: 100%;
    table-layout: fixed;
}
#btn{
    margin-left: 47%;
    width:20%;
    margin-bottom: 10px;
    display: inline-block;


}
#search{
    display: inline-block;
    width:7%;
    margin-top: 10px;

}
#searchText{
    display: inline-block;
    width:20%;
    margin-bottom: 10px;
    margin-left: 5px;

}
.chart{
    position: relative;
   
    width:300px;
}

</style>
</body>
</html>