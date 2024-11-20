<?php session_start(); ?>
<!-- <?php setcookie('username', $_SESSION['username'], time() + 60, "/"); // 86400 = 1 day
?> -->

<!DOCTYPE html>
<html lang="en" class="nav-collapsed">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AOV Stats Champions Patch 24 - METAaov</title>
    <link rel="icon" href="../../Images/Icon-Logo/Logo-team.png" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/Champion.css">
    <link rel="stylesheet" href="../../CSS/Home.css">
    <link rel="stylesheet" href="../../Extension/font-awesome.css">
    <link rel="stylesheet" href="../../CSS/ChampStatsStyle.css">
</head>

<body class="wrapper-page" style="background-position-y: 0px !important;">
    <div class="content-body">
        <!--Header-->
        <div id="nav-wrapper" class="head info-tab">
            <div class="head-inner">
                <div id="nav-search" style="display:flex;align-items:center;font-size:10px;">
                    <div id="nav-search-inner" class="searching">
                        <div class="typeahead-container">
                            <div class="bx-search">
                                <form class="search search-first">
                                    <input type="text" class="input-bx1" id="filter-name" placeholder="Tìm kiếm...">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="head-inner logo-team">
                <div style="width:100%">
                    <a href="Home.php" style="display:flex;justify-content:center;align-items:center;font-size:20px;">
                        <img src="../../Images/Icon-Logo/Logo-team.png" alt="logo" style="width:32px;height:32px;">
                        <b class="f-word">META</b>
                        <b class="s-word">aov</b>
                    </a>
                </div>
            </div>
            <div class="head-inner logo-team" style="width:450px;">
                <ul class="menu-top">
                    <li>
                        <a id="signup" href="../../PHP/User/Register.php">Đăng ký</a>
                    </li>
                    <li>
                        <a id="login" href="../../PHP/User/Login.php">Đăng nhập</a>
                    </li>

                </ul>
            </div>
        </div>
        <!--Menu-->
        <div id="menu-wrapper" class="mu-wr _bca1">
            <div id="nav-menu" class="tab-link info-tab">
                <div class="menu-inner">
                    <div class="info-tab">
                        <div class="content-logo" style="margin-bottom:20px">
                            <div class="item-logo" style="padding-left:14px">
                                <div style="display:flex;justify-content:center;align-items:center;">
                                    <img class="img-pos" src="../../Images/Icon-Logo/Logo-team.png" alt="logo"
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
                                    <a href="../3v3/3v3.php" class="item-logo nav-item">
                                        <div style="display:flex;justify-content:center;align-items:center;">
                                            <b class="text-logo logo-st">3v3</b>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="../1v1/1v1.php" class="item-logo nav-item">
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
                                        style="display:flex;justify-content:center;font-size:17px;text-align:center">24</b>
                                    <span class="text-logo logo-st" style="position:relative">Patch
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
                            <a class="item-logo nav-item " href="../5v5/Home.php" style="padding-left: 14px;">
                                <div style="display: flex;justify-content: center;align-items: center;">
                                    <span style="width: 32px;height: 32px;" data-loaded="true">
                                        <ion-icon name="home"></ion-icon>
                                    </span>
                                    <div class="text-logo logo-st">Home</div>
                                </div>
                            </a>
                        </div>
                        <div class="menu-item no-button">
                            <a class="item-logo nav-item btn-cl" href="#" style="padding-left: 14px;">
                                <div style="display: flex;justify-content: center;align-items: center;">
                                    <span style="width: 32px;height: 32px;" data-loaded="true">
                                        <ion-icon name="stats-chart"></ion-icon>
                                    </span>
                                    <div class="text-logo logo-st">Stats</div>
                                </div>
                            </a>
                        </div>
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
        <!--Content-->
        <!-- Introducing the champion and the game rate part-->
        <div class="ct-02 ge-ct">
            <div class="ep-ct"></div>
            <div class="ge-ct" style="display: flex;flex-direction: column;width: 100%;margin-top: 90px;">
                <div id="content-wrapper" class="wr-tt ge-ct">
                    <div class="content ge-ct">
                        <div style="display: flex; flex-direction: column;align-items: center;width: 100%;"
                            class="ge-ct">
                            <div class="tooltip-container tp-cr">
                                <div style="position:relative">
                                    <div id="splash-content" class="spct-st">
                                        <div class="spct-inner">
                                            <div class="text">
                                                <div style="display: flex;">
                                                    <div class="title">
                                                        <h1 class="title-inner1"
                                                            style="margin-left: 20px; font-size: 2em;font-weight: bold;line-height: 0.9;">
                                                            <span style="display: flex;font-size: 30px;">
                                                                Arena of Valor stats guilding
                                                            </span>
                                                            <span class="title-inner2">Patch
                                                                24</span>
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="map-mode ch-ct">
                                            <a href="#" class="active home-page ge-st"
                                                style="border-bottom-color: #fff;">
                                                <span class="name-map text-hover">5v5</span>
                                            </a>
                                            <a href="../3v3/Stats_3v3.php" class="3v3-page ge-st"
                                                style="border-bottom-color: #fff;">
                                                <span class="name-map text-hover">3v3</span>
                                            </a>
                                            <a href="../1v1/Stats_1v1.php" class="1v1-page ge-st"
                                                style="border-bottom-color: #fff;">
                                                <span class="name-map text-hover">1v1</span>
                                            </a>
                                            <div style="flex-basis: 100%; justify-content: flex-end; display: flex;">
                                            </div>
                                        </div>
                                        <div class="descript descript-bg descript-pos">
                                            <div class="descript-para" style="display: flex;">
                                                <span>
                                                    Cơ sở dữ liệu của chúng tôi chứa dữ liệu từ hàng triệu trò chơi được
                                                    lấy từ mỗi bản vá.
                                                    Chúng tôi sử dụng dữ liệu đó để tính toán xu hướng, tỷ lệ thắng, tỷ
                                                    lệ chọn, v.v. Sử dụng bảng bên dưới để phân tích số
                                                    liệu thống kê cho bất kỳ tướng
                                                    nào ở bất kỳ độ khó nào và tạo lợi thế cho mình bằng cách chọn tướng
                                                    tốt nhất để chơi tiếp theo.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="splash" class="sp-a1 spl-st">
                                        <div class="background color-bg"
                                            style="background-image: linear-gradient(45deg, rgb(17,17,17), transparent), url(https://www.xtmobile.vn/vnt_upload/news/07_2022/05/lien-quan.jpg);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Guiding user part -->
                    <div class="content content-details" style="flex-direction: column;">
                        <div id="content-inner" style="display: flex;justify-content: center;" class="ch-ct">
                            <div class="table-champ" style="position: relative;height: min-content;">
                                <span id="above-content"></span>
                                <div id="page-content" class="table-champ ct-gap">
                                    <div class="table-st te-st" style="height: 100%;min-height: 645px;">
                                        <div>
                                            <div id="top-scroll"></div>
                                            <div id="table-scroll" class="_bca1">
                                                <table class="stats-table tb-st tablesorter tablesorter-default"
                                                    style="min-width:775px;" role="grid">
                                                    <thead>
                                                        <tr class="info-tab tablesorter-headerRow odd" role="row">
                                                            <th class="th-st tablesorter-header tablesorter-headerUnSorted"
                                                                data-colum="0" tabindex="0" scope="col"
                                                                role="columnheader" aria-disabled="false"
                                                                unselectedtable="on" aria-sort="none"
                                                                aria-label="Name: Chua duoc xep, kich hoat de ap dung xep giam dan"
                                                                style=user-select:none data-sortedby="user"
                                                                onclick="sortListName()">
                                                                <div class="tablesorter-header-inner">Name
                                                                </div>
                                                            </th>
                                                            <th class="th-st tablesorter-header tablesorter-headerUnSorted"
                                                                data-colum="1" tabindex="0" scope="col"
                                                                role="columnheader" aria-disabled="false"
                                                                unselectedtable="on" aria-sort="none"
                                                                aria-label="Role: Chua duoc xep, kich hoat de ap dung xep giam dan"
                                                                style=user-select:none>
                                                                <div class="tablesorter-header-inner">Role
                                                                </div>
                                                            </th>
                                                            <th class="th-st tablesorter-header tablesorter-headerUnSorted"
                                                                data-colum="2" tabindex="0" scope="col"
                                                                role="columnheader" aria-disabled="false"
                                                                unselectedtable="on" aria-sort="none"
                                                                aria-label="Tier: Chua duoc xep, kich hoat de ap dung xep giam dan"
                                                                style=user-select:none>
                                                                <div class="tablesorter-header-inner">Tier</div>
                                                            </th>
                                                            <th class="th-st tablesorter-header tablesorter-headerUnSorted"
                                                                data-colum="3" tabindex="0" scope="col"
                                                                role="columnheader" aria-disabled="false"
                                                                unselectedtable="on" aria-sort="none"
                                                                aria-label="Trend: Chua duoc xep, kich hoat de ap dung xep giam dan"
                                                                style=user-select:none>
                                                                <div class="tablesorter-header-inner">Trend</div>
                                                            </th>
                                                            <th class="th-st tablesorter-header tablesorter-headerUnSorted"
                                                                data-colum="3" tabindex="0" scope="col"
                                                                role="columnheader" aria-disabled="false"
                                                                unselectedtable="on" aria-sort="none"
                                                                aria-label="Win rate: Chua duoc xep, kich hoat de ap dung xep giam dan"
                                                                style=user-select:none>
                                                                <div class="tablesorter-header-inner">Win Rate</div>
                                                            </th>
                                                            <th class="th-st tablesorter-header tablesorter-headerUnSorted"
                                                                data-colum="4" tabindex="0" scope="col"
                                                                role="columnheader" aria-disabled="false"
                                                                unselectedtable="on" aria-sort="none"
                                                                aria-label="Pick rate: Chua duoc xep, kich hoat de ap dung xep giam dan"
                                                                style=user-select:none>
                                                                <div class="tablesorter-header-inner">Pick Rate</div>
                                                            </th>
                                                            <th class="th-st tablesorter-header tablesorter-headerUnSorted"
                                                                data-colum="5" tabindex="0" scope="col"
                                                                role="columnheader" aria-disabled="false"
                                                                unselectedtable="on" aria-sort="none"
                                                                aria-label="Ban rate: Chua duoc xep, kich hoat de ap dung xep giam dan"
                                                                style=user-select:none>
                                                                <div class="tablesorter-header-inner">Ban Rate</div>
                                                            </th>
                                                            <th class="th-st tablesorter-header tablesorter-headerUnSorted"
                                                                data-colum="6" tabindex="0" scope="col"
                                                                role="columnheader" aria-disabled="false"
                                                                unselectedtable="on" aria-sort="none"
                                                                aria-label="KDA: Chua duoc xep, kich hoat de ap dung xep giam dan"
                                                                style=user-select:none>
                                                                <div class="tablesorter-header-inner">KDA</div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody aria-live="polite" aria-relevant="all">
                                                        <?php
                                                            require 'Stats_details.php'
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <!-- Logo team -->
                    <div class="right-text">
                        <div class="right-para">
                            <a href="../5v5/Home.php">
                                <img src="../../Images/Icon-Logo/Logo-team.png" alt="Logo"
                                    style="width:100%;height:100%;">
                            </a>
                        </div>
                    </div>
                    <!--Feedback-->
                    <div class="feedback-form fb-form">
                        <form action="" method="post">
                            <div class="feedback-title">Feedback</div>
                            <div class="feedback-input">
                                <input type="text" name="user_name" class="feedback-form-ct name" placeholder="Name">
                                <input type="text" name="user_email" class="feedback-form-ct email" placeholder="Email">
                                <input type="text" name="subject" class="feedback-form-ct subject"
                                    placeholder="Subject">
                                <textarea name="feedback-text" id="feedback-ct" cols="30" rows="10"
                                    class="feedback-form-ct message" placeholder="Message"></textarea>
                                <div class="feedback-form buttons">
                                    <button name="submit-feedback" class="feedback-button">SEND</button>
                                    <?php
                                        include '../account/send_mail.php';
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script type="text/javascript" src="../../JS/Stats.js"></script>
        <script type="text/javascript" src="../../JS/navigation.js"></script>

        <?php
    // Start the session
    error_reporting(E_ERROR | E_PARSE);
    $username = $_SESSION['user'];
    // Check if the session variable username is set
    if (isset($username)) {
    ?>
        <?php echo '
    <script>
    // using JS to change the login and register button to user name and logout button if session is set
    var show_log = document.getElementById("login");
    var show_reg = document.getElementById("signup");
    if(show_log != null || show_reg != null) {
        show_log.innerHTML = "<p>Xin chào, ' . $username . '</p>";
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
        <a href="../../PHP/User/login.php">Đăng nhập</a>
        <a href="../../PHP/User/register.php">Đăng ký</a>\
    </script>';
        ?>
        <?php
    }
    ?>
</body>

</html>