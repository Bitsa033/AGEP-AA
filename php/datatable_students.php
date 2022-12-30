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
 $query="SELECT student.id as id,student.name as name,student.surname as surname,student.gender as gender,add_student.price as price,add_student.rest as reste,add_student.classroom as classroom,add_student.resolve as resolve,payment_of_school.resolve AS pr,payment_of_school.price as ps,payment_of_school.rest as rs FROM `student`,add_student,payment_of_school WHERE student.id=add_student.student AND student.id=payment_of_school.student ORDER BY id ASC LIMIT
 ".$_SESSION['l'].",3";
  $exec=$mysql->query($query);
  $w=30;//taille de la photo de l'élève
  if ($exec->num_rows > 0) {
         while ($a=$exec->fetch_array()) {
          // $width=$a["statut"];
          $nomprenom=$a["name"]." ".$a["surname"];
          $classe=$a["classroom"];
          $m_inscription=$a["resolve"];
          $m_scolarite=$a["pr"];
          // $ddn=$a["dd"].' '.$a["mm"].' '.$a["yy"];
          $gender=$a["gender"];
          $prix_inscription=$a["price"];
          $reste_inscription=$a["reste"];
          $prix_scolarite=$a["ps"];
          $reste_scolarite=$a["rs"];
   ?>
   
    <tbody>
   <tr>
      <td>
          <ul class="list-inline">
              <li class="list-inline-item">
                  <i class="fa fa-user"></i>
                  <span id="id"><?php echo "MAT-".$a["id"]; ?></span>
                  <h5><strong><?php echo $nomprenom; ?></strong></h5>
                  <div>
                    <h5> Sexe: <strong><?php echo $gender; ?></strong> </h5>
                    <h5> Classe: <strong><?php echo $classe; ?></strong> </h5>
                  </div>
              </li>
              
          </ul>
      </td>
      <td>
        <h5> Incrit: <strong><?php echo $prix_inscription." FCFA "?></strong></h5>
        <h5> Reste: <strong><?php echo $reste_inscription." FCFA "; ?></strong></h5>
        <h5> Scolarisé: <strong><?php echo $prix_scolarite." FCFA "?></strong></h5>
        <h5> Reste: <strong><?php echo $reste_scolarite." FCFA "; ?></strong></h5>
        <!-- <div class="btn-group">
            <button type="button" class="btn btn-theme03">Action</button>
            <button type="button" class="btn btn-theme03 dropdown-toggle" data-toggle="dropdown">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
              </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div> -->
      </td>
     
      <td> <h4><?php echo $m_inscription." et ".$m_scolarite; ?></h4> </td>
  </tr>
<?php }}else { echo '<h6 class="text-danger offset-3">Aucune donnée !</h6>';}
  
?>

</tbody>
</table>