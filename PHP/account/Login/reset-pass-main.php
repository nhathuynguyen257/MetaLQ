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
        $link='href="http://localhost:3000/PHP/account/Login/reset-pass.php?email='.$email.'&code='.$code.'"';
        // create a link 2 to send email
        $link2 = '<a '.$link .'>Click here</a>';
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
        <img src="../../../Images/Icon-Logo/Logo-team.png" alt="Logo-team" border="0">
        <p>Dear '. $email .',</p>
        <p>Please click on the following link to reset your password:</p>
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
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: '. $from."\r\n";
        mail($to, $subject, $message, $headers);

        $msg = '<div class="msg"><p class = "notify-check">Please check your email for a confirmation link to complete your password reset!</p></div><br />';

    }
    else
    {
        $error = '<div class="error"><p>This email address does not exist in our database!</p></div><br />';
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../../../Images/Icon-Logo/Logo-team.png" type="image/x-icon">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../Login/Login.css">
    <link rel="stylesheet" href="../Login/reset-pass.css">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<body>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Reset Password</h2>
            <!-- Message  and Error-->
            <?php
                if(isset($msg))
                {
                    echo $msg;
                }
            ?>
            <?php
                if(isset($error))
                {
                    echo $error;
                }
            ?>
            <form action="reset-pass-main.php" method="post">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-circle"></ion-icon>
                    </span>
                    <input class="email" type="text" name="email">
                    <label for="email">Email</label>
                </div>
                <button type="submit" name="submit-email" class="btn-submit">Submit</button>
                <div class="home-back">
                    <a href="../../5v5/Home.php">Back to Home</a>
                </div>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>