<?php 
require 'database.php';
if (isset($_POST['name']) && isset($_POST['surname'])) {
	$name=$_POST['name'];
	$surname=$_POST['surname'];
	$select="SELECT classroom FROM `add_student` WHERE student=(SELECT id FROM student WHERE name='{$name}' AND surname='{$surname}' OR id='{$name}' AND surname='{$surname}')";
	$run=$mysql->query($select);
	//$select->execute([$eleve]);
	if ($run->num_rows > 0) {
		//echo "trouvé";
		$fetch_i_reste=$run->fetch_array();
		$classe=$fetch_i_reste["classroom"];
		
		echo $classe;
	}

}


 ?>