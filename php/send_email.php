<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "rahuldabgo@gmail.com";
    $subject = "By website";

    // Prepare the email body
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send the email
    $headers = "From: $email";
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>
