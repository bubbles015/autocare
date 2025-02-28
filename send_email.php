<<<<<<< HEAD
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "chan.canave@gmail.com"; // Replace with your email
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    $fullMessage = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>
=======
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "chan.canave@gmail.com"; // Replace with your email
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    $fullMessage = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>
>>>>>>> 31173d64d293593e66c6c1364a43e89eba6de079
