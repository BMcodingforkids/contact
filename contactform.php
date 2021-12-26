<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailForm = $_POST['mail'];
    $messeage = $_POST['messeage'];

    $mailTo = "markovitskids@icloud.com";

    $headers = "From: ".$mailFrom;

    $txt = "You have recived a email from: ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.html?mailsent")



}