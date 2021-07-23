<?php
if (isset($_Post['submit'])) {
    $firstname = $_POST['First Name:'];
    $lastnames = $_POST['Last Name:'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    $mailto = "email@missouri.edu";
    $headers = "From: ".$mailFrom.".\n\n".$message;
mail ($firstname, $lastname, $email, $headers);
header ("Location: results.php?mailsend");
}
