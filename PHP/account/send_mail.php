<?php
require 'connect.php';
if(isset($_POST['submit-feedback'])) {
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $subject = $_POST['subject'];
    $message = $_POST['feedback-text'];
    $sql = "INSERT INTO feedback (user_name, user_email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    $result = mysqli_query($conn, $sql);
    if(!$result) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $to = "$email";
    $subject = "Feedback";
    $message = "Thanks for your feedback, $name. We will contact you soon.";
    $from = "wwwdoanvonguyen@gmail.com";
    $header = "From:" . $from;
    mail($to, $subject, $message, $header);
    // scrip show alert and redirect to the last page
    echo "<script>alert('Thanks for your feedback, $name. We will contact you soon.')</script>";
    echo "<script>window.history.go(-1);</script>";
    // clear all fields
    $name = "";
    $email = "";
    $subject = "";
    $message = "";
    mysqli_close($conn);
}