<?php
//connexion à la base
$servername = "localhost";
$username = "root";
$password = "";




if (isset($_POST['login'])) {
    $login = $_POST['login'];
    echo $login;
}
if ($login == null){
    echo ("login est vide!!!!!!");
}

if (isset($_POST['pass'])) {
    $pwd=$_POST['pass'];
    echo $pwd;
}
if ($pwd == null){
     echo ("password est vide!!!!!!");
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=projet", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  $req=" SELECT idUtili,login_name,mot_de_passe,role from utilisateur where login_name='".$login."' and mot_de_passe='".$pwd."'; ";
  $res=$conn->query($req);
  $row = $res->setFetchMode(PDO::FETCH_ASSOC);
   if($res-> rowcount())
  {
    session_start();
    
    foreach($res as $row){
      $_SESSION['role']=$row['role'];
      $_SESSION['idUtili'] = $row['idUtili'];
      if( $row['role']=='admin'){
        header('Location: http://localhost/project/master/view/back/startbootstrap-sb-admin-2-gh-pages/Event.php');
      }else{
        header('Location: http://localhost/project/master/view/temp/generic.php');
      }
    }
   

  
  exit();
  }
  else
  {
    header('Location: http://localhost/project/master/view/login_projet/login.html');
    exit();
  }

?>