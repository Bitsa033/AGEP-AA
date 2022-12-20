
<form autocomplete="off" class="form form-inline">
    <br>
  <input type="text" name="clef" id="clef" class="form-control">
  <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
</form>

<script type="text/javascript">
	$(document).ready(function() {
	$("#clef").keyup(function() {
		var input=$(this).val()
		if (input !="") {
			$.ajax({
				url:"../php/datatable.php",
				method: "POST",
				data:{input:input},
				success:function(data) {
					$("#dataresult").html(data),
					$("#dataresult").css("display","block")
				},
				error:function(XMLHttpRequest,textStatus,errorThrown) {
					alert(textStatus)
				}
				
			})
		}else{
			$("#dataresult").css("display","none")
		}
		
			
	})
	
})




</script>