<?php

if (isset($_POST['submit'])) {

    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Set the email recipient and subject
    $to = 'patelpriyanshi02@gmail.com';
    $subject = 'Contact Form Submission from My Website';

    // Create the email message
    $messageBody = "
    New contact form submission:

    Name: $name
    Email: $email
    Phone: $phone
    Message: $message
    ";

    // Add the Reply-To and X-Mailer headers
    $headers = "From: $email\r\n";
    $headers .= 'Reply-To: ' . $email . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";

    // Send the email
    $result = mail($to, $subject, $messageBody, $headers);

    // Check if the email was sent successfully
    if ($result) {
        // Email was sent successfully
        echo '<div class="alert alert-success">Your message has been sent successfully!</div>';
    } else {
        // Email was not sent successfully
        echo '<div class="alert alert-danger">There was an error sending your message. Please try again later.</div>';
    }
}
else
echo "error";
?>