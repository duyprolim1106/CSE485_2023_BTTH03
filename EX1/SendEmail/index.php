<?php
require("EmailSender.php");
require("EmailServerInterface.php");
require("MyEmailServer.php");

$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$emailSender->send("huyhn045@gmail.com", "Test Email", "This is a test email.");
?>
