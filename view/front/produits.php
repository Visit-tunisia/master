<?php
include('../../Controller/ProduitsCore.php');
include('../../Controller/config.php');
include('../../Controller/CategorieCore.php');

$CatCore=new CategorieCore();
$listeCat=$CatCore->afficherCategories();

$nomp="";
$cat="";
$tri="nom";
if (isset($_POST['rechercher'])) {
  
     $nomp = $_POST['nom'];
    $cat=$_POST['cat'];
    $tri=$_POST['ordre'];
}
$produits1C=new ProduitsCore();
$listeProduits=$produits1C->afficherProduits($nomp, $cat, $tri);

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
		<?php include_once('header.php');?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1> Nos produits </h1>
							</header>
							
						</div>
					</section>
					<section id="contact" class="inner">
					<form  method="POST" action="produits.php">
							<h3> Critères de recherche </h3>
							<div class="fields">
                                    <div class="field half">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nom du produit" name="nom" value="<?php echo $nomp; ?>">
                                    </div>
                                    <div class="field half">
                                       <select name ="cat" id="cat" class="select" required="true" placeholder="Catégorie" >
									   <option value="0" <?php if ($cat=="") { ?>selected="true" <?php } ?>>Toutes les catégories</option>
                                            <?PHP
                                                    foreach($listeCat as $row){
                                            ?>
                                            <option value=<?php echo $row['idcat']; ?> <?php if ($cat==$row['idcat']) { ?>selected="true" <?php } ?>><?php echo $row['nomcat']; ?></option>
                                          <?php     
                                           }
                                            ?>
                                            </select>
											
											  
                                    </div>
									<br><br>
									<div class="field half">
									<label>Trier par </label>
									<select name ="ordre" id="ordre" class="select" required="true" placeholder="Trier par"  >
									   <option value="nom" <?php if ($tri=="nom") { ?>selected="true" <?php } ?>>Nom du produit</option>
									   <option value="prix" <?php if ($tri=="prix") { ?>selected="true" <?php } ?>>Prix du produit</option>
                                            
                                            </select>
                                       
                                    </div>
									<div class="field half">
									
                                       <input type="submit" value="Rechercher" class="btn btn-info"  name="rechercher"/>
                                    </div>
                                </div>
       
    </form>
</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<?PHP
                                   foreach($listeProduits as $row){
                                    $cat=$produits1C->afficherCat($row['categorie']);
    
                                  ?>
								<article>
									<span class="image">
										<img src="images_produits/<?php echo $row['image']; ?>" alt="" />
									</span>
									<header class="major">
										<h2><a href="details_produit.php?idprod=<?php echo $row['idprod']; ?>" class="link"><?php echo $row['nom']; ?></a></h2>
										<p><?PHP echo $cat; ?></p>
										<p> <h3><?PHP echo $row['prix']; ?> DT </h3> </p>
									</header>
								</article>
								  <?PHP
}
?>
							</section>

						<!-- Two -->
							

					</div>

				<!-- Contact -->
					

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