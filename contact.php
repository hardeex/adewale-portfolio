<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set up email variables
    $to = "webmasterjdd@gmail.com"; 
    $mail_subject = "Portfolio Message: $subject";
    $mail_message = "Name: $name\n";
    $mail_message .= "Email: $email\n";
    $mail_message .= "Subject: $subject\n\n";
    $mail_message .= "Message:\n$message";

    // Set up headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Send email
    $mail_sent = mail($to, $mail_subject, $mail_message, $headers);

    // Check if the email was sent
    if ($mail_sent) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    // If the form wasn't submitted, redirect to the homepage or display an error message
    header("Location: https://hardeex.github.io/adewale-portfolio/"); // Replace with the actual path of your homepage
    exit;
}
?>
