
<?php

include('../../Controller/ProduitsCore.php');
include_once "../../model/produits.php";
include('../../Controller/CategorieCore.php');
include('../../Controller/config.php');

$CatCore=new CategorieCore();
$listeCat=$CatCore->afficherCategories();
 
  

if (isset($_GET["idprod"])) 
{
    $produitC=new ProduitsCore();
    $result=$produitC-> recupererProduits($_GET['idprod']);
    foreach($result as $row)
    {
        $idprod = $row['idprod'];
        $nom=$row['nom']; 
        $prix=$row['prix'];
        $idcat=$row['categorie'];
        $description=$row['description'];
        $quantite=$row['quantite']; 
         $image=$row['image']; 
    } 
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
		<title> Visit Tunisia </title>
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
					

				<!-- Menu -->
					

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1> Détails du produit </h1>
							</header>
							<div class="content">
								
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
						  <?PHP
                                                    foreach($listeCat as $row){
                                            
                                             if ($idcat==$row['idcat']) {  $cat= $row['nomcat']; }
                                           
                                           }
                                            ?>

						<!-- Two -->
							<section id="two" class="spotlights">
								<section>
									<a href="generic.html" class="image">
										<img src="images_produits/<?php echo $image; ?>" alt=""  data-position="center center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3> <?php echo $nom; ?></h3>
											</header>
											<p> Catégorie : <?PHP echo $cat; ?></p>
											<p> Description  : <?PHP echo $description; ?></p>
											<p> Quantité  : <?PHP echo $quantite; ?></p>
											<p> Prix  : <?PHP echo $prix; ?></p>
											<ul class="actions">
												<li><a href="#" class="button">Ajouter au panier</a></li>
											</ul>
										</div>
									</div>
								</section>
								

					</div>

				

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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>