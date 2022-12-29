<section class="wrapper" id="wrapper">
<div class="row mt container">
  <div class="col-md-7" id="dataresult"></div>
  <div class="col-md-5">
    <div class="btn-group" style="display: inline-block;">
        <button type="button" class="btn btn-theme03">Options</button>
        <button type="button" class="btn btn-theme03 dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role="menu">
        <li><a href="#" data-toggle="modal" data-target="#myModal">Ajouter une inscription</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal2">Ajouter une scolarité</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal3">Ajouter une note</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <form autocomplete="off" class="form form-inline" style="display: inline-block; margin-bottom: 2%;">
    <input type="text" name="clef" id="clef" class="form-control">
    <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
    </form>
    <?php require 'php/pagination.php'; ?>
    <div id="dataresult2"></div>
  </div>
  <!-- /col -->
</div>
<!-- /row -->
<!-- <div class="row">
  <div class="col-md-6">
      
  </div>
  <div class="col-md-4">
    
  </div>
</div> -->
<script type="text/javascript">
  $(document).ready(function() {
    $("#clef").keyup(function() {
        var input=$(this).val()
        if (input !="") {
            $.ajax({
                url:"php/datatable.php",
                method: "POST",
                data:{input:input},
                success:function(data) {
                    $("#dataresult2").html(data),
                    $("#dataresult2").css("display","block")
                },
                error:function(XMLHttpRequest,textStatus,errorThrown) {
                    alert(textStatus)
                }
                
            })
        }else{
            $("#dataresult2").css("display","none")
        }
        
            
    })
      
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

      $("#contact-name2").keyup(function() {
            //alert('bonjour')
        var name=document.getElementById("contact-name2").value
            xhr=new XMLHttpRequest()
            xhr.open("POST","php/input_surname.php",true)
            xhr.setRequestHeader("content-type","application/x-www-form-urlencoded")
            xhr.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("contact-surname2").value=xhr.responseText;
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

      $("#contact-surname2").click(function() {
            //alert('bonjour')
        var name=document.getElementById("contact-name2").value
        var surname=document.getElementById("contact-surname2").value
            xhr=new XMLHttpRequest()
            xhr.open("POST","php/input_classroom.php",true)
            xhr.setRequestHeader("content-type","application/x-www-form-urlencoded")
            xhr.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("contact-classroom2").value=xhr.responseText;
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

      $("#contact-gender2").click(function() {
            document.getElementById("contact-gender2").value='G';
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
<div class="row mt">
    <div class="col-lg-4">
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="color: black;">Reste de l'inscription à payer: </h4>
            </div>
            <div class="modal-body">
              <div id="message"></div>
                <form autocomplete="off" class="contact-form php-mail-form" role="form" action="php/test.php" method="POST">

                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="contact-name" placeholder="Votre nom" data-rule="minlen:1" data-msg="Entrer un nom valide d'aumoins 4 caractères" >
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <input type="name" name="surname" class="form-control" id="contact-surname" placeholder="Vore prenom" data-rule="minlen:4" data-msg=" Entrer un prenom valide d'aumoins 4 caractères">
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <input type="name" name="gender" class="form-control" id="contact-gender" placeholder="Taper G pour garçon ou F pour fille" data-rule="minlen:1" data-msg="Entrer un sexe valide">
                    <div class="validate"></div>
                  </div>

                  <div class="form-group">
                    <input type="name" class="form-control" name="classroom" id="contact-classroom" placeholder="Entrer la classe" data-rule="minlen:2" data-msg="Entrer une classe valide d'aumoins 2 caractères">
                    <div class="validate"></div>
                  </div>

                  <div class="form-group">
                    <input type="name" name="price" class="form-control" id="contact-price" placeholder="Entrer la somme de l'inscription" data-rule="minlen:4" data-msg="Votre somme doit etre plus grande que 1 000 FCFA">
                    <div class="validate"></div>
                  </div>

                  <div class="loading"></div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <div class="form-send">
                    <button type="submit" class="btn btn-large btn-primary">Send Message</button>
                  </div>

                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
        </div>
    <!-- /col -->
    </div>
    <div class="col-lg-4">
      <!-- Modal -->
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="color: black;">Reste à payer: </h4>
            </div>
            <div class="modal-body">
              <div id="message"></div>
                <form autocomplete="off" class="contact-form php-mail-form" role="form" action="php/school.php" method="POST">

                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="contact-name2" placeholder="Votre nom" data-rule="minlen:1" data-msg="Entrer un nom valide d'aumoins 4 caractères" >
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <input type="name" name="surname" class="form-control" id="contact-surname2" placeholder="Vore prenom" data-rule="minlen:4" data-msg=" Entrer un prenom valide d'aumoins 4 caractères">
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <input type="name" name="gender" class="form-control" id="contact-gender2" placeholder="Taper G pour garçon ou F pour fille" data-rule="minlen:1" data-msg="Entrer un sexe valide">
                    <div class="validate"></div>
                  </div>

                  <div class="form-group">
                    <input type="name" class="form-control" name="classroom" id="contact-classroom2" placeholder="Entrer la classe" data-rule="minlen:2" data-msg="Entrer une classe valide d'aumoins 2 caractères">
                    <div class="validate"></div>
                  </div>

                  <div class="form-group">
                    <input type="name" name="price" class="form-control" id="contact-price2" placeholder="Entrer la somme de l'inscription" data-rule="minlen:4" data-msg="Votre somme doit etre plus grande que 1 000 FCFA">
                    <div class="validate"></div>
                  </div>

                  <div class="loading"></div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <div class="form-send">
                    <button type="submit" class="btn btn-large btn-primary">Send Message</button>
                  </div>

                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
    </div>
    <!-- /col -->
    </div>
    <div class="col-lg-7">
      <!-- Modal -->
      <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="color: black;">
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
              </h4>
            </div>
            <div class="modal-body">
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
                    <?php 
                        $r="select student.id as id,student.name as name,matter.id as idm,matter.name as m_name from student,matter WHERE student.id IN(SELECT student FROM add_student WHERE classroom='ce2')";
                        $e=$mysql->query($r);
                        if ($e->num_rows > 0) {
                            while ($a=$e->fetch_array()) {
                                $id=$a["id"];
                                $nom=$a["name"];
                                $matiere_id=$a["idm"];
                                $matiere=$a["m_name"];
                    ?>
                      <tr>
                          <td>
                              <input type="checkbox" name="inscription[]" value="<?php echo $id; ?>" required checked>
                          </td>
                          <td>
                           <input type="hidden" name="etudiant[]" value="<?php echo $id; ?>">
                           <?php echo $nom; ?>
                          </td>
                          <td>
                              <input type="checkbox" name="cours[]" value="<?php echo $matiere_id; ?>" required checked>
                          </td>
                          <td>
                             <?php echo $matiere; ?>
                          </td>
                          <td>
                              <input type="text" name="moyenne[]" id="" class='form-control' placeholder='Moyenne' required>
                          </td>
                      </tr>
                        <?php }} ?>
                      
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
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
    </div>
    <!-- /col -->
</div>
<!-- /row -->