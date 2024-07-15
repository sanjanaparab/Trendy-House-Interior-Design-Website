<?php 
include('mail.php'); 
$id=$_GET['id']; 
$select="select * from comment where id=$id"; 
$query=mysqli_query($con,$select); 
$reselt=mysqli_fetch_assoc($query); 
if(isset($_POST['submit'])){ 
$Name=$_POST['Name']; 
$Email=$_POST['Email']; 
$comment=$_POST['message']; 
if(!$name){ 
$update="UPDATE comment SET email='$Email',message='$message', where id='$id'"; 
} 
else{ 
$update="UPDATE comment SET email='$Email',message='$message',, where id='$id'"; 
} 
$queryy=mysqli_query($con,$update); 
if($queryy) { 
header('location:select.php'); 
} 
} 
