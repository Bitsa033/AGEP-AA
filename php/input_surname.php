<?php 
require 'database.php';
if (isset($_POST['name'])) {
	$name=$_POST['name'];
	$select="SELECT surname FROM student WHERE name='{$name}' OR id='{$name}'";
	$run=$mysql->query($select);
	//$select->execute([$eleve]);
	if ($run->num_rows > 0) {
		//echo "trouvé";
		$fetch_i_reste=$run->fetch_array();
		$surname=$fetch_i_reste["surname"];
		
		echo $surname;
	}

}


 ?>