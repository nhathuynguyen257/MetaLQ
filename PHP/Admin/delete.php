<?php 
session_start();
require '../account/connect.php';
$id = $_GET['id'];
$query = "DELETE FROM user WHERE user.id = '$id'";
$query_run = mysqli_query($conn, $query);
// show the notification to make sure the user want to delete the account
if ($query_run) {
    echo "<script>alert('User Deleted')</script>";
    header("Location: admin.php");
} else {
    echo "<script>alert('User Not Deleted')</script>";
}