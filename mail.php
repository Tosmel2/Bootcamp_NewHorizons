<?php 
    ini_set( 'display_errors', 1 );
    if(isset($_POST['submit'])){ 
        // echo "Hello";
        $to = "tosmelt@gmail.com"; // this is the to address 
        $from = $_POST['email']; // this is the sender's Email address 
        $name = $_POST['name']; 
		// $message = $_POST['message']; 
        $subject = "Register"; 
        $body = "Name: ". $name. "\n From: " . $_POST['email'] . "\n Phone: " . $_POST['phone']; 
        $headers = '';
        $headers .= "From:" . $from; 
        $mail=mail($to,$subject,$body,$headers); 
		if($mail){ 
			echo "Mail Sent. Thank you " ; 
		}else{ 
			echo "Mail sending failed"; 
		} 
    } 

?>