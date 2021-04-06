<?php
//* Mail from Osteria il Bardo */
$to = "stefano.pruna@googlemail.com";
$Subject = "Messaggio per il Bardo!"

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$header .= "Content-type: text/html;\r\n";
$header .= "From: $email";

mail($to, $Subject, $comment, $headers);

echo "Email e'stata spedita! Grazie $name, ti rispondero'al piu'presto";
?>