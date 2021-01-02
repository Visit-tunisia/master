<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<title>Generic - Forty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/style.css" />
	</head>
	<body class="is-preload" id="body">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header 
					id="header" class="header" style="color: black;">
						<img src="assets/img/logo.png" width="10%" class="logo">
						<!-- <a href="index.html" class="logo"><strong>Forty</strong></a> -->
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Home</a></li>
							<li><a href="landing.html">Landing</a></li>
							<li><a href="generic.html">Geric</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="#" class="button primary fit">Get Started</a></li>
							<?php
								if(isset($_SESSION['role'])){
									echo('<li><a href="http://localhost/project/master/view/login_projet/deconnexion.php" class="button fit">Log Out</a></li>');
								}else{
									echo('<li><a href="http://localhost/project/master/view/login_projet/login.php" class="button fit">Log In</a></li>');
								}
							?>
							
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Évènements</h1>
									</header>
									<span class="image main"> <img src="http://localhost/project/master/view/temp/assets/img/e.jpg" alt="" /> </span>
									<input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Search for names..">
									<div id="myItems">

									<div class="grid-container">
									
									
												<?php 
												$servername = "localhost";
												$username = "root";
												$password = "";
												try {
													$conn = new PDO("mysql:host=$servername;dbname=projet", $username, $password);
													// set the PDO error mode to exception
													$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
												
												
												} catch(PDOException $e) {
													echo "Connection failed: " . $e->getMessage();
												}

												
$limit = 10;
$query = "SELECT count(*) FROM evenement";

$s = $conn->query($query);
$total_results = $s->fetchColumn();
$total_pages = ceil($total_results/$limit);

if (!isset($_GET['page'])) {
    $page = 1;
} else{
    $page = $_GET['page'];
}



$starting_limit = ($page-1)*$limit;
$show  = "SELECT * FROM evenement ORDER BY idEv DESC LIMIT ".$starting_limit.",".$limit."";

$r = $conn->prepare($show);
$r->execute();

while($res = $r->fetch(PDO::FETCH_ASSOC)):
	$res1=$conn->prepare(" SELECT emplacementL from evenement e, lieuevenement l where e.idL=l.idL ; ");
													$res1->execute();
													$row = $res1->fetch(PDO::FETCH_ASSOC);
	?>
	<div class="card" style="width: 600px;">
	<img src="img_dir/<?php echo $res["imageEv"]; ?>"style="max-width:600px;max-height:300px;" >
	<?php
	
	echo('
	<div class="card-body">
	<div class="card-title" style="display:inline;">'.$res["nomEv"].'</div>
	<p class="card-text"  style=" margin-left:80%;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">	<path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>	<path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>' .$res["dateEv"].'</p>
	<p class="card-text" style=" margin-left:85%; margin-top:-20px"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/><path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>'.$row['emplacementL'].'</p>
	<center>
	<p class="card-text">'.$res["pdiscripEv"].'</p>
	</center>
	<center>
	<button class="btn btncard" style="margin-top:25px;"><a href="http://localhost/project/master/view/temp/evenement.php?id='.$res["idEv"].'">Lire la suite</a></button> </br>
	<!--<button  class="btn btncard" ><a href="http://localhost/project/master/view/temp/modifier_ev/modifierEv.php?id='.$res["idEv"].'" >Modifier</a></button> -->
	<form action="delete.php" method="post">
	<input type="hidden" value="'.$res["idEv"].'"  name="idEv" />
	 <!--<button class="btn btncard" style="margin-top=2px;"><a>Supprimer</a></button>-->
	</center>
	</form>
	</div>
'); ?>
</div>
<?php
endwhile;

?>
										
										</div>
									</div>
									<!--<div class="card" >
									<div class="card-body">
								    <center>	<button class="btn btncard"><a href="http://localhost/project/master/view/temp/ajout_ev/ajout.php" >Ajouter un évènement</a></button> </center>
									</div>
									</div>-->

								</div>
							</section>
							<center> <?php						
 
for ($page=1; $page <= $total_pages ; $page++):?>

<a   href='<?php echo "?page=$page"; ?>' ><?php  echo $page; ?></a>

<?php endfor; 

			?>  </center>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
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
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">esprit@esprit.tn</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(+216) 00 000 000</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>Somewhere in Ariana<br />

										Tunisia</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons" id="icons">
								<li><a href="#" class="icon brands alt fa-twitter"><span class="lab">Twitter</span></a></li>
								<li><a href="#" class="icon brands alt fa-facebook-f"><span class="lab">Facebook</span></a></li>
								<li><a href="#" class="icon brands alt fa-instagram"><span class="lab">Instagram</span></a></li>
								<li><a href="#" class="icon brands alt fa-github"><span class="lab">GitHub</span></a></li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="lab">LinkedIn</span></a></li>
							</ul>

						</div>
					</footer>

			</div>

		<!-- Scripts -->
		<script src="script.js" ></script>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>