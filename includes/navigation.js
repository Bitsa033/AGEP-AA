$(document).ready(function() {
	$("#menu a").click(function() {
		link=$(this).attr("href")
		$.ajax({
			url:link,
			cache: false,
			success:function(html) {
				afficher(html)
			},
			error:function(XMLHttpRequest,textStatus,errorThrown) {
				alert(textStatus)
			}
			
		})
		return false
	})
})

function afficher(data) {
	$("#wrapper").fadeOut(500,function() {
		$("#wrapper").empty()
		$("#wrapper").append(data)
		$("#wrapper").fadeIn(1000)
	})
		
}