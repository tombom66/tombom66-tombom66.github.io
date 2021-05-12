<?php
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $mailfrom=$_POST['email'];
  $message=$_POST['message'];

$mailto = "nguyentommy66@csu.fullerton.edu";//need to fix
$headers = "From: ".$mailfrom;
$txt ="You have recieve an email from ".$name.".\n\n".$message;
  mail($mailto,$txt,$headers);
  header("Location: index.html?mailsend")
}
