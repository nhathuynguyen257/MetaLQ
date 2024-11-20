<?php session_start(); ?>
<?php
// setcookie('username', $_SESSION['username'], time() + 60, "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html lang="vi" class="nav-collapsed">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="Meta Liên Quân's Homepage">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>META Liên Quân</title>
    <link rel="stylesheet" href="../../CSS/Home.css">
    <link rel="stylesheet" href="../../Extension/font-awesome.css">
    <link rel="stylesheet" href="../../CSS/jquery.typeahead.min.css">
    <link rel="stylesheet" href="../../CSS/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.3/typeahead.jquery.min.js">

    <link rel="icon" href="../../Images/Icon-Logo/unnamed.png" type="image/x-icon">
</head>

<body class="wrapper-page" style="background-position-y: 0px !important;">
    <div class="content-body">
        <!--Header-->
        <div id="nav-wrapper" class="head info-tab">
            <div class="head-inner">
            </div>
            <!-- Logo and right menu content( Login, Register, ... ) -->
            <div class="head-inner logo-team">
                <div style="width:100%">
                    <a href="../5v5/Home.php"
                        style="display:flex;justify-content:center;align-items:center;font-size:20px;">
                        <img src="../../Images/Icon-Logo/N5-removebg-preview.png" alt="logo"
                            style="width:32px;height:32px;">
                        <b class="f-word">META</b>
                        <b class="s-word">aov</b>
                    </a>
                </div>
            </div>
            <div class="head-inner logo-team" style="width:450px;">
                <ul class="menu-top">
                    <li>
                        <a id="signup" href="../account/Register/Register.php">Đăng ký</a>
                    </li>
                    <li>
                        <a id="login" href="../account/Login/Login.php">Đăng nhập</a>
                    </li>

                </ul>
            </div>
        </div>
        <!--Menu-->
        <div id=" menu-wrapper" class="mu-wr _bca1">
            <div id="nav-menu" class="tab-link info-tab">
                <div class="menu-inner">
                    <div class="info-tab">
                        <div class="content-logo" style="margin-bottom:20px">
                            <div class="item-logo" style="padding-left:14px">
                                <div style="display:flex;justify-content:center;align-items:center;">
                                    <img class="img-pos" src="../../Images/Icon-Logo/N5-removebg-preview.png" alt="logo"
                                        style="width:32px;height:32px;">
                                    <span class="text-logo logo-st">
                                        <b class="f-word word">META</b>
                                        <b class="s-word word">aov</b>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item info-link">
                            <a id="1-dropdown" class="nav-dropdown item-logo nav-item" onclick="navDropdown('1');">
                                <div style="display:flex;justify-content:center;align-items:center;">
                                    <b class="patch" style="display:flex;justify-content:center;font-size:17px;">5v5</b>
                                    <span class="text-logo logo-st" style="position:relative;left:-10px;">Chế độ
                                        <b>5v5</b>
                                    </span>
                                </div>
                                <span id="1-arrow" class="fa fa-chevron-down transition"
                                    style="min-width:12px;margin-left:5px;" data-chevron-idle="fa-chevron-down"
                                    data-chevron-active="fa-chevron-up">
                                </span>
                            </a>
                            <div id="1-content" class="otherCt-1 dropdown-content" style="display:none;">
                                <div>
                                    <a href="../PHP/../3v3/3v3.php" class="item-logo nav-item">
                                        <div style="display:flex;justify-content:center;align-items:center;">
                                            <b class="text-logo logo-st">3v3</b>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="../PHP/../1v1/1v1.php" class="item-logo nav-item">
                                        <div style="display:flex;justify-content:center;align-items:center;">
                                            <b class="text-logo logo-st">1v1</b>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item info-link">
                            <a id="2-dropdown" class="nav-dropdown item-logo nav-item" onclick="navDropdown('2');">
                                <div style="display:flex;justify-content:center;align-items:center;">
                                    <b class="patch"
                                        style="display:flex;justify-content:center;font-size:17px;text-align:center;">24</b>
                                    <span class="text-logo logo-st" style="position:relative;">Patch
                                        <b>24</b>
                                    </span>
                                </div>
                                <span id="2-arrow" class="fa fa-chevron-down transition"
                                    style="min-width:12px;margin-left:5px;" data-chevron-idle="fa-chevron-down"
                                    data-chevron-active="fa-chevron-up">
                                </span>
                            </a>
                            <div id="2-content" class="ct-2 dropdown-content" style="display:none;">
                                <div>
                                    <div class="item-logo nav-item">
                                        <div style="display:flex;justify-content:center;align-items:center;">
                                            <b class="text-logo logo-st">23</b>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="item-logo nav-item">
                                        <div style="display:flex;justify-content:center;align-items:center;">
                                            <b class="text-logo logo-st">22</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item no-button">
                            <a class="item-logo nav-item btn-cl" href="Home.php" style="padding-left: 14px;">
                                <div style="display: flex;justify-content: center;align-items: center;">
                                    <span style="width: 32px;height: 32px;" data-loaded="true">
                                        <ion-icon name="home"></ion-icon>
                                    </span>
                                    <div class="text-logo logo-st">Home</div>
                                </div>
                            </a>
                        </div>
                        <div class="menu-item no-button">
                            <a class="item-logo nav-item" href="Stats.php" style="padding-left: 14px;">
                                <div style="display: flex;justify-content: center;align-items: center;">
                                    <span style="width: 32px;height: 32px;" data-loaded="true">
                                        <ion-icon name="stats-chart"></ion-icon>
                                    </span>
                                    <div class="text-logo logo-st">Stats</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="empty-wrapper">
                        <div>
                            <a href="https://lienquan.garena.vn/" target="_blank">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Content-->
        <div class="ct-02 ge-ct">
            <!-- The div container for the left sidebar -->
            <div class="ep-ct"></div>
            <!-- The div contain for the main content -->
            <div class="ge-ct" style="display:flex;flex-direction:column;width:100%;margin-top:90px;">
                <div id="content-wrapper" class="ge-ct wr-tt">
                    <div class="ct-wr ge-ct">
                        <div style="display:flex;flex-direction:column;align-items:center;width:100%" class="ge-ct">
                        </div>
                    </div>
                    <div class="ct-wr ct-gap" style="flex-direction: column;">
                        <h2 class="title">Administrator</h2>
                        <div class="ge-ct" style="display: flex;justify-content: center;">
                            <!-- show the table of users -->
                            <div class="container">
                                <h1>Update Information</h1>
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label for="name">User Name:</label>
                                        <input type="text" id="name" name="name" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="text" id="email" name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <label for="dsname">Display name:</label>
                                        <input type="text" id="dsname" name="dsname"
                                            placeholder="Enter your display name">
                                    </div>
                                    <input type="submit" name="submit" value="Confirm">
                                    <a href="Admin.php">Back</a>
                                    <?php
                                        // insert the user's information into the database
                                        require_once'../account/connect.php';
                                        if(isset($_POST['submit'])){
                                            $name = $_POST['name'];
                                            $email = $_POST['email'];
                                            $display_name = $_POST['dsname'];
                                            $sql = "INSERT INTO user (user_name, user_email, display_name) VALUES ('$name', '$email','$display_name')";
                                            $result = mysqli_query($conn, $sql);
                                            if($result){
                                                echo '<script>alert("Insert successfully")</script>';
                                                header("Location: admin.php");
                                            }
                                            else{
                                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                            }
                                        }
                                    ?>
                                </form>
                            </div>
                            <div class="empty-slide"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <div class="footer ge-ct ft-bg">
            <div class="ft ge-ct">
                <div class="ep-ct"></div>
                <div class="ft-content ct-gap">
                    <div class="left-text text-st">
                        <div class="left-grid">
                            <div class="left-para">
                                <div class="para-title">AOV 5v5 items</div>
                                <a href="../5v5/Home.php" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">Home</span>
                                </a>
                                <a href="../5v5/Stats.php" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">Stats</span>
                                </a>
                                <a href="Plot.php" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">Plot</span>
                                </a>
                                <a href="Update.php" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">Updates</span>
                                </a>
                            </div>
                        </div>
                        <div class="left-grid">
                            <div class="left-para">
                                <div class="para-title">AOV mode</div>
                                <a href="../5v5/Home.php" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">5v5</span>
                                </a>
                                <a href="../3v3/3v3.php" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">3v3</span>
                                </a>
                                <a href="../1v1/1v1.php" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">1v1</span>
                                </a>
                            </div>
                        </div>
                        <div class="left-grid">
                            <div class="left-para">
                                <div class="para-title">Team members</div>
                                <a href="#" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">Trịnh Huỳnh Bảo Ngân</span>
                                </a>
                                <a href="#" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">Huỳnh Ngọc Trang</span>
                                </a>
                                <a href="#" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">Nguyễn Nhật Huy</span>
                                </a>
                                <a href="#" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">Nguyễn Đình Vỹ</span>
                                </a>
                                <a href="#" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">Đoàn Võ Nguyên</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-text">
                        <div class="right-para">
                            <img src="../../Images/Icon-Logo/N5-removebg-preview.png" alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="../../JS/navigation.js"></script>
    <script type="text/javascript" src="../../JS/Home.js"></script>
    <script type="text/javascript" src="../../JS/metaaov.js"></script>
    <?php
    // Start the session
    $adminName= $_SESSION['admin'];
    echo $adminName;
    // Check if the session variable username is set
    if (isset($adminName)) {
    ?>
    <?php echo '
    <script>
    // using JS to change the login and register button to user name and logout button if session is set
    var show_log = document.getElementById("login");
    var show_reg = document.getElementById("signup");
    if(show_log != null || show_reg != null) {
        show_log.innerHTML = "<p>Xin chào admin, ' . $adminName . '</p>";
        // Print the echo statement in the a tag have id login
        show_reg.innerHTML = "<a href=\"../account/logout.php\">Đăng xuất</a>";
    }
    </script>';
        ?>
    <?php
    } else {
    ?>
    <?php echo '
    <script>
        // Print back the login and register button if session variable username is not set
        <a href="../account/Login/Login.php">Đăng nhập</a>
        <a href="../account/Register/Register.php">Đăng ký</a>
    </script>';
        ?>
    <?php
    }
    ?>
</body>

</html>