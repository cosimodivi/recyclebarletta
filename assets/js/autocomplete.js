$( document ).ready(function() {
    $("#results").hide();
});
$('#inputsearch').keyup(function() {
	var input = this.value;
	if(input == "") {
		$("#results").hide();
	}
	else {
		$("#results").show();
	}

	$.ajax({
		type: "GET",
		dataType: "json",
		url: "/api/search.php",
		data: "s=" + input,
		success: function(data)
		{
				$("#results").html("");
				$.each(data, function(i) { 
					$("#results").append("<li>" + data[i].name + "</li>");
				});
		}	
	});
});
