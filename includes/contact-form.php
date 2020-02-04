<?php

if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mailTo = "info@itplusser.com";
    $headers = "From: ". $mailFrom. " Via Exo-tica.com";
    $txt = "Nieuwe e-mail van". $name. ".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);

    echo '<meta http-equiv="Refresh" content="0; url=./index.php?content=dankpage">';
}

?>