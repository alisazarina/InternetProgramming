<html> 
<head> 
	 	<title>Form Feedback</title> 
</head> 
<body> 
<?php 
 
// Validate first name
if (!empty($_POST['fname'])) {
      	$fname =
        $_POST['fname'];
    } else { 
	 	$fname = NULL; 
	 	echo '<p><b>You forgot to enter your first name!</b></p>'; 
}

// Validate last name
if (!empty($_POST['lname'])) {
    $lname =
  $_POST['lname'];
} else { 
   $lname = NULL; 
   echo '<p><b>You forgot to enter your last name!</b></p>'; 
} 
 
// Validate phone number 
if (!empty($_POST['phone'])) { 
	 	$phone = $_POST['phone']; 
} else { 
	 	$phone = NULL; 
	 	echo '<p><b>You forgot to enter your phone number!</b></p>'; 
}

// Validate email
if (!empty($_POST['email'])) { 
    $email = $_POST['email']; 
} else { 
    $email = NULL; 
    echo '<p><b>You forgot to enter your email address!</b></p>'; 
}

// Validate programme
if (!empty($_POST['programme'])) { 
    $programme = $_POST['programme']; 
} else { 
    $programme = NULL; 
    echo '<p><b>You forgot to choose a programme!</b></p>'; 
}
 
// If everything is okay, print the message.
if ($fname && $lname && $phone && $email && $programme) { 
 
	// Print the submitted information. 
 	echo "<p>Thank you for your registration.<br /></p>  	Below are your registered details:  
	 	<br /><b>First Name: </b>$fname
        <br /><b>Last Name: </b>$lname
	 	<br /><b>Phone No: </b>$phone
        <br /><b>Email Address: </b>$email
        <br /><b>Programme: </b>$programme";

 	 
} else { // One form element was not filled out properly. 
	 	echo '<p><font color="red">Please go back and fill out the form again.</font></p>'; 
} 
?>
</body> 
</html>

