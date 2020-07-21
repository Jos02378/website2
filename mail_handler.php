<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='joseph02378@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			// echo "<h2>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h2>";
			// header('Location: thanks.html');
			echo "Your message was sent! Thank You!";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>





