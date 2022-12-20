<?php 
//require '../php/database.php';
$r="SELECT  count(id) as id FROM payment_of_school ";
$e=$mysql->query($r);
$t=$e->fetch_array();
$nb_id=$t['id'];
$nb_lignes=3;
$nb_pages=ceil($nb_id/$nb_lignes);
$y=1;
for ($i=0; $i <$nb_id ; $i+=$nb_lignes) {
    
?>
<a href="?l=<?php echo $i; ?>" class="btn btn-theme03"><?php echo 'Page '.$i;?></a>
<?php } ?>