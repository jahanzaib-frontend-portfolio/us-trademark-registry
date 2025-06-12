<?php
session_start(); // Start the session

if (isset($_GET["email"]) && !empty($_GET["email"])) {
    $from_email      = filter_var($_GET["email"], FILTER_SANITIZE_EMAIL); // Sanitize email
    $recipient_email = 'info@quantumsoft360.com';
    
    // Set default subject to a fixed string
    $subject = "New Query from Quantum Soft 360";
    
    $sender_name     = filter_var($_GET["name"], FILTER_SANITIZE_STRING);
    $reply_to_email  = filter_var($_GET["email"], FILTER_SANITIZE_EMAIL); // Ensure valid email
    $contact         = filter_var($_GET["phone"], FILTER_SANITIZE_STRING);
    $message         = filter_var($_GET["message"], FILTER_SANITIZE_STRING);

    if (isset($_GET["service"])) {
        $service = filter_var($_GET["service"], FILTER_SANITIZE_STRING);
    }

    // Email headers
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "From: $from_email\r\n";
    $headers .= "Reply-To: $reply_to_email\r\n";

    // Email body content
    $body  = "Name: " . $sender_name;
    $body .= "\nEmail: " . $reply_to_email;
    $body .= "\nContact Number: " . $contact;

    if (isset($service)) {
        $body .= "\nService: " . $service;
    }

    // Add the message in the body, not the subject
    $body .= "\nMessage: " . $message;

    // Send email
    $success = mail($recipient_email, $subject, $body, $headers);

    if ($success) {
        $_SESSION['email_sent'] = true; // Indicate successful email sending
        header('Location: thankyou'); // Redirect to thank you page
        exit;
    } else {
        // Handle email sending failure (optional)
        $_SESSION['email_sent'] = false;
        header('Location: index.php'); // Redirect to index if failed
        exit;
    }
} else {
    header('Location: index.php'); // Redirect to index if email is not set
    exit;
}
?>