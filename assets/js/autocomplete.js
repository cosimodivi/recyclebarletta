$( document ).ready(function() {
    $("#results").hide();
});
$('#inputsearch').keyup(function() {
	var input = this.value;

	$("#results").show();
	$("#results").html("");
	$.ajax({
		type: "GET",
		dataType: "json",
		url: "/api/search.php",
		data: "s=" + input,
		success: function(data)
		{
			$.each(data, function(i) { 
				$("#results").append("<li>" + data[i].name + "</li>");
			});
		}	
	});
});
