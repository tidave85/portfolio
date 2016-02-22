<?php
	


	$to = "info@davidgagnedesign.com";
	$subject = "Contact from Website";
	$txt = $_POST['msg'];
	$headers = "From: ". $_POST['email'] . "\r\n" .	"Name: " . $_POST['name'];

	$result = mail($to,$subject,$txt,$headers);
	
	if($result){
		echo "sent";
		exit();
	}else{
		echo "error";
		exit();
	}
?>