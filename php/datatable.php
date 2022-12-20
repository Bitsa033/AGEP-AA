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
 $query="SELECT *,DAY(ddn) as dd,MONTHNAME(ddn) as mm,year(ddn) as yy FROM `eleve` WHERE nomprenom LIKE '{$clef}%' OR nomprenom 
 LIKE '%{$clef}' OR classe LIKE '{$clef}%' OR classe LIKE '%{$clef}'
 ";
  $exec=$mysql->query($query);
  $w=30;//taille de la photo de l'élève
  if ($exec->num_rows > 0) {
         while ($a=$exec->fetch_array()) {
          $width=$a["statut"];
          $nomprenom=$a["nomprenom"];
          $classe=$a["classe"];
          $ddn=$a["dd"].' '.$a["mm"].' '.$a["yy"];
          $avc=$a["i_payer"];
          $ir=$a["i_reste"];
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
        <h5> Né(e) le <strong><?php echo $ddn; ?></strong> </h5>
        <h5> Classe: <strong><?php echo $classe; ?></strong> </h5>
        <h5> Incrit: <strong><?php echo $avc." FCFA "?></strong> Reste: <strong><?php echo $ir." FCFA "; ?></strong></h5>
      </td>
     
      <td>
        <?php 
          if ($a["i_reste"]==0) {
            echo("<h5><strong>L'élève est inscrit!</strong></h5>");
          }
          else{echo "<h5><strong>L'élève n'est pas encore inscrit!</strong></h5>";}
        ?>
      </td>
  </tr>
<?php }}else { echo '<h6 class="text-danger offset-3">Aucune donnée !</h6>';}}
  
?>

</tbody>
</table>