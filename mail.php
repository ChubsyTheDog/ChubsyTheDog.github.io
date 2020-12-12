<?php
$name = $_GET['Name'];
$email = $_GET['Email'];
$phone = $_GET['Phone'];
$message = $_GET['Message'];

mail("chubsythedog@gmail.com", $name . "  |  " + $email . "  |  " . $phone, $message);

?>
