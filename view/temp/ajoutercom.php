<?php

include('../../../controller/contrcompte.php');
include_once "../../../model/compte.php";
if(isset($_POST['Submit']))
{
	
	 $comC = new compteC();

	 $datetime = $_POST['date'].' '.$_POST['time'];
	 $datetime = date("Y-m-d H:i:s",strtotime($datetime));
	 
	 $datetimeC = $_POST['dateC'].' '.$_POST['timeC'];
	 $datetimeC = date("Y-m-d H:i:s",strtotime($datetimeC));

	// echo $datetime;
	 //echo $datetimeC;

	if ($datetime <= $datetimeC) {
    $statuss='PUBLIE';
	}
	else
	{
	$statuss='NON PUBLIE';
	}


	 $articlec=new compte($_POST['login'],$_POST['prenom'],$_POST['nom'],$datetime,$datetimeC,$_POST['pass'],$pass);

    /*$comptec->login= $_POST['login'];
	$comptec->nom= $_POST['nom'];
	$comptec->prenom= $_POST['prenom'];
	$comptec->pass= $_POST['pass']; */


	 $comC->ajoutercompte($comptec);
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
	
	<td><label>login</label>
		<input type="text" name="login" maxlength="20" size="20">
	</td>
	
</tr>

<tr>
	<td><label for="date">Date de naissance</label>
		<input type="date" name="dateC" value="<?php $datee = date('Y-m-d'); echo $datee; ?>" readonly>
		<input type="time" name="timeC" value="<?php $timee = date('H:i'); echo $timee;  ?>" readonly>
	</td>
	
</tr>



<tr>
	<td><label for="date"></label>
		<input type="date" name="date">
		<input type="time" name="time">
	</td>
	
</tr>
<tr>
	<td><label>prenom </label>
		<input type="text" name="prenom" maxlength="20" size="20">
	</td>
	
</tr>
<tr>
	<td><label>nom </label>
		<input type="text" name="nom" maxlength="20" size="20">
	</td>
	
</tr>
<td><label>password </label>
		<input type="password" name="password" maxlength="20" size="20">
	</td>
	<td><label>mail </label>
		<input type="text" name="mail" maxlength="20" size="20">
	</td>




<tr>
			
			<td><button class="btn btn-primary" type="Submit"  name="Submit" >submit</button>
				<!--<input type="Submit" value="Envoyer" name="submit"> -->
				<input class="btn btn-warning" type="Submit" value="Annuler"></td>
	
</tr>



</table>

</form>

</body>
</html>