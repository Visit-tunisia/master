<?php

include('../../../Controller/ContrArticle.php');

if(isset($_POST["Auteur"]) && 
        isset($_POST["date"]) &&
        isset($_POST["titre"]) && 
        isset($_POST["login"]) && 
        isset($_POST["Description"]))
{
	
	 $ArtiC = new articleC();
	 $articlec=new article($_POST['titre'],$_POST['Description'],$_POST['Auteur'],$_POST['date']);

    /*$articlec->Auteur= $_POST['Auteur'];
	$articlec->date= $_POST['date'];
	$articlec->Desc= $_POST['Description'];
	$articlec->titre= $_POST['titre']; */


	 $ArtiC->ajouterArticle($articlec);
	 /*

	$result = $conn->query($sql);
	if($result == TRUE)
	{
		echo "new row created";
	}
	else
	{
		echo "error" . "<br>" .$conn->error;

	}
	$conn->close();
} */
}

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

<body id="page-top">
<div class="container">
<form action="" method="post" class="form">

<table border="1" class="table">



<tr>
	
	<td><label>Auteur</label>
		<input type="text" name="Auteur" maxlength="20" size="20">
	</td>
	
</tr>
<tr>
	<td><label for="date">Date</label>
		<input type="date" name="date">
	</td>
	
</tr>
<tr>
	<td><label>Titre </label>
		<input type="text" name="titre" maxlength="20" size="20">
	</td>
	
</tr>
<tr>
	<td><label for="comment">Description</label>
		<textarea type="text" name="Description" cols="80" row="150"></textarea> </td>
	
</tr>

<tr>
			
			<td><button type="Submit"  name="Submit" >submit</button>
				<!--<input type="Submit" value="Envoyer" name="submit"> -->
				<input type="Submit" value="Annuler"></td>
	
</tr>



</table>

</form>

</body>
</html>