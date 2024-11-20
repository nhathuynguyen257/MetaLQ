<?php
    // Start the session( bắt đầu phiên)
    error_reporting(E_ERROR | E_PARSE);
    $username = $_SESSION['user'];
    echo $username;
    // Check if the session variable username is set( kiểm tra xem biến session username có được đặt hay không)
    if (!empty($username)) {
        echo '
        <script>
        // using JS to change the login and register button to user name and logout button if session is set( sử dụng JS để thay đổi nút đăng nhập và đăng ký thành tên người dùng và nút đăng xuất nếu phiên được đặt)
        var show_log = document.getElementById("login");
        var show_reg = document.getElementById("signup");
            show_log.innerHTML = "<p>Xin chào, ' . $username . '</p>";
            // Print the echo statement in the a tag have id login( In câu lệnh echo trong thẻ a có id là login)
            show_reg.innerHTML = "<a href=\"../account/logout.php">Đăng xuất</a>";
    </script>';
    ?>
<?php
    } else {
    ?>
<?php echo '
    <script>
        // Print back the login and register button if session variable username is not set( In lại nút đăng nhập và đăng ký nếu biến session username không được đặt)
        <a href="../account/Login/Login.php">Đăng nhập</a>
        <a href="../account/Login/Register.php">Đăng ký</a>
    </script>';
    ?>
<?php
    }