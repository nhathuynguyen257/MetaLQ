<?php
require '../connect.php';
session_start();
// check if the key and email are in the URL
if (isset($_GET["email"]) && isset($_GET["code"]))
{
    $_SESSION['email']=$_GET['email'];
    $code = $_GET["code"];
    // check credentials from the URL again in reset table
    $sql = "SELECT * FROM reset WHERE email = '".$_SESSION['email']."' AND code = '".$code."'";
    $result = mysqli_query($conn, $sql);
    if($code != mysqli_fetch_assoc($result)['code'])
    {
        $expired = "Sorry,Your reset link has expired!";
    }
}


//reset password
    if(isset($_POST['submit-new-pass'])) 
    {
        $pass1 = $_POST['new-pass'];
        $pass2 = $_POST['re-pass'];
        
        if($pass1 == $pass2) {
            $pass = $pass1;
        }
        else 
        {
            $error = "Password does not match!Please type correctly!";
            
        }
    //update password
    if(empty($error)) {
        $sql = "UPDATE user SET user_pass = '".$pass."' WHERE user_email = '".$_SESSION['email']."'";
        $result = mysqli_query($conn, $sql);

        $msg = "Your password has been updated successfully! <a href='Login.php'>Click here</a> to Login.";

        session_destroy();
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
            <h2>Reset Your Password</h2>
            <!-- Message  and Error-->
            <?php
                if(isset($msg)) {
                    echo '<p class="success">'.$msg.'</p>';
                }
                ?>
            <?php
                if(isset($error)) {
                    echo '<p class="error">'.$error.'</p>';
                }
                ?>
            <?php
                if(!isset($expired) && isset($_GET['code'])) {
                echo '
                <form action="reset-pass.php" method="post">
                    <div class="input-box">
                        <span class="icon" id="lock">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input class="new-pass" type="password" name="new-pass">
                        <label for="new-pass">New password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon" id="lock">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input class="re-pass" type="password" name="re-pass">
                        <label for="re-pass">Repeat new password</label>
                    </div>
                    <button type="submit" name="submit-new-pass" class="btn-submit">Submit</button>
                    <div class="home-back">
                        <a href="../../5v5/Home.php">Back to Home</a>
                    </div>
                </form>';
                }
            ?>

        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>