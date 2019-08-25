
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<?php 
if(isset($_POST['submit'])){
    $to = "iyiolaosuagwu"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $messageText = $_POST['messagetext'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . $email . $phone . $messageText. " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    if(mail){
       swal("message sent", "You clicked the button!", "success");
    }
    swal("message not sent", "You clicked the button!", "danger");
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>