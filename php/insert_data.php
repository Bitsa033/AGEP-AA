<?php 
require 'database.php';
if (!empty($_POST["classroom"]) && !empty($_POST["price"]) && !empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["gender"]) ) {
	$classroom=$_POST["classroom"];
	$name=$_POST["name"];
	$surname=$_POST["surname"];
	$gender=$_POST["gender"];
	$price=$_POST["price"];

	$commande="INSERT INTO `student`(`id`, `name`, `surname`, `gender`) VALUES ('',?,?,?)";
	$exe=$mysql->prepare($commande);
	$exe->execute([$name,$surname,$gender]);
	if ($exe) {
		echo "OK, Insert Successfully";

	} else {
		echo "NON-Ok, Insert Failled";
	}

}
else{
	echo "string";
}



?>