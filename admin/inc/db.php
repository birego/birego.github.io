<?php

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "bd_davimage_prod";

$conn = new mysqli($servername, $username, $password, $dbname);

  //check connection
 if ($conn->connect_error){
die("connection failed: ".$conn->connect_error);
 }

 try
{
$dbh = new PDO("mysql:host=".$servername.";dbname=".$dbname,$username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Erreur de connexion à la base des données: " . $e->getMessage());
}

?>