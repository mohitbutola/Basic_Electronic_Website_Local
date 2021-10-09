
<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$msg= $_POST['msg'];
$to = "mohitbutola18@gmail.com";
$subject = "Mail from Info Electro";
$txt ="Name = ". $name . "\r\n  Email = " . $phone . "\r\n  Email = " . $phone ."\r\n msg =" . $msg;
$headers = "From: mohitbutola19@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:home_page.html");
?>


