
<?php
use PHPMailer\PHPMailer\PHPMailer;

error_reporting(0);

$conn = new mysqli("localhost","root","","register");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nameErr = $emailErr = $subjectErr = $messageErr = "";
$name = $email = $subject = $cc = $message = "";

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
  
     if (empty($_POST["postcc"])) {
    $cc = "";
	} else {
     $cc = test_input($_POST["postcc"]);
  }
}

function test_input($data)

{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	
}

$stmt = $conn->prepare("insert into  equiry(name, email, subject, msg, cc) values(?,?,?,?,?)");
$stmt->bind_param("sssss", $name, $email, $subject, $message, $cc);
$stmt->execute();

if($stmt==true)

{
   
	if(isset($_POST["postname"]) && isset($_POST["postemail"]) )
	{
	
	$name = $_POST["postname"];
	$email = $_POST["postemail"];
	$subject = $_POST["postsubject"];
	$msg = $_POST["postmessage"];
	$cc = $_POST["postcc"];
	
	require_once "PHPMailer/PHPMailer.php";
	require_once "PHPMailer/Exception.php";
	require_once "PHPMailer/SMTP.php";

	$mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = "ultimatech007@gmail.com";
	$mail->Password = "xifxhlcowjnbnbfb";
	$mail->Port = 587;
	$mail->SMTPSecure = "tls";
	
	$mail->isHTML(isHTML,true);
	$mail->setFrom($email, $name);
	$mail->addAddress($email);
	$mail->Subject = $subject;
	$mail->Body = $msg;
		
        $mail->addCC($cc);
        
	if($mail->send())
	{
	echo "mail sent";
	}
	else{
	echo "Failed : ".$mail->ErrorInfo;
        
	}
        
//        exit(json_encode(array("response"=>$response)));
	}
	
}
else{
    
    echo "Error : ".mysqli_connect_error($conn);
}
	?>