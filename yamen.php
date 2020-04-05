<?php
if (isset($_POST['submit'])){
$name=$_POST['name'];
$mailfrom=$_POST['email'];
$message=$_POST['message'];

$mailTo="yamen.hamid_662006@hotmail.com";
 $headers="from: ".$mailfrom;
 $txt="Du hast eine Email von ".$name." beckommen.\n\n".$message;


  mail($mailTo,$message,$txt,$headers);
    header("Location:index.php?mailsent");}










