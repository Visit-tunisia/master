<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <div class="login-page">
        <div class="form">
        <form  method="POST" action="modifier.php">
            <?php 
            
                $servername = "localhost";
                $username = "root";
                $password = "";
                                                                

                //PDO Database Connection
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=projet", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch(PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
                }
                if (isset($_GET['id'])) {
                    $id= $_GET['id'];
                } else {
                    // Fallback behaviour goes here
                }
                $req=" SELECT * from lieuevenement where idL=$id; ";
				foreach ($conn->query($req) as $res)
                { echo ('
                    <input type="text" placeholder="emplacementL" name="emplacementL" value="'.$res["emplacementL"].'"/>
                    <input type="text" placeholder="capaciteL" name="capaciteL" value="'.$res["capaciteL"].'"/>
                    <input type="hidden" value="'.$res["idL"].'"  name="idL" />

                    ');
                }
            ?>


            <button>Ajouter</button>
        </form>

        </div>
        </div>
    </body>
</html>