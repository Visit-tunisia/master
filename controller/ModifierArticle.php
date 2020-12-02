<?php
include_once '../config.php';

if (isset($_POST['Modifier']))
{
	$IdArticle=$_POST['Id'];
	$AuteurArticle=$_POST['Auteur'];
	$DateArticle=$_POST['date'];
	$TitreArticle=$_POST['titre'];
	$DescriptionArticle=$_POST['Description'];

	$sql= "UPDATE `articles` SET `AuteurArticle`='$AuteurArticle',`DateArticle`='$DateArticle',`TitreArticle`='$TitreArticle',`DescriptionArticle`='$DescriptionArticle' WHERE `IdArticle`= '$IdArticle'";
	$result= $conn->query($sql);
	if($result == TRUE)
	{
		echo "Updated successfully.";

	}
	else
	{
		echo 'Error'. $sql. "<br>" . $conn->error;
	}
}



if(isset($_GET['IdArticle']))
{	
	$user_id=$_GET['IdArticle'];

	$sql= "SELECT * FROM `articles` WHERE `IdArticle`='$user_id'";
	$result=$conn->query($sql);

	if($result->num_rows>0)
	{
		while($row = $result->fetch_assoc())
		{
			$IdArticle=$row['IdArticle'];
			$AuteurArticle=$row['AuteurArticle'];
			$DateArticle=$row['DateArticle'];
			$TitreArticle=$row['TitreArticle'];
			$DescriptionArticle=$row['DescriptionArticle'];


		}




	 ?>
<html>
<body>
	<h2>Article Update</h2>
<form action="" method="post">

<fieldset>
<tr>
	
	<td><label>Auteur</label>
		<input type="text" name="Auteur" maxlength="20" size="20" value="<?php echo $AuteurArticle; ?>">
		<br>
		<input type="hidden" name="Id" value="<?php echo $IdArticle; ?>">
	</td>
	
</tr>
<tr>
	<td><label for="date">Date</label>
		<input type="date" name="date" value="<?php echo $DateArticle; ?>">
		<br>
	</td>
	
</tr>
<tr>
	<td><label>Titre </label>
		<input type="text" name="titre" maxlength="20" size="20" value="<?php echo $TitreArticle; ?>">
		<br>
	</td>
	
</tr>
<tr>
	<td><label for="comment">Description</label>
		<textarea type="text" name="Description" cols="80" row="150" value="<?php echo $DescriptionArticle; ?>"></textarea> </td>
		<br>
	
</tr>

<tr>
			
			<td><button type="Submit"  name="Modifier" >Modifier</button>
				<!--<input type="Submit" value="Envoyer" name="submit"> -->
				<input type="Submit" value="Annuler"></td>
	
</tr>


</fieldset>

</form>
</body>
</html>


	<?php
	}else
	{
		header("location: afficherrarticle.php");

	}


}


?>