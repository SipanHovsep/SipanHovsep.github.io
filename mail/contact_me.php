<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="https://formspree.io/f/xeoovewl" method="POST">
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
