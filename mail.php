<?php 

	$to = 'info@saisharanstayinn.com';//<-----Put Your email address here.
	$name = $emailid = $message = ""; 

if(!empty($_POST['name']) && !empty($_POST['email'])){
	

	$name = $_POST['name'];	
	$emailid = $_POST['email'];
	$msg = $_POST['msg'];

	$subject = "Website Visitor: $name";
	$message = "You have received a new message. ".
		" Here are the details:\n Name: $name \n Email: $emailid \n Message: $msg \n";
		
	$headers =  'MIME-Version: 1.0' . "\r\n"; 
	$headers .= 'From: Website query <info@saisharanstayinn.com>' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
		
		
	mail($to,$subject,$message,$headers);

	// header('refresh:3; url=http://mumbaihousehotels.com/');

	echo "Thank you. We will contact you shortly.";
}

else{
	echo "Please enter your Name and Email ID properly";
}
 
?> 
