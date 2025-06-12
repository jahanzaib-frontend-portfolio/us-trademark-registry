<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    echo "No data received.";
    exit;
}

$mail = new PHPMailer(true);

try {
    // 🔧 LOCAL SMTP: MailHog config
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->SMTPAuth = false;
    $mail->Port = 1025;

    $mail->setFrom('test@local.dev', 'Step Form Bot');
    $mail->addAddress('tahaq.koder360@gmail.com');

    $mail->isHTML(false);
    $mail->Subject = 'New Step Form Submission';

    $body = "Step Form Data:\n\n";
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $body .= "$key: " . implode(", ", $value) . "\n";
        } else {
            $body .= "$key: $value\n";
        }
    }

    $mail->Body = $body;

    $mail->send();
    echo "Email sent successfully.";
} catch (Exception $e) {
    echo "Error sending email: " . $mail->ErrorInfo;
}