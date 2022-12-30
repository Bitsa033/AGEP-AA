<!-- <script src="../dist/sweetalert.js"></script>
<link rel="stylesheet" href="../dist/sweetalert.css"> -->
<script>
$(function () {
      $.validator.setDefaults({
        submitHandler: function () {
            var classe=$("#classe").val()
            var eleve2=$("#eleve2").val()
            var ddn=$("#ddn").val()
            var avi=$("#avi").val()
            $.ajax({
            url:"php/test.php",
            method: "POST",
            data:{classe:classe,eleve2:eleve2,ddn:ddn,avi:avi},
            cache: false,
            success:function(response) {
            
                $("#eleve2").val("")
                $("#mes").html(response)
                $("#mes").css("display","block")
                $("#mes").css("background","green")
                $("#mes").css("color","white")
                setTimeout(function() {
                $("#mes").css("display","none")
                },9000)
            },
            error:function(XMLHttpRequest,textStatus,errorThrown) {
                swal(textStatus)
            }
            
            })
            return false
        }
      });
      $('#quickForm').validate({
        rules: {
          classe: {
            required: true
          },
          eleve2: {
            required: true
          },
          ddn: {
            required: true
          },
          avi: {
            required: true
          },
        },
        messages: {
          classe: {
            required: "S'il vous plait ce champs est demandé",
            minlength: "ce champs doit avoir minimum 5 lettres"
          },
          eleve2: {
            required: "S'il vous plait ce champs est demandé",
            minlength: "ce champs doit avoir minimum 5 lettres"
          },
          ddn: {
            required: "S'il vous plait ce champs est demandé",
            minlength: "ce champs doit avoir minimum 5 lettres"
          },
          avi: {
            required: "S'il vous plait ce champs est demandé",
            number: "S'il vous plait entrer un entier valide"
          },
        },
        errorElement: 'p',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
</script>
