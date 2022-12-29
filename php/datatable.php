<table class="table table-striped table-bordered table-responsive">
    <thead id="thead">
        <tr>
          <th>Elève</th>
          <th class="numeric">Infos</th>
          <th class="numeric">Message</th>
          
        </tr>
    </thead>
<?php 
require 'database.php';

// $query="SELECT * FROM `eleve` WHERE nomprenom LIKE '{$clef}%' OR classe LIKE '{$clef}%'";
if (isset($_POST["input"]) && !empty($_POST["input"])) {
 $clef=$_POST["input"];
 $zone="SET lc_time_names = 'fr_FR'";
 $zone_exe=$mysql->query($zone);
 $query="SELECT student.id as id, name,resolve,surname,classroom,price,rest FROM `student`,add_student WHERE student.id=add_student.student AND name LIKE '{$clef}%' 
 ";
  $exec=$mysql->query($query);
  $w=30;//taille de la photo de l'élève
  if ($exec->num_rows > 0) {
         while ($a=$exec->fetch_array()) {
          $nomprenom=$a["name"]." ".$a["surname"];
          $classe=$a["classroom"];
          $prix=$a["price"];
          $reste=$a["rest"];
          $m_i=$a["resolve"];
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
        <h5> Classe: <strong><?php echo $classe; ?></strong> </h5>
        <h5> Incrit: <strong><?php echo $prix." FCFA "?></strong> Reste: <strong><?php echo $reste." FCFA "; ?></strong></h5>
      </td>
     
      <td>
        <?php 
          echo $m_i;
        ?>
      </td>
  </tr>
<?php }}else { echo '<h6 class="text-danger offset-3">Aucune donnée !</h6>';}}
  
?>

</tbody>
</table>