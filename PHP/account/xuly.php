<?php
session_start();
require 'connect.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // check user
    $query_user = "SELECT * FROM user WHERE user_email = '$email' AND user_pass = '$password'";
    $result = mysqli_query($conn, $query_user);
    $row = mysqli_fetch_assoc($result);
    if ($email == $row['user_email'] && $password == $row['user_pass']) {
        $_SESSION['user'] = $row['user_name'];
        echo "<script>alert('Login successfully')</script>";
        // back to the last page using history
        header('location: ../../5v5/Home.php');
        exit;
    } else {
        echo "<script>alert('Invalid email or password')</script>";
    }

    // check admin
    $query_admin = "SELECT * FROM admin WHERE admin_email = '$email'";
    $result = mysqli_query($conn, $query_admin);
    $row = mysqli_fetch_assoc($result);
    error_reporting(E_ERROR | E_PARSE);
    if ($email == $row['admin_email'] && $password == $row['admin_pass']) {
        $_SESSION['admin'] = $row['admin_name'];

        echo "<script>alert('Login successfully')</script>";
        header('location: ../../Admin/admin.php');
    } else {
        echo "<script>alert('Invalid email or password')</script>";
    }
}