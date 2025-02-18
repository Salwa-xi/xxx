<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $category = $_POST['category'];

    // البريد الإلكتروني الذي سيتم إرسال الاستفسار إليه
    $to = "your-email@example.com"; // استبدل هذا بعنوان بريدك الإلكتروني
    $subject = "New Inquiry from $name";
    $body = "You have received a new message.\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Category: $category\n".
            "Message:\n$message";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $body, $headers)) {
        // إذا تم إرسال البريد بنجاح
        echo "<script>alert('Thank you for your message! Your inquiry has been received and you will be replied to shortly.'); window.location.href = 'thank-you.html';</script>";
    } else {
        echo "<script>alert('حدث خطأ أثناء إرسال استفسارك. حاول مرة أخرى لاحقًا.');</script>";
    }
}
?>
