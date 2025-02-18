function sendMail(event) {
    event.preventDefault();  // لمنع إعادة تحميل الصفحة عند إرسال النموذج

    let params = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        subject: document.getElementById("subject").value,
        message: document.getElementById("message").value
    };

    emailjs.send("service_yje6rwr", "template_9pqvs61", params)
        .then(function(response) {
            console.log("Email sent successfully", response);
            // إظهار رسالة التأكيد بعد إرسال البريد
            document.getElementById("confirmationMessage").style.display = "block";
            document.getElementById("contactForm").reset(); // إعادة تعيين النموذج بعد الإرسال
        })
        .catch(function(error) {
            console.error("Error while sending email", error);
        });
}
