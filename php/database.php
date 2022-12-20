<?php 

try {
	$mysql=mysqli_connect("localhost","root","","test");
} catch (Exception $e) {
	die("Nous n'avons pas pu nous connecter à votre base de données !");
}


?>