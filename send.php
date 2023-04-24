<?php
// the message
$name = $_POST['full-name'];
$email = $_POST['email'];
$subj = $_POST['subj'];
$msg = $name."\n".$_POST['message']."\n".$email;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("unganikatechnologies.uts@gmail.com",$subj,$msg);
echo "<script> location.href='index.html#contact'; </script>";
?>