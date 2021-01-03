<?php
require_once '../../../Controller/ContrEvent.php';
require_once '../../../Model/events.php';

$evenement= new eventC();
$liste=$evenement->afficherEvent();
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
    <link href="css/chart.css" rel="stylesheet">


</head>
<body>

<div id="wrapper">

        <?php
            include('navBar.php');
        ?>

      
        <?php
/*include("../../../Controller/AfficherArticle.php"); */
 ?>
 <div id="container" style="width:100%">
         <h2>Statistique</h2>
         <div class="chart" style="display:inline-block;  "><canvas id="myChart2" width="500" height="400"></canvas></div>
         <div class="chart" style="display:inline-block;    "><canvas id="myChart1" width="500" height="400" style=margin-left:15%></canvas></div>
         <div class=""><canvas id="myChart" style="width:700px !important;height:500px !important" ></canvas></div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function(){
  $.ajax({
        url : 'participationEvent.php',       
        type : 'GET',
        dataType : 'json', // On désire recevoir du HTML
        success : function(data){ // code_html contient le HTML renvoyé
            var nomEv = [];
            var nbRes = []
            data.map(function(row){
                nomEv.push(row['nomEv']);
                nbRes.push(row['nbParticipation']);
            })
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: nomEv,
                    datasets: [{
                        label: 'Nombre de réservation',
                        data: nbRes,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        
        }
    }); 
    $.ajax({
        url : 'genre.php',       
        type : 'GET',
        dataType : 'json', // On désire recevoir du HTML
        success : function(data){
            console.log(data)
            
            var ctx = document.getElementById('myChart1').getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Homme','Femme'],
                    datasets: [{
                        label: '# of Votes',
                        data: [data[0]['h'],data[0]['f']],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }
    })
    $.ajax({
        url : 'eventLieu.php',       
        type : 'GET',
        dataType : 'json', // On désire recevoir du HTML
        success : function(data){
            nomLieu = [];
            nbEv = [];
            var nomEv = [];
            var nbRes = []
            data.map(function(row){
                nomEv.push(row['emplacementL']);
                nbRes.push(row['nbEv']);
            })
            var ctx = document.getElementById('myChart2').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: nomEv,
                    datasets: [{
                        label: "Nombre d'evenement par lieu",
                        data: nbRes,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }
    })
})
</script>
</body>
</html>