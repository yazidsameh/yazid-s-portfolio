<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Replace with your own email address
    $to = "dodi3son@gmail.com";

    $subject = "New Message from Portfolio Contact Form";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send email
    mail($to, $subject, $body);

    // Redirect to thank you page
    header("Location: thankyou.html");
    exit;
}
?>
