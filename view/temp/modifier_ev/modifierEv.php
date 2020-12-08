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
                $req=" SELECT * from evenement where idEv=$id; ";
				foreach ($conn->query($req) as $res)
                { echo ('
                    <input type="text" placeholder="nomEv" name="nomEv" value="'.$res["nomEv"].'"/>
                    <input type="date" placeholder="dateEv" name="dateEv" value="'.$res["dateEv"].'"/>
                    <input type="text" placeholder="idL"  name="idL" value="'.$res["idL"].'"/>
                    <input type="number" placeholder="nbpEv" name="nbpEv" value="'.$res["nbpEv"].'"/>
                    <input type="text" placeholder="pdiscripEv" name="pdiscripEv" value="'.$res["pdiscripEv"].'"/>
                    <input type="text" placeholder="imageEv" name="imageEv" value="'.$res["imageEv"].'"/>
                    <input type="text" placeholder="discripEv" name="discripEv" value="'.$res["discripEv"].'"/>
                    <input type="hidden" value="'.$res["idEv"].'"  name="idEv" />

                    ');
                }
            ?>


            <button>Ajouter</button>
        </form>

        </div>
        </div>
    </body>
</html>