<?php
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $confirm_pass=$_POST["confirm_password"];
    if($pass==$confirm_pass)
    {
        require '../connect.php';
        $sql = "UPDATE user SET user_pass = '".$pass."' WHERE user_email = '".$email."'";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
            <p><a href="http://localhost:3000/PHP/account/Login/Login.php">
            Click here</a> to Login.</p></div><br />';
        }
        else
        {
            echo "Something went wrong!";
        }
    }
    else
    {
        echo "Password does not match!";
    }
}
?>