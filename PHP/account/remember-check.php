<?php
require '../account/connect.php';
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //check login
    $query = "SELECT * FROM user WHERE user_email = '$email' AND user_pass = '$password'";
    $query_run = mysqli_query($conn, $query);
    if(mysqli_num_rows($query_run) > 0) 
    {
        // session
        $row = mysqli_fetch_array($query_run);
        $_SESSION['user_name'] = $row['user_name'];
        //check the checkbox
        if(!empty($_POST['remember-checkbox'])) {
            $remember = $_POST['remember-checkbox'];

            //set cookie
            setcookie('email', $email, time() + (86400 * 30));
            setcookie('password', $password, time() + (86400 * 30));
            setcookie('remember', $remember, time() + (86400 * 30));
        }
        
    }
    else
    {
        echo '<script type="text/javascript">alert("Email or Password is incorrect")</script>';
    }
}