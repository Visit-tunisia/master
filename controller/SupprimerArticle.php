<?php
include_once('../config.php');


if (isset($_GET['IdArticle']))
{
$user_id=$_GET['IdArticle'];

 $sql= "DELETE FROM `articles` WHERE `IdArticle`='$user_id'";

$result= $conn->query($sql);
    if($result == TRUE)
    {
        echo "Deleted successfully.";

    }
    else
    {
        echo 'Error'. $sql. "<br>" . $conn->error;
    }


}






?>