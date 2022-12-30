<section class="wrapper" id="wrapper">
    <div class="row mt">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <form action="" method="post" class="form-inline">
              <select name="classe" id="" class="form-control" style="width: 200px;">
                <?php 
                    $r='select * from course';
                    $e=$mysql->query($r);
                    if ($e->num_rows > 0) {
                        while ($a=$e->fetch_array()) {
                ?>
                <option value="<?php echo $a['id'];?>"><?php echo $a['classroom'];}}?><option>
              </select>
              <button class="btn btn-default" type="submit">Choisir</button>   
            </form>
            <br>
            <h4 class="title">Notes de l'eleve</h4>
            <div id="message"></div>
            <table class="table table-bordered">
              <tr>
                  <td>T</td>
                  <td>Etudiant</td>
                  <td>T</td>
                  <td>Matiere</td>
                  <td>Note</td>
              
                </tr>
              
                <form method="post" action="">
              
                  <tr>
                      <td>
                          <input type="checkbox" name="inscription[]" value="" required checked>
                      </td>
                      <td>
                       <input type="hidden" name="etudiant[]" value="">
                      </td>
                      <td>
                          <input type="checkbox" name="cours[]" value="" required checked>
                      </td>
                      <td>
                         
                      </td>
                      <td>
                          <input type="text" name="moyenne[]" id="" class='form-control' placeholder='Moyenne' required>
                      </td>
                  </tr>
              
                  <tr>
                      <td colspan='5'>Liste vide ...</td>
                  </tr>
                  
                  <tr>
                      <td colspan='5'>
                          <div class="form-group">
                              <button type="submit" name='enregistrer' class='btn btn-success col-4 offset-4'>Enregistrer</button>
                          </div>
                      </td>
                  </tr>
                </form>
          
            </table>
        </div>
        <!--/col-->

      <div class="col-lg-6 col-md-6 col-sm-6" id="dataresult">
        <!-- <h4 class="title">Contact Details</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <ul class="contact_details">
          <li><i class="fa fa-envelope-o"></i> info@yoursite.com</li>
          <li><i class="fa fa-phone-square"></i> +34 5565 6555</li>
          <li><i class="fa fa-home"></i> Some Fine Address, 887, Madrid, Spain.</li>
        </ul> -->
        <!-- contact_details -->
      </div>
  
    </div>
    <!-- /row -->
<?php require 'php/pagination2.php'; ?>

<script type="text/javascript">
  $(document).ready(function() {
      
      $("#contact-name").keyup(function() {
            //alert('bonjour')
        var name=document.getElementById("contact-name").value
            xhr=new XMLHttpRequest()
            xhr.open("POST","php/input_surname.php",true)
            xhr.setRequestHeader("content-type","application/x-www-form-urlencoded")
            xhr.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("contact-surname").value=xhr.responseText;
                    console.log(xhr.responseText)

                }
            }

            xhr.send("name="+name) 
          
      })

      $("#contact-surname").click(function() {
            //alert('bonjour')
        var name=document.getElementById("contact-name").value
        var surname=document.getElementById("contact-surname").value
            xhr=new XMLHttpRequest()
            xhr.open("POST","php/input_classroom.php",true)
            xhr.setRequestHeader("content-type","application/x-www-form-urlencoded")
            xhr.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("contact-classroom").value=xhr.responseText;
                    console.log(xhr.responseText)

                }
            }

            xhr.send("name="+name+"&surname="+surname) 
          
      })

      $("#contact-gender").click(function() {
            document.getElementById("contact-gender").value='G';
            //alert('bonjour')
        // var name=document.getElementById("contact-name").value
        // var surname=document.getElementById("contact-surname").value
        //     xhr=new XMLHttpRequest()
        //     xhr.open("POST","php/input_classroom.php",true)
        //     xhr.setRequestHeader("content-type","application/x-www-form-urlencoded")
        //     xhr.onreadystatechange=function() {
        //         if (this.readyState==4 && this.status==200) {
        //             document.getElementById("contact-classroom").value=xhr.responseText;
        //             console.log(xhr.responseText)

        //         }
        //     }

        //     xhr.send("name="+name+"&surname="+surname) 
          
      })


    })

</script>