<?php
require_once  'C:\wamp64\www\ProjWeb\master\config2.php';
$db = config::getConnexion();

$req1 = $db->query("SELECT COUNT(C.IdCommentaire) as total ,A.TitreArticle FROM commentaire C , articles A where C.IdArticle=A.IdArticle GROUP by A.IdArticle");
$req1->execute();
$liste = $req1->fetchALL(PDO::FETCH_OBJ);
$req2 = $db->query("SELECT COUNT(IdCommentaire) as nb FROM commentaire");
$nb = $req2->fetch();

$dataPoints = array();
foreach ($liste as $row) {
	$dataPoints[] = array('label' => $row->TitreArticle, 'y' => $row->total / intval($nb['nb']) * 100);
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<script>
		window.onload = function() {


			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,

				theme: "light2",
				title: {
					text: "Number of comments by article "
				},

				data: [{
					type: "column",
					yValueFormatString: "#,##0.00\"%\"",
					indexLabel: "{label} ({y})",

					dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
				}]
			});
			chart.render();

		}
	</script>
</head>

<body>
	<div id="chartContainer" style="height: 370px; width: 100%;"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>