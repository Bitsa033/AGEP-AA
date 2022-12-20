<section class="wrapper" id="wrapper">
<div class="row mt">
  <div class="col-lg-6 col-md-6 col-sm-6">
    <h4 class="title">Scolarité de l'eleve</h4>
    <div id="message"></div>
    <form autocomplete="off" class="contact-form php-mail-form" role="form" action="php/school.php" method="POST">

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
        <input type="name" name="price" class="form-control" id="contact-price" placeholder="Entrer la somme de la Scolarité" data-rule="minlen:4" data-msg="Votre somme doit etre plus grande que 1 000 FCFA">
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