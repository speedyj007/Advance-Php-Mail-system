<?php

$conn = new mysqli("localhost","root","","register");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nameErr = $emailErr = $subjectErr = $messageErr = "";
$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if (empty($_POST["postname"])) {
    $nameErr = "First Name is required";
	} else {
    $name = test_input($_POST["postname"]);
  }
  
   if (empty($_POST["postemail"])) {
    $emailErr = "Email is required";
	} else {
    $email = test_input($_POST["postemail"]);
  }
  
   if (empty($_POST["postsubject"])) {
    $subjectErr = "Subject is required";
	} else {
    $subject = test_input($_POST["postsubject"]);
  }
  
   if (empty($_POST["postmessage"])) {
    $messageErr = "Message is required";
	} else {
    $message = test_input($_POST["postmessage"]);
  }
  
}

function test_input($data)

{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	
}

$stmt = $conn->prepare("insert into  equiry(name, email, subject, msg) values(?,?,?,?)");
$stmt->bind_param("ssss", $name, $email, $subject, $message);
$stmt->execute();

if($stmt==true)
{
	

$to = "speedyjones@yahoo.com";
$subject = $subject;

$message = $message;

$header = "From:ultimatech007@gmail.com \r\n";

 if(mail($to, $subject, $message, $header))
 {
	echo "Information submitted successfully"; 

 }
 else{
 
 echo "Email sending Failed";
 }


}
else{
	echo "Error : ".mysqli_connect_error($conn);
}




?>