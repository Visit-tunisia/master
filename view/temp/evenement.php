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
					<header id="header" class="header" style="color: black;">
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
							<li><a href="#" class="button fit">Log In</a></li>
						</ul>
					</nav>

			<!-- Main -->
			<div id="main" class="alt">
								<?php
					//connexion à la base
					$servername = "localhost";
					$username = "root";
					$password = "";

					try {
						$conn = new PDO("mysql:host=$servername;dbname=projet", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						echo "";
					} catch(PDOException $e) {
						echo "Connection failed: " . $e->getMessage();
					}

					if (isset($_GET['id'])) {
						$idEv = $_GET['id'];
						
					}
					

					$req="SELECT * from evenement where idEv=$idEv; ";

					$res= $conn->prepare($req);
					$res->execute();
     
                  $row = $res->fetch(PDO::FETCH_ASSOC)
					
					

					?>
				<!-- One -->
					<section id="one">
						<div class="inner">
							<header class="major">
								<h1><?php echo $row["nomEv"]; ?></h1>
							</header>
							<span class="image main"><img src="images/pic11.jpg" alt="" /></span>
							<div style="width: 70%;">
							<?php echo $row["discripEv"]; ?>
							</div>
									</div>
								<center><button class="btncard" style="margin-bottom: 20px;">Participer</button></center>
								
							   <center><button    class="btncard"  onClick="window.print()">							   <svg  width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-printer" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M11 2H5a1 1 0 0 0-1 1v2H3V3a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h-1V3a1 1 0 0 0-1-1zm3 4H2a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h1v1H2a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1z"/><path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM5 8a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H5z"/><path d="M3 7.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/></svg>
                       Imprimer</button></center>
							</section>

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