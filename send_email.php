<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["vitalykapishnikov@gmail.com"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $headers = "From: vitalykapishnikov@gmail.com"; 
    
    if (mail($to, $subject, $message, $headers)) {
        echo "OK!";
    } else {
        echo "Error";
    }
}
?>
