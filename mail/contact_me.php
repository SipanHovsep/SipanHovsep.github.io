<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $email_address = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Check for empty fields
    if (empty($name) || empty($email_address) || empty($phone) || empty($message)) {
        echo "Error: All fields are required.";
        return false;
    }

    // Email details
    $to = "cycleabudhabi@gmail.com"; // Your email
    $email_subject = "Contact Form Submission from: $name";
    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Here are the details:\n\n".
                  "Name: $name\n".
                  "Email: $email_address\n".
                  "Phone: $phone\n".
                  "Message:\n$message";
    $headers = "From: noreply@yourdomain.com\r\n"; // Set the "From" email address
    $headers .= "Reply-To: $email_address\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="contact.php" method="POST">
        <label>
            Your Name:
            <input type="text" name="name" required>
        </label>
        <br>
        <label>
            Your Email:
            <input type="email" name="email" required>
        </label>
        <br>
        <label>
            Your Phone:
            <input type="text" name="phone" required>
        </label>
        <br>
        <label>
            Your Message:
            <textarea name="message" required></textarea>
        </label>
        <br>
        <button type="submit">Send</button>
    </form>
</body>
</html>
