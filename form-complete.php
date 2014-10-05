<?php

$emailSend = 'lukemonet@hotmail.co.uk';

$name = $_POST ["name"];
$emailName = 'message from contact on lukemonetdesigns.com:  '  . $name;

$email = $_POST ["email"]; 
$mailHeader = "From: " . $email . "\r\n";
$mailHeader .= "reply-to: " . $email . "\r\n";
$mailHeader .= "content-type: text/html; charset=iso-8859-1\r\n";

 

$name =$_POST["name"]; 
$messageBody = "Name: " . $name . "<br/>";

$email =$_POST["email"]; 
$messageBody .= "Email Address: " . $email . "<br/>";

$number =$_POST["number"]; 
$messageBody .= "Number: " . $number . "<br/>"; 
 
$message =$_POST["message"]; 
$messageBody .= "Message: " . $message . "<br/>";

mail($emailSend, $emailName, $messageBody, $mailHeader); 

?> 

<!DOCTYPE html> 

<head>

<title>Thank You</title>
<meta charset="utf-8">
<link href="styles.css" rel="stylesheet" media="screen" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" /> 
<link rel="stylesheet" type="text/css" href="css_sizes/screen_small.css" media="only screen and (min-width:50px) and (max-width:450px)"/>
<link rel="stylesheet" type="text/css" href="css_sizes/screen_medium.css" media="only screen and (min-width:451px) and (max-width:800px)" />  
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

<link href='http://fonts.googleapis.com/css?family=Orbitron:500' rel='stylesheet' type='text/css'>
 
</head>

<? include('header.php'); ?> 
<body class="texture">

	<div id="mainbody"> 
		<h2> THAT'S COMPLETE! YOU HAVE MADE CONTACT. </h2> 
   		<img src="Images/austrailianabductionto1.jpg" class="alienpic"> 
    	<h2> <a href="index.php" class="alth2" > BACK TO LUKEMONETDESIGNS.COM   </a> </h2> 
    </div> 

<? include('footer.php'); ?> 

</body>
</html> 


