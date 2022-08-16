<?php 
if(isset($_POST['submit'])){
    $to = "delportr40@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $subject = "Form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);

    echo "Mail Sent. Thank you " . $first_name . ", I will contact you shortly.";

    }
?>