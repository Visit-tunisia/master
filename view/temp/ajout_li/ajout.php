<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="sty.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    </head>
    <body>
        <div class="login-page">
        <div class="form">
        <form  method="POST" action="ajoutphp.php"  enctype="multipart/form-data">
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
                
                

?>

            <input type="text" placeholder="emplacementL" name="emplacementL" class="form-control"/>
            <input type="text" placeholder="capaciteL" name="capaciteL" class="form-control"/>


            <button>Ajouter</button>
        </form>

        </div>
        </div>
    </body>
</html>