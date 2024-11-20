<?php session_start(); ?>
<?php
// setcookie('username', '$_SESSION['user'], time() + 60, '/');
?>
<!DOCTYPE html>
<html lang="en" class="nav-collapsed">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="Meta Liên Quân's Homepage">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METAaov AOV 1v1 Build & Guides Patch 24</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/Home.css">
    <link rel="stylesheet" href="../../Extension/font-awesome.css">
    <link rel="stylesheet" href="../../CSS/jquery.typeahead.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.3/typeahead.jquery.min.js">

    <link rel="icon" href="../../Images/Icon-Logo/unnamed.png" type="image/x-icon">
</head>

<body class="wrapper-page"
    style="background-position-y: 0px !important;background: url(../../Images/Map/1v1-map.png) center center fixed no-repeat;">
    <div class="content-body">
        <!--Header-->
        <div id="nav-wrapper" class="head info-tab">
            <div class="head-inner">
                <div id="nav-search" style="display:flex;align-items:center;font-size:10px;">
                    <div id="nav-search-inner" class="searching">
                        <div class="typeahead__container">
                            <div class="typeahead__query" style="font-size:12px;">
                                <div class="bx-search">
                                    <form class="search search-first">
                                        <input id="nav-search-input" class="input-bx1 typeahead"
                                            placeholder="Tìm kiếm...">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <b class="patch" style="display:flex;justify-content:center;font-size:17px;">1v1</b>
                                    <span class="text-logo logo-st" style="position:relative;left:-10px;">Chế độ
                                        <b>1v1</b>
                                    </span>
                                </div>
                                <span id="1-arrow" class="fa fa-chevron-down transition"
                                    style="min-width:12px;margin-left:5px;" data-chevron-idle="fa-chevron-down"
                                    data-chevron-active="fa-chevron-up">
                                </span>
                            </a>
                            <div id="1-content" class="otherCt-1 dropdown-content" style="display:none;">
                                <div>
                                    <a href="../5v5/Home.php" class="item-logo nav-item">
                                        <div style="display:flex;justify-content:center;align-items:center;">
                                            <b class="text-logo logo-st">5v5</b>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="../3v3/3v3.php" class="item-logo nav-item">
                                        <div style="display:flex;justify-content:center;align-items:center;">
                                            <b class="text-logo logo-st">3v3</b>
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
                            <a class="item-logo nav-item btn-cl" href="../5v5/Home.php" style="padding-left: 14px;">
                                <div style="display: flex;justify-content: center;align-items: center;">
                                    <span style="width: 32px;height: 32px;" data-loaded="true">
                                        <ion-icon name="home"></ion-icon>
                                    </span>
                                    <div class="text-logo logo-st">Home</div>
                                </div>
                            </a>
                        </div>
                        <div class="menu-item no-button">
                            <a class="item-logo nav-item" href="Stats_1v1.php" style="padding-left: 14px;">
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
        <div class="ct-02 ge-ct">
            <div class="ep-ct"></div>
            <div class="ge-ct" style="display:flex;flex-direction:column;width:100%;margin-top:90px;">
                <div id="content-wrapper" class="ge-ct wr-tt">
                    <div class="ct-wr ge-ct">
                        <div style="display:flex;flex-direction:column;align-items:center;width:100%" class="ge-ct">
                            <div class="tooltip-container para">
                                <div
                                    style="display: flex;flex-direction: column;align-items: center;margin-top: 10vh;margin-bottom: 10vh;">
                                    <div style="width: 100%;max-width: 500px;">
                                        <h1
                                            style="display:flex;flex-direction:column;text-align:center;margin-bottom:3px;">
                                            <div class="text-details" style="margin-bottom:2px;">
                                                <span style="display:none;">META AOV - Xây dựng lối chơi, thống
                                                    kê,
                                                    cập nhật và xếp hạng Patch 24 </span>
                                                <div class="detail-title">
                                                    <div class="logo-text">
                                                        <a class="text" style="font-size:32px;" href="#">
                                                            <span class="f-color">META</span>
                                                            <span>aov</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="sub-title" style="font-weight:normal;margin:15px;">
                                                    <div class="sub-title-text">
                                                        Xây dựng lối chơi, thống kê, cập nhật và xếp hạng Patch 24
                                                    </div>
                                                </div>
                                                <div style="display:flex;justify-content:center;align-items:center;font-weight:normal;padding-top:10px;"
                                                    class="sub-title">
                                                    <a style="color:inherit;margin:5px;" class="mode"
                                                        href="../5v5/Home.php">
                                                        <span class="text-underline">5v5</span>
                                                    </a>
                                                    <span>
                                                        <ion-icon name="remove"></ion-icon>
                                                    </span>
                                                    <a style="color:inherit;margin:5px;" class="mode"
                                                        href="../3v3/3v3.php">
                                                        <span class="text-underline">3v3</span>
                                                    </a>
                                                    <span>
                                                        <ion-icon name="remove"></ion-icon>
                                                    </span>
                                                    <a style="color:#fbaf17;margin:5px;" class="mode" href="#">
                                                        <span class="text-underline">1v1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </h1>
                                        <div id="home-search" style="display:flex;align-items:center;font-size:9px;">
                                            <div id="home-search-inner" class="search-in" style="margin-bottom:20px;">
                                                <div class="bx-search">
                                                    <form class="search search-second">
                                                        <input type="text" class="input-bx2" id="filter-home-name"
                                                            placeholder="Tìm kiếm...">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ct-wr ct-gap" style="flex-direction: column;">
                        <div class="ge-ct" style="display: flex;justify-content: center;">
                            <div class="empty-slide"></div>
                        </div>
                        <div id="inner-content" style="display: flex;justify-content: center;" class="ge-ct">
                            <div class="table-champ" style="position: relative;">
                                <span id="above-content"></span>
                                <div id="page-content" class="table-champ ct-gap tooltip-container">
                                    <div class="table-st te-st" style="height: 100%;min-height: 645px;">
                                        <ul class="list-champ">
                                            <?php
                                            require 'paging_1v1.php';
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="paging">
                        <?php

                                        //if current_page > 1 and $number_of_page > 1 show link to go back to previous page
                                        if ($current_page > 1 && $number_of_page > 1) {
                                            echo '<a href="1v1.php?page=' . ($current_page - 1) . '" class="page">Prev</a>';
                                        }

                                        // Loop 
                                        for ($i = 1;$i <= $number_of_page;$i++) {
                                            if($i == $current_page) {
                                                echo '<span>' . $i . '</span> | ';
                                            }
                                            else
                                            {
                                                echo '<a href="1v1.php?page=' . $i . '" class="page">' . $i . '</a> | ';
                                            }
                                        }
                                        if ($current_page < $number_of_page && $number_of_page > 1){
                                            echo '<a href="1v1.php?page='.($current_page+1).'">Next</a> | ';
                                        }
                                        ?>
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
                                <a href="Home.php" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">Home</span>
                                </a>
                                <a href="Champions.php" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">Stats</span>
                                </a>
                                <a href="Items.php" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
                                    <span class="text-underline" style="font-size:14px;">Plot</span>
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
                                <a href="#" class="para-st" style="margin-left: 5px;padding: 3px 0px;">
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
    <script src="../../JS/metaaov.js"></script>
    <script type="text/javascript" src="../../JS/navigation.js"></script>
    <script type="text/javascript" src="../../JS/Home.js"></script>
    <?php
        include '../account/Check_Session.php'
    ?>
</body>

</html>