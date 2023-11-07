<?php
//include(backend/Database.php");
 // Realizar la conexión a la base de datos
 $servername = "localhost";
 $username = "banana_chefincabo";
 $password = "XM9jPrEo24";
 $dbname = "banana_chefincabo";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
	 die("Conexión fallida: " . $conn->connect_error);
 }
?>
