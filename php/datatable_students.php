<table class="table table-striped table-bordered table-responsive">
    <!-- <thead id="thead">
        <tr>
          <th>Elève</th>
          <th class="numeric">Infos</th>
          <th class="numeric">Message</th>
          
        </tr>
    </thead> -->
<?php 
require 'database.php';
session_start();

// $query="SELECT * FROM `eleve` WHERE nomprenom LIKE '{$clef}%' OR classe LIKE '{$clef}%'";

 $zone="SET lc_time_names = 'fr_FR'";
 $zone_exe=$mysql->query($zone);
 
 // $query="SELECT *,DAY(ddn) as dd,MONTHNAME(ddn) as mm,year(ddn) as yy FROM `student` ORDER BY id ASC LIMIT
 // ".$_SESSION['l'].",3";
 $query="SELECT student.id as id,student.name as name,student.surname as surname,student.gender as gender,add_student.price as price,add_student.rest as reste,add_student.classroom as classroom,add_student.resolve as resolve FROM `student`,add_student WHERE student.id=add_student.student ORDER BY id ASC LIMIT
 ".$_SESSION['l'].",3";
  $exec=$mysql->query($query);
  $w=30;//taille de la photo de l'élève
  if ($exec->num_rows > 0) {
         while ($a=$exec->fetch_array()) {
          // $width=$a["statut"];
          $nomprenom=$a["name"]." ".$a["surname"];
          $classe=$a["classroom"];
          $resolve=$a["resolve"];
          // $ddn=$a["dd"].' '.$a["mm"].' '.$a["yy"];
          $gender=$a["gender"];
          $avc=$a["price"];
          $ir=$a["reste"];
   ?>
   
    <tbody>
   <tr>
      <td>
          <ul class="list-inline">
              <li class="list-inline-item">
                  <img alt="Avatar" class="table-avatar img img-circle" width="<?php echo $w.'px' ?>" src="photos/pascal.jpg">
                  <span id="id"><?php echo "MAT-".$a["id"]; ?></span>
                  <h5><strong><?php echo $nomprenom; ?></strong></h5>
              </li>
              
          </ul>
      </td>
      <td>
        <h5> Sexe: <strong><?php echo $gender; ?></strong> </h5>
        <h5> Classe: <strong><?php echo $classe; ?></strong> </h5>
        <h5> Incrit: <strong><?php echo $avc." FCFA "?></strong> Reste: <strong><?php echo $ir." FCFA "; ?></strong></h5>
      </td>
     
      <td> <?php echo $resolve; ?> </td>
  </tr>
<?php }}else { echo '<h6 class="text-danger offset-3">Aucune donnée !</h6>';}
  
?>

</tbody>
</table>