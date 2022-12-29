function data() {
      $.ajax({
        url:"php/datatable_students.php",
        method: "GET",
        success:function(data) {
            $("#dataresult").html(data)
            $("#dataresult").css("display","block")

        },
        error:function(XMLHttpRequest,textStatus,errorThrown) {
            alert(textStatus)
        }
        
    })
    setTimeout(data,1000)
}

function payment_of_school() {
      $.ajax({
        url:"php/get_payment_of_school.php",
        method: "GET",
        success:function(data) {
            $("#dataresult").html(data)
            $("#dataresult").css("display","block")

        },
        error:function(XMLHttpRequest,textStatus,errorThrown) {
            alert(textStatus)
        }
        
    })
    //setTimeout(payment_of_school,1000)
}