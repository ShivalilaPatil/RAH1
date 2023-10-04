<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "shivalilapatil66@gmail.com";

    // Set the email subject
    $email_subject = "Contact Form Submission: $subject";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message = "Email: $email\n";
    $email_message = "Message:\n$message";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $email_subject, $email_message, $headers)) {
        // Email sent successfully, redirect to the same page with a success message
        header("Location: index.html?status=success");
        exit();
    } else {
        // Email sending failed, redirect to the same page with an error message
        header("Location: index.html?status=error");
        exit();
    }
}
?>
