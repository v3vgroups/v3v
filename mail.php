<?php
//get data from form  
$name = $_POST['name'];
$gender= $_POST['gender'];
$age_group= $_POST['Age_group'];
$Feedback=$_POST['Feedback'];
$to = "muhdadnankhan786@gmail.com";
$subject = "Mail From youtube website";
$txt ="Name = ". $name . "\r\n  Gender = " . $gender . "\r\n AGE_GROUP =" . $age_group "\r\n Feedback =" . $Feedback;
$headers = "From: youtube@gmail.com.com" . "\r\n" .
"CC: muhdadnankhan786123786@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("index 4.html");
?>
