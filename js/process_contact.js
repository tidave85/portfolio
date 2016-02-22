function process_contact(e){
	e.preventDefault();
	_data = $("#contact_form").serialize();
	$("#submitBtn").hide();
	$('#email_result').html("Sending...");
	$.ajax({
		url: 'utilities/process_contact.php',
		type: 'POST',
		data: _data,
		success: function(_html){
			console.log(_html);
			if(_html == "sent"){
				$('#email_result').html("Thank you!");
			}else{
				$('#email_result').html("An error occured please try again.");
				$("#submitBtn").show();
			}
		}
	});
}