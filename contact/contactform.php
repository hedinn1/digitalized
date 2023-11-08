<?php


if (isset ($_POST['submit'])) {
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "contact@digitalized.blog";
    $headers = "From: ".$mailFrom;
    $txt = "You have received a message from ".$mailFrom.".\n\n".$message;


    mail($mailTo, $headers, $txt);
    header("Location: index.php?mailsend");

   
}