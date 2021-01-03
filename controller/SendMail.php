<?php
//THIS IS JUST AN EXPLICATION FILE
	//include PHPMailerAutoLoad.php
include_once 'ContrArticle.php';
include_once '../Model/Articles.php';

include_once 'ContrNewsLetter.php';
include_once '../Model/NewsLetter.php';
//echo $totalP;


$Arti= new ArticleC();

$liste=$Arti->returnLatestArticle();

//echo 'aaaaaaaaaaaaa';

//echo $liste['AuteurArticle'];


$Mails= new NewsLetterC();

$Emails=$Mails->AfficherNewsLetter();
//$totalP=$articlee->calcTotalRows($perpage);







	include('../lib/phpmailer/PHPMailerAutoLoad.php');
	//create an instance of PHPMailer
	$mail = new PHPMailer();
	//set a host
	$mail->Host = "smtp.gmail.com";
	//enable SMTP
	//$mail->isSMTP();
	$mail->IsSMTP();
	$mail->Host = "smtp.gmail.com";

	$mail->SMTPDebug = 2;
	//set authentification to true
	$mail->SMTPAuth = true;
	//set login details for Gmail account

	$mail->Username = "visitunisia1@gmail.com";
	$mail->Password = "123456789.V";

	//set type of protection
	$mail->SMTPSecure = "ssl"; //or we can use TLS
	//set a port
	$mail->Port = 465; // or 587 if TLS
	//set a subject
	$mail->Subject = 'New article'.$liste['TitreArticle'];
	//set HTML to true
echo $liste['AuteurArticle'];

	$mail->isHTML(true);
	//set a body
	$body = "Hello ! Check out our new article ' ".$liste["TitreArticle"]."'from our author ".$liste["AuteurArticle"];
	$mail->Body=$body;
	//set who is sending an email

	$mail->setFrom('visitunisia1@gmail.com','Visit Tunisia');
	//set where we are sending email (recipients)
	foreach ($Emails as $mai)
{
                      
                        $mail->addAddress($mai['Email']);
                        //echo $mai['IdNewsLetter'];
               // echo $mai['Email'];
    

              }
	
	//send an email
	if($mail->send())
	{
		echo 'mail sent';
	}
	else
	{
		echo $mail->ErrorInfo;
	}

?>