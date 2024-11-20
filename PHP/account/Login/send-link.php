<?php
if(isset($_POST['submit-email']) && $_POST['email'])
{
    $email = $_POST['email'];
    // check if the email is in the database
    require '../connect.php';
    $sql = "SELECT * FROM user WHERE user_email = '".$email."'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1)
    {
        // generate a random code
        $code = rand(100000,999999);
        $link='href="http://localhost:3000/PHP/account/Login/send-link.php?email='.$email.'&code='.$code.'"';
        // create a link 2 to send email
        $link2 = '<a '.$link .'>Link</a>';
        // retrive data from reset table
        $sql = "SELECT * FROM reset WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // check if the email is in the reset table
        if(empty($row)) {
            // save info to reset table
            $sql_insert = "INSERT INTO reset (email, code) VALUES ('$email', '$code')";
            $result_insert = mysqli_query($conn, $sql_insert);
        }
        else
        {
            // update info to reset table
            $sql_update = "UPDATE reset SET code = '$code' WHERE email = '$email'";
            $result_update = mysqli_query($conn, $sql_update);
        }

        // Formulate and send email
        $from = 'wwwdoanvonguyen@gmail.com';
        $to = $email;
        $subject = "Password Recovery - METAaov Team";
        $message = '
        <p>Dear '. $email .',</p>
        <p>Please click on the following link to reset your password.</p>
        <p>-------------------------------------------------------------</p>
        <p>'.$link2.'</p>
        <p>-------------------------------------------------------------</p>
        <p>If you did not request this forgotten password email, no action</p>
        <p>is needed, your password will not be reset. However, you may want to log into</p>
        <p>your account and change your security password as someone may have guessed it.</p>
        Thanks,
        <p>METAaov Team</p>
        ';
        // set content-type header for sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers = "Content-type: text/html; charset=utf-8" . "\r\n";
        $headers = 'From: '. $from." \r\n";
        mail($to, $subject, $message, $headers);

        $msg = '<div class="msg"><p>Please check your email for a confirmation link to complete your password reset!</p></div><br />';

    }
    else
    {
        $error = '<div class="error"><p>This email address does not exist in our database!</p></div><br />';
    }
}
    