<?php 

require 'database.php';
if (!empty($_POST["classroom"]) && !empty($_POST["price"]) && !empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["gender"]) ) {
	$classroom=htmlspecialchars($_POST["classroom"]);
	$name=htmlspecialchars($_POST["name"]);
	$surname=htmlspecialchars($_POST["surname"]);
	$gender=htmlspecialchars($_POST["gender"]);
	$price=htmlspecialchars($_POST["price"]);

	$select="SELECT * FROM `level`,course WHERE course.classroom = '{$classroom}' 
  	AND level.number=course.level ";
  	$run=$mysql->query($select);
  	//$OR course.id = '{$classroom}'
	if ($run->num_rows > 0) 
	  //on calcule le pourcentage d'insription
	  if ($price>=1000) {
	  	$fetch_i_totale=$run->fetch_array();
		$price_i=$fetch_i_totale["price_school"]/1000;
		$payer=$price/1000;
		$statut=floor($payer*100/$price_i);
		//OR student.id = '{$name}'
		$reste=($price_i*1000)-$price;
		$select2="SELECT name,surname,price,rest,student.id as id_student,payment_of_school.id as id_add_student FROM `student`,payment_of_school WHERE student.id = payment_of_school.student AND name = '{$name}' AND surname = '{$surname}'  ";
  	  	$run2=$mysql->query($select2);
  	  
	  	if ($run2->num_rows > 0) {
		  	$fetch_i_reste=$run2->fetch_array();
			$reste=$fetch_i_reste["rest"];
			if ($reste==0) {
				echo "La scolarité a été soldée";
			} 
			elseif ($reste<$price) {
				echo "Il vous reste seulement: ".$reste." FCFA à payer , La scolarité ne doit pas dépasser: ".($price_i*1000)." FCFA";
			} 
		  	//on modifie l'inscription
		  	else {
		  		$pi=$fetch_i_totale['price_school'];
		  		$pp=$fetch_i_reste["price"];
		  		if ($price+$pp==$pi) {
					$resolve="Scolarisé";
				}
				else{
					$resolve="Pas encore scolarisé";
				}
				$commande="UPDATE `payment_of_school` SET `price`=price+?,`rest`=rest-?,`resolve`=?,`year`='2022' WHERE student=(select id from student where name= '{$name}' OR id = '{$name}') ";
				$exe=$mysql->prepare($commande);
				$result=$exe->execute([$price,$price,$resolve]);
				if ($result >0) {
					echo "OK, Nous avons modifié vos données avec Succès !";
					
				} 
				else {
					echo "Echec, Nous n'avons pas pu modifié vos données, Contactez votre Webmestre...";
				}
			}
	  	}
	  	else{
		  	//on enregistre l'inscription
		  	$pi=$fetch_i_totale['price_school'];
		  	if ($price<=$pi) {
		  		$id_student="(SELECT id FROM student WHERE name=$name)";
				$year="(SELECT year(current_date))";
				$old='8';
				if ($price<$pi) {
					$resolve="Pas encore Scolarisé";
				}
				else{
					$resolve="Scolarisé";
				}
				$c="INSERT INTO `payment_of_school`(`id`, `student`, `price`, `rest`, `resolve`, `year`) VALUES ('',(SELECT id FROM student WHERE name='".$name."'),?,?,?,(SELECT year(current_date)))";
				$exe2=$mysql->prepare($c);
				$result2=$exe2->execute([$price,$reste,$resolve]);
				var_dump('resultat2: '.$result2);
				if ($result2 >0) {
					echo "OK, Nous avons inséré vos données avec Succès !";
				}
				else{
					echo "Echec, Nous n'avons pas pu inséré vos données, Contactez votre Webmestre...";
				}
				
		  	}
	  		else{
	  			echo "La somme payée doit commencer à partir de: 1 000 FCFA jusqu'à: ".$pi." FCFA";
	  		}
	  	}
	  }
	  else{
	  	echo "La somme payée doit etre supérieure ou égale à: 1 000 FCFA"; 
	  }
	 else{
	  	echo "Votre classe est incorrecte, Entrer une classe valide de la SIL au CM2"; 
	 }
	  
}
	

else{
	echo "Votre formulaire est vide...";
}

 ?>

