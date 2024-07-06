<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['Message'];

    // Email settings
    $to = "auraliomedia@gmail.com"; // Change this to your email address
    $subject = "New message from $name $lastname";
    $headers = "From: $name $lastname <$email>";

    // Construct email body
    $email_body = "Name: $name $lastname\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n\n";
    $email_body .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>
