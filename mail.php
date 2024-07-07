<?php
 if( isset($_POST['name']) || isset($_POST['email']) || isset($_POST['message'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 }

//Database connection
$conn = new mysqli('localhost','root','','contact');
if($conn->connect_error){
	die('connection failed :' .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into contactus(name, email, message)
	 values(?,?,?)");
	 $stmt->bind_param("sss", $name, $email, $message);
	 $stmt->execute();
	 echo"Your message is sent,Thank you!! for contacting us....";
	 $stmt->close();
	 $conn->close();
}
?>