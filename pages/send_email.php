<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    
    $to = "info@topper-arnhem.com"; // Replace with the actual email address

   
    $subject = "New Contact Form Submission";

    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        header("Location: ../?page=email_success");
    } else {
        echo "Failed to send email. Please try again.";
    }
} else {
    header("Location: ../?page=contact");
    exit();
}
?>
