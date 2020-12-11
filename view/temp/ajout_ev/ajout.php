<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="sty.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    </head>
    <body>
        <div class="login-page">
        <div class="form">
        <form  method="POST" action="ajoutphp.php">
            <input type="text" placeholder="nomEv" name="nomEv" class="form-control"/>
            <input type="date" placeholder="dateEv" name="dateEv" class="form-control"/>
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
<select  class="form-control" name="idL"> 
    <?php
     $res1=$conn->prepare(" SELECT * from  lieuevenement ; ");
     $res1->execute();
     
                  while($row = $res1->fetch(PDO::FETCH_ASSOC))
{
  echo ('<option value = "'.$row['idL'].'">'.$row['emplacementL'].'</option>');
}
            ?>
            </select>
            <input type="number" placeholder="nbpEv" name="nbpEv" class="form-control"/>
            <input type="text" placeholder="pdiscripEv" name="pdiscripEv" class="form-control"/>
            <input type="text" placeholder="imageEv" name="imageEv" class="form-control"/>
            <input type="text" placeholder="discripEv" name="discripEv" class="form-control"/>

            <button>Ajouter</button>
        </form>

        </div>
        </div>
    </body>
</html>