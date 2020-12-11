<?php
include '../../Controller/ContrArticle.php';
include_once '../../Model/Articles.php';
include '../../Controller/ContrCommentaire.php';
include_once '../../Model/Commentaire.php';

$articleC = new articleC();
$error = "";

$Commentairee= new CommentaireC();
$liste=$Commentairee->afficherCommentairesarticle($_GET['IdArticle']);


                if (isset($_GET['IdArticle'])) {
                    $article = $articleC->recupererarticle($_GET['IdArticle']);
                

?>

<?php

if(isset($_POST['Submit']))
{
	



	 $CommentC = new CommentaireC($_POST['CommentaireText'],$_GET['IdArticle']);
	// echo $datetime;
	 //echo $datetimeC;

	 

    /*$articlec->Auteur= $_POST['Auteur'];
	$articlec->date= $_POST['date'];
	$articlec->Desc= $_POST['Description'];
	$articlec->titre= $_POST['titre']; */


	 $Commentairee->ajouterCommentaire($_POST['CommentaireText'],$_GET['IdArticle']);



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
header("location: SingleArticle.php?IdArticle=".$_GET['IdArticle']);

}


?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Landing - Forty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Note: The "styleN" class below should match that of the banner element. -->
					<?php include_once('header.php');?>

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>Blog</h1>
							</header>
							<div class="content">
								<p>Lorem ipsum dolor sit amet nullam consequat<br />
								sed veroeros. tempus adipiscing nulla.</p>
							</div>
						</div>
					</section>

				<!-- Main -->
				<section id="one">
								<div class="inner">
					
													<span class="image left"><img src="<?php echo $article['ImageUrl']; ?>" alt="" /></span>
														<h3><?php echo $article['TitreArticle']; ?></h3>
														<h6><?php echo $article['AuteurArticle']; ?></h6>
														<p>
													<?php echo $article['DescriptionArticle']; ?></p>
													
				</div>
			</section>

<div class="inner" style="width: 50%; margin-left: 10%;">

<form method="post" action="">
									<div class="fields">
									
										<div class="field">
											<label for="message">Message</label>
											<textarea name="CommentaireText" id="message" rows="6"></textarea>
										</div>
									</div>
									<button class="btn btn-primary" type="Submit"  name="Submit" >submit</button>
									
								</form>
</div>


<?php   
								foreach ($liste as $pr)
                    			{
                    ?>

	<dt><?php ?></dt>
		<dd>
			<div style="border: 5px; margin-left: 20%;">
			<p style="border:3px; border-style:solid; border-color:black; padding: 1em; width:60%;"><?php echo $pr->texte; ?>
			</div>
				
			</p>
		</dd>

<?php
}
}
?>
				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<!--<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section> -->
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">information@untitled.tld</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(000) 000-0000 x12387</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>1234 Somewhere Road #5432<br />
										Nashville, TN 00000<br />
										United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			

	</body>
</html>