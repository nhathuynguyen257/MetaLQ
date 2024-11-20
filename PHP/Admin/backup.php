<?php
// connect of meta lienquan
$servername = "localhost";
$username = "root";
$password = "Vonguyen123@";
$dbname = "mt_lq";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Không thể kết nối đến database");
// Select database
mysqli_select_db($conn, $dbname) or die("Không thể kết nối đến database");
// Set charset
mysqli_query($conn, "SET NAMES 'utf8'");
// Backup database
$dump = "mysqldump -u root -p --databases mt_lq mt_lq_1v1 mt_lq_3v3 > databases_mt_lq_mt_lq_1v1_mt_lq_3v3.sql";
if (isset($dump) != null)
    echo 'Back up successfully';
?>