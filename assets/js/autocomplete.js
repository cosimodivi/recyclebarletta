$( document ).ready(function() {
   $("#results").hide();
});
$('#inputsearch').keyup(function() {
	
	var input = this.value;
	if(input == '') 
		$("#results").hide();
	 else  
		 $("#results").show();
	 
	$.ajax({
		type: "GET",
		url: "/api/search.php",
		data: "s=" + input,
		success: function(data)
		{
		   $("#results").html(data);
		}
	});
});