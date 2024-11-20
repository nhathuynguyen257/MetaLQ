<?php session_start(); ?>
<!-- <?php setcookie('username', $_SESSION['username'], time() + 60, "/");
?> -->

<!DOCTYPE html>
<html lang="en">
<?php
require '../../../5v5/connect.php';
      // sql 3 table champions, role_champions, stats
  $sql = "SELECT * from champions JOIN stats ON champions.id_champ = stats.id_champ JOIN lane ON lane.id_lane = stats.id_lane JOIN role_champions ON role_champions.id_role = champions.id_role WHERE champions.id_champ = 17 AND lane.id_lane = 4 AND role_champions.id_role = 6";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $name = $row['champ_Name'];
  $lane = $row['lane_name'];
  $role = $row['name_role'];
  $GLOBALS['name'] = $name;
  $GLOBALS['lane'] = $lane;
  $GLOBALS['id'] = $row['id_champ'];
  $GLOBALS['id_lane'] = $row['id_lane'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $GLOBALS['name'] ?> Build Guide, <?php echo $GLOBALS['lane'] ?> Runes, Items Patch 24</title>
    <link rel="icon" href="../../../../Images/Icon-Logo/Logo-team.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../../CSS/Champion.css">
    <link rel="stylesheet" href="../../../../CSS/Home.css">
    <!-- a library of icons(1 thư viện icon) -->
    <link rel="stylesheet" href="../../../../Extension/font-awesome.css">
</head>


<body class="wrapper-page" style="background-position-y: 0px !important;">
    <div class="content-body">
        <!--Header-->
        <div id="nav-wrapper" class="head info-tab">
            <div class="head-inner">
                <!-- Search(đây là phần tìm kiếm) -->
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
            <!-- Logo(logo trang web) -->
            <div class="head-inner logo-team">
                <div style="width:100%">
                    <a href="../../../5v5/Home.php"
                        style="display:flex;justify-content:center;align-items:center;font-size:20px;">
                        <img src="../../../../Images/Icon-Logo/Logo-team.png" alt="logo"
                            style="width:32px;height:32px;">
                        <b class="f-word">META</b>
                        <b class="s-word">aov</b>
                    </a>
                </div>
            </div>
            <!-- Login and Signup(Đăng nhập và Đăng ký) -->
            <div class="head-inner logo-team" style="width:450px;">
                <ul class="menu-top">
                    <li>
                        <a id="signup" href="../../../account/Register/Register.php">Đăng ký</a>
                    </li>
                    <li>
                        <a id="login" href="../../../account/Login/Login.php">Đăng nhập</a>
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
                                    <!-- Logo(logo trang web) -->
                                    <img class="img-pos" src="../../../../Images/Icon-Logo/Logo-team.png" alt="logo"
                                        style="width:32px;height:32px;">
                                    <span class="text-logo logo-st">
                                        <!-- Name(tên trang web) -->
                                        <b class="f-word word">META</b>
                                        <b class="s-word word">aov</b>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- div show menu(đây là phần hiển thị menu) -->
                        <div class="menu-item info-link">
                            <!-- div show the mode of game using dropdown(đây là phần hiển thị chế độ chơi bằng dropdown) -->
                            <a id="1-dropdown" class="nav-dropdown item-logo nav-item" onclick="navDropdown('1');">
                                <div style="display:flex;justify-content:center;align-items:center;">
                                    <b class="patch" style="display:flex;justify-content:center;font-size:17px;">5v5</b>
                                    <span class="text-logo logo-st" style="position:relative;left:-10px;">Chế độ
                                        <b>5v5</b>
                                    </span>
                                </div>
                                <!-- Arrow(đầu mũi tên) -->
                                <span id="1-arrow" class="fa fa-chevron-down transition"
                                    style="min-width:12px;margin-left:5px;" data-chevron-idle="fa-chevron-down"
                                    data-chevron-active="fa-chevron-up">
                                </span>
                            </a>
                            <div id="1-content" class="otherCt-1 dropdown-content" style="display:none;">
                                <div>
                                    <div class="item-logo nav-item">
                                        <div style="display:flex;justify-content:center;align-items:center;">
                                            <b class="text-logo logo-st">3v3</b>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="item-logo nav-item">
                                        <div style="display:flex;justify-content:center;align-items:center;">
                                            <b class="text-logo logo-st">1v1</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- div show the patch of game using dropdown(đây là phần hiển thị phiên bản bằng dropdown) -->
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
                        <!-- div show the Home page of game(đây là phần hiển thị trang chủ của game) -->
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
                        <!-- div show the Stats page of game(đây là phần hiển thị trang thống kê của game) -->
                        <div class="menu-item no-button">
                            <a class="item-logo nav-item" href="../../5v5/Stats.php" style="padding-left: 14px;">
                                <div style="display: flex;justify-content: center;align-items: center;">
                                    <span style="width: 32px;height: 32px;" data-loaded="true">
                                        <ion-icon name="stats-chart"></ion-icon>
                                    </span>
                                    <div class="text-logo logo-st">Stats</div>
                                </div>
                            </a>
                        </div>
                        <!-- div show the Plot of game(đây là phần hiển thị cốt truyện của game) -->
                    </div>
                </div>
                <!-- empty div -->
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
                                                    <!-- div show the champion's image, lane, role(đây là phần hiển thị
                                                    ảnh, vai trò và đường của tướng) -->
                                                    <div class="image-inner"
                                                        style="min-width: 120px;min-height: 120px;max-width: 120px;max-height: 120px;">

                                                        <?php
                                                        // function setLaneBorder($lane) to set border color for champion's image(đây là hàm để set màu viền cho ảnh tướng)
                                                        function setLaneBorder($lane) {
                                                                if($lane == "Mid") {
                                                                    return "champ-style-mid";
                                                                }
                                                                else
                                                                {
                                                                    if($lane == "Top") {
                                                                        return "champ-style-top";
                                                                    }
                                                                    else
                                                                    {
                                                                        if($lane == "Jungle") {
                                                                            return "champ-style-jungle";
                                                                        }
                                                                        else
                                                                        {
                                                                            if($lane == "ADC") {
                                                                                return "champ-style-adc";
                                                                            }
                                                                            else
                                                                            {
                                                                                if($lane == "Support") {
                                                                                    return "champ-style-support";
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        function setColorRole($role) {
                                                                if($role == "Pháp sư") {
                                                                    return "champ-bg-mage";
                                                                }
                                                                else
                                                                {
                                                                    if($role == "Xạ thủ") {
                                                                        return "champ-bg-marksman";
                                                                    }
                                                                    else
                                                                    {
                                                                        if($role == "Đấu sĩ") {
                                                                            return "champ-bg-fighter";
                                                                        }
                                                                        else
                                                                        {
                                                                            if($role == "Trợ thủ") {
                                                                                return "champ-bg-support";
                                                                            }
                                                                            else
                                                                            {
                                                                                if($role == "Đỡ đòn") {
                                                                                    return "champ-bg-tank";
                                                                                }
                                                                                else
                                                                                {
                                                                                    return "champ-bg-assassin";
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        function setBgLane($lane) {
                                                                if($lane == "Mid") {
                                                                    return "colorv-3";
                                                                }
                                                                else
                                                                {
                                                                    if($lane == "ADC") {
                                                                        return "colorv-4";
                                                                    }
                                                                    else
                                                                    {
                                                                        if($lane == "Top") {
                                                                            return "colorv-1";
                                                                        }
                                                                        else
                                                                        {
                                                                            if($lane == "Support") {
                                                                                return "colorv-5";
                                                                            }
                                                                            else
                                                                            {
                                                                                return "colorv-2";
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        echo
                                                        '<a class="champ-img ' . setLaneBorder($lane) . '"
                                                            style="position: relative;width: 100%;min-height: 120px;min-width: 120px;max-width: 120px;max-height: 120px;border-radius: 50%;display: flex;box-shadow: black 0px 0px 10px;background-size: 120px;background-position: center center;background-repeat: no-repeat;background-image: url(../../../../Images/Champions/' . $name. '.jpg);">
                                                        </a>
                                                        <div style="top: 105px;left:49px;position: absolute;width: 30px;height: 30px;border-radius: 50%;background-size: cover;" class="champ-role ' . setColorRole($role) . ' champ-border">
                                                            <img class="img-role roles"
                                                                src="../../../../Images/Role/'.$row['role_img'].'" alt="' . $row['name_role'] . '" style="width: 20px; height: 20px;">
                                                        </div>
                                                        <div class="champ-lane ' . setBgLane($lane) . ' champ-border"
                                                            style="top: 23px; left: 101px;position: absolute; width: 30px;height: 30px;border-radius: 50%;background-size: cover;">
                                                            <img class="img-role  roles"
                                                                src="../../../../Images/Lane/'.$row['lane_img'].'" alt="' . $row['lane_name'] . '"
                                                                style="width: 20px;height: 20px; border-radius: 50%;">
                                                        </div>';
                                                        ?>
                                                    </div>
                                                    <div class="title">
                                                        <h1 class="title-inner1"
                                                            style="margin-left: 20px; font-size: 2em;font-weight: bold;line-height: 0.9;">
                                                            <span style="display: flex;font-size: 30px;">
                                                                <?php echo $GLOBALS['name'] ?> Build Guide
                                                            </span>
                                                            <span class="title-inner2"><?php echo $GLOBALS['lane'] ?>
                                                                Lane Patch
                                                                24</span>
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- div show the mode of champion include: 5v5, 3v3, 1v1 (đây là phần hiển thị 
                                        chế độ của tướng bao gồm: 5v5, 3v3, 1v1) -->
                                        <div class="map-mode ch-ct">
                                            <a href="#" class="active home-page ge-st"
                                                style="border-bottom-color: #fff;">
                                                <span class="name-map text-hover">5v5</span>
                                            </a>
                                            <a href="../../../3v3/Champion/<?php echo $GLOBALS['name'] ?>.php"
                                                class="3v3-page ge-st" style="border-bottom-color: #fff;">
                                                <span class="name-map text-hover">3v3</span>
                                            </a>
                                            <a href="../../../1v1/Champion/<?php echo $GLOBALS['name'] ?>.php"
                                                class="1v1-page ge-st" style="border-bottom-color: #fff;">
                                                <span class="name-map text-hover">1v1</span>
                                            </a>
                                            <div style="flex-basis: 100%; justify-content: flex-end; display: flex;">
                                            </div>
                                        </div>
                                        <!-- div show the champion's information include: tier, win rate, pick rate, ban
                                        rate, KDA and Score(đây là phần hiển thị thông tin của tướng bao gồm
                                        tier, tỉ lệ thắng, tỉ lệ chọn, tỉ lệ cấm, KDA và điểm số) -->
                                        <div class="descript descript-bg descript-pos">
                                            <?php
                                            require '../../style.php';
                                            $sql = "SELECT * FROM champions JOIN stats ON champions.id_champ = stats.id_Champ JOIN lane WHERE champions.id_lane = lane.id_lane AND stats.id_lane = $GLOBALS[id_lane] AND champions.id_champ = $GLOBALS[id]";
                                            $result = mysqli_query($conn, $sql);
                                            $count = mysqli_num_rows($result);
                                            $row = mysqli_fetch_assoc($result);
                                            if ($count > 0) {
                                                $status = $row['status'];
                                                $winrate = $row['win_rate'];
                                                $pickrate = $row['pick_rate'];
                                                $banrate = $row['ban_rate'];
                                                $KDA = $row['KDA'];
                                                echo
                                                '<div style="display: flex; justify-content: space-between; padding: 9px;">
                                                <span class="descript-text">
                                                <strong>Tier: </strong>
                                                <span class="tier-value '.setTier($winrate, $status).'">' . getTier($winrate, $status) . '</span>
                                                </span>
                                                <span class="descript-text">
                                                <strong>Win rate: </strong>
                                                <span class="winrate-value">' . $winrate . '%</span>
                                                </span>
                                                <span class="descript-text">
                                                <strong>Pick rate: </strong>
                                                <span class="pick-value">' . $pickrate . '%</span>
                                                </span>
                                                <span class="descript-text">
                                                <strong>Ban rate: </strong>
                                                <span class="ban-value">' . $banrate . '%</span>
                                                </span>
                                                <span class="descript-text">
                                                <strong>KDA: </strong>
                                                <span class="kda-value">' . $KDA . '</span>
                                                </span>
                                                </div>';
                                            }
                                            ?>
                                            <!-- div show the champion's description(đây là phần hiển thị mô tả của tướng) -->
                                            <div class="descript-para" style="display: flex;">
                                                <span>
                                                    <p class="para-inner">
                                                        Chào mừng đến với hướng dẫn build đồ
                                                        <?php echo $GLOBALS['name'] ?> theo thống kê của
                                                        METAaov <?php echo $GLOBALS['lane'] ?> patch 24.
                                                        Chúng tôi đã tính toán và phân tích kỹ lưỡng các trận đấu của
                                                        <?php echo $GLOBALS['name'] ?> trong các trận đấu và có tỷ lệ
                                                        thắng cao.
                                                        Ngọc bổ trợ tốt nhất, trang bị và phép bổ trợ cho
                                                        <?php echo $GLOBALS['name'] ?> trong
                                                        patch 24.</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- div show the champion splash art(đây là phần hiển thị ảnh nền của tướng)-->
                                    <div id="splash" class="sp-a1 spl-st">
                                        <div class="background color-bg"
                                            style="background-image: linear-gradient(45deg, rgb(17,17,17), transparent), url(../../../../Images/Background/<?php echo $GLOBALS['name'] ?>_bg.jpg);">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Guiding user part -->
                    <div class="content content-details" style="flex-direction: column;">
                        <div style="display: flex;justify-content: center;" class="ch-ct">
                            <div class="h-content content-details">
                                <!-- div show the champions' lane(đây là phần hiển thị lane của tướng) -->
                                <div class="lane-content ch-ct">
                                    <a href="../<?php echo $GLOBALS['name'] ?>/Top.php" class="text-ac ge-st"
                                        style="border-bottom-color: #fff;">
                                        <span>
                                            <img class="b-hover" src="../../../../Images/Lane/top_icon.png"
                                                style="width: 20px; height: 20px;background-color: rgb(170, 152, 33);">
                                        </span>
                                        <span class="text-hover name-map">
                                            <span class="mid">Top lane</span>
                                        </span>
                                    </a>
                                    <a href=".#" class="active text-ac ge-st" style="border-bottom-color: #fff;">
                                        <span>
                                            <img class="b-hover" src="../../../../Images/Lane/jungle_icon.png"
                                                style="width: 20px; height: 20px;background-color: rgb(2, 248, 2);">
                                        </span>
                                        <span class="text-hover name-map">
                                            <span class="mid">Jungle lane</span>
                                        </span>
                                    </a>
                                    <a href="../<?php echo $GLOBALS['name'] ?>/Mid.php" class="text-ac ge-st"
                                        style="border-bottom-color: #fff;">
                                        <span>
                                            <img class="b-hover" src="../../../../Images/Lane/mid_icon.png"
                                                style="width: 20px; height: 20px;background-color: rgb(102, 136, 234);">
                                        </span>
                                        <span class="text-hover name-map">
                                            <span class="mid">Mid lane</span>
                                        </span>
                                    </a>
                                    <a href="../<?php echo $GLOBALS['name'] ?>/ADC.php" class="text-ac ge-st"
                                        style="border-bottom-color: #fff;">
                                        <span>
                                            <img class="b-hover" src="../../../../Images/Lane/adc_icon.png"
                                                style="width: 20px; height: 20px;background-color: rgb(255, 0, 0);">
                                        </span>
                                        <span class="text-hover name-map">
                                            <span class="mid">ADC</span>
                                        </span>
                                    </a>
                                    <a href="../<?php echo $GLOBALS['name'] ?>/Support.php" class="text-ac ge-st"
                                        style="border-bottom-color: #fff;">
                                        <span>
                                            <img class="b-hover" src="../../../../Images/Lane/support_icon.png"
                                                style="width: 20px; height: 20px;background-color: rgb(20, 104, 89);">
                                        </span>
                                        <span class="text-hover name-map">
                                            <span class="mid">Support</span>
                                        </span>
                                    </a>
                                </div>
                                <!-- empty space -->
                                <div class="empty-space slidebar-spacer"></div>
                            </div>
                        </div>
                        <div id="b-content" class="ch-ct" style="display:flex;justify-content:center;">
                            <div class="bct ct-grid" style="position: relative">
                                <!-- div show the champion's spells(đây là phần hiển thị các phép
                                                bổ trợ của tướng) -->
                                <div class="bct-inner ct-grid">
                                    <div class="bct-text">
                                        <div class="bct-paragraph bct-bg">
                                            <!-- div show the title of the champion's spells(đây là phần hiển
                                                        thị tiêu đề của các phép bổ trợ của tướng) -->
                                            <h2 class="bct-title">
                                                Best <?php echo $GLOBALS['name'] ?> Summoner Spells
                                            </h2>
                                            <!-- div show the champion's spells(đây là phần hiển thị các phép 
                                                        bổ trợ của tướng)-->
                                            <div class="bct-p">
                                                <div
                                                    style="width:100%;display:flex;align-items:center;justify-content: space-around;">
                                                    <?php
                                                                
                                                                $sql = "SELECT * FROM champions JOIN stats_spell ON champions.id_champ = stats_spell.id_Champ JOIN spells WHERE stats_spell.id_spell = spells.id_spell AND stats_spell.id_Champ = $GLOBALS[id] AND stats_spell.id_lane = $GLOBALS[id_lane]";
                                                                $result = mysqli_query($conn, $sql);
                                                                $count = mysqli_num_rows($result);
                                                                $row = mysqli_fetch_assoc($result);
                                                                if ($count > 0) {
                                                                        $spell = $row['spell_name'];
                                                                        $spell_img = $row['spell_image'];
                                                                        $spell_win = $row['win_rate'];
                                                                        $spell_pick = $row['pick_rate'];
                                                                        echo
                                                                        '<div style="margin-left: 48px;">
                                                                            <div style="gap: 3px;display: flex;padding:3px;"
                                                                                class="group-gap">
                                                                                <div class="spell">
                                                                                    <img src="../../../../Images/Spell/' . $spell_img . '"
                                                                                        style="width:42px;height:42px">
                                                                                </div>
                                                                            </div>
                                                                            <div style="display:flex;margin-top:6px">
                                                                                <div class="rating" style="margin-left:-50px;">
                                                                                    <div class="rating-inner"
                                                                                        style="text-align:left;">
                                                                                        <span class="win">Win%</span>
                                                                                    </div>
                                                                                    <div class="rating-inner"
                                                                                        style="text-align:left;">
                                                                                        <span class="pick">Pick%</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="rating" style="width:48px;">
                                                                                    <div class="rating-inner"
                                                                                        style="text-align:left;">
                                                                                        <span class="win">' . $spell_win . '%</span>
                                                                                    </div>
                                                                                    <div class="rating-inner"
                                                                                        style="text-align:left;">
                                                                                        <span class="pick">' . $spell_pick . '%</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="margin-top:1px">
                                                                            <div class="items items-bg">
                                                                            <div style="display: flex;">';
                                                                                $spellNum = "1,2,3";
                                                                                $row_array = explode(',', $spellNum);
                                                                                for ($i = 0; $i < count($row_array); $i++) {
                                                                                    $sql = "SELECT * FROM champions JOIN stats_spell ON champions.id_champ = stats_spell.id_Champ JOIN spells WHERE stats_spell.id_spell = spells.id_spell AND champions.id_champ = $GLOBALS[id] AND stats_spell.id_lane = $GLOBALS[id_lane] AND stats_spell.id_spell = $row_array[$i]";
                                                                                    $result = mysqli_query($conn, $sql);
                                                                                    $row = mysqli_fetch_assoc($result);
                                                                                    if ($i <= count($row_array)) {
                                                                                        $spell_name = $row['spell_name'];
                                                                                        $spell_img = $row['spell_image'];
                                                                                        $spell_win = $row['win_rate'];
                                                                                        $spell_pick = $row['pick_rate'];
                                                                                    echo
                                                                                    '<div>
                                                                                        <div class = "spell">
                                                                                            <div class="spell-inner">
                                                                                                <img src="../../../../Images/Spell/' . $spell_img . '"
                                                                                                    style="width:42px;height:42px;"
                                                                                                    alt=" ' . $spell_name . '">
                                                                                            </div>
                                                                                        </div>
                                                                                    
                                                                                    <div class="rating">
                                                                                        <div class="rating-inner">
                                                                                            <span class="win">' . $spell_win . '%</span>
                                                                                        </div>
                                                                                        <div class="rating-inner">
                                                                                            <span class="pick">' . $spell_pick . '%</span>
                                                                                        </div>
                                                                                        </div>
                                                                                    </div>';
                                                                                    
                                                                                    }
                                                                                }
                                                                            }
                                                                        ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- div show the champion's items(đây là phần hiển thị các vật phẩm của tướng) -->
                        <div class="bct-text">
                            <div class="bct-paragraph bct-bg">
                                <h2 class="bct-title">
                                    Best <?php echo $GLOBALS['name'] ?> Starting Items
                                </h2>
                                <div class="bct-p bct-bg">
                                    <div
                                        style="width:100%;display:flex;align-items:center;justify-content: space-around;">
                                        <!-- this command show the starting items of the champion(đây là phần hiển 
                                                    thị vật phẩm khởi đầu của tướng)-->
                                        <?php
                                                                $sql = "SELECT * FROM champions JOIN stats_start_items ON champions.id_champ = stats_start_items.id_champ JOIN items ON stats_start_items.id_items = items.id_items JOIN lane WHERE stats_start_items.id_lane = lane.id_lane AND stats_start_items.id_items = items.id_items AND stats_start_items.id_lane = $GLOBALS[id_lane] AND champions.id_champ = $GLOBALS[id]";
                                                                $result = mysqli_query($conn, $sql);
                                                                $count = mysqli_num_rows($result);
                                                                $row = mysqli_fetch_assoc($result);
                                                                if ($count > 0) {
                                                                    $item_img = $row['item_img'];
                                                                    $item_win = $row['win_rate'];
                                                                    $item_pick = $row['pick_rate'];
                                                                    echo
                                                                    '<div style="margin-left: 48px;">
                                                                    <div style="gap: 3px;display: flex;padding:3px;"
                                                                        class="group-gap">
                                                                        <div class="items-st">
                                                                            <img src="../../../../Images/Items/' . $item_img . '"
                                                                                style="width:42px;height:42px">
                                                                        </div>
                                                                    </div>
                                                                    <div style="display:flex;margin-top:6px">
                                                                        <div class="rating" style="margin-left:-50px;">
                                                                            <div class="rating-inner"
                                                                                style="text-align:left;">
                                                                                <span class="win">Win%</span>
                                                                            </div>
                                                                            <div class="rating-inner"
                                                                                style="text-align:left;">
                                                                                <span class="pick">Pick%</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rating" style="width:48px;">
                                                                            <div class="rating-inner"
                                                                                style="text-align:left;">
                                                                                <span class="win">' . $item_win . '%</span>
                                                                            </div>
                                                                            <div class="rating-inner"
                                                                                style="text-align:left;">
                                                                                <span class="pick">' . $item_pick . '%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- this command show the other items of the champion(đây là phần hiển thị các vật phẩm khác của tướng) -->
                                                            <div style="margin-top:1px">
                                                                <div class="items items-bg">
                                                                    <div style="display: flex;">';
                                                                    $itemNum = "1,2,3";
                                                                    $row_array = explode(',', $itemNum);
                                                                    for ($i = 0; $i < count($row_array); $i++) {
                                                                        $sql = "SELECT * FROM champions JOIN stats_start_items ON champions.id_champ = stats_start_items.id_champ JOIN items ON stats_start_items.id_items = items.id_items JOIN lane WHERE stats_start_items.id_lane = lane.id_lane AND stats_start_items.id_items = items.id_items
                                                                        AND stats_start_items.id_lane = $GLOBALS[id_lane] AND champions.id_champ = $GLOBALS[id] AND stats_start_items.id_items = $row_array[$i]";
                                                                        $result = mysqli_query($conn, $sql);
                                                                        $row = mysqli_fetch_assoc($result);
                                                                            if ($i <= count($row_array)) {
                                                                                $item_name = $row['item_name'];
                                                                                $item_img = $row['item_img'];
                                                                                $item_win = $row['win_rate'];
                                                                                $item_pick = $row['pick_rate'];
                                                                        echo
                                                                        '<div>
                                                                            <div class = "items-st">
                                                                                <div class="items-inner">
                                                                                    <img src="../../../../Images/Items/' . $item_img . '"
                                                                                        style="width:42px;height:42px;"
                                                                                        alt=" ' . $item_name . '">
                                                                                </div>
                                                                            </div>
                                                                        
                                                                        <div class="rating">
                                                                            <div class="rating-inner">
                                                                                <span class="win">' . $item_win . '%</span>
                                                                            </div>
                                                                            <div class="rating-inner">
                                                                                <span class="pick">' . $item_pick . '%</span>
                                                                            </div>
                                                                            </div>
                                                                        </div>';
                                                                            }
                                                                    }
                                                                }
                                                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- div show the champion's runes(đây là phần hiển thị các phù hiệu của tướng) -->
        <div class="bct-inner ct-grid">
            <div class="bct-text">
                <div class="bct-paragraph bct-bg">
                    <h2 class="bct-title">Best <?php echo $GLOBALS['name'] ?> Runes</h2>
                    <div id="active-runes" class="bct-p bct-bg">
                        <!-- div show the badge generality(show phu hieu 1 cach tong quat) -->
                        <div style="margin-top: -10px;width:100%;display:flex;justify-content:center;">
                            <div>
                                <div style="width:42px;height:79px;"></div>
                                <div class="rating">
                                    <div class="rating-inner" style="text-align:left;">
                                        <span class="opt">Options</span>
                                    </div>
                                </div>
                            </div>
                            <!-- div show the first primary badge(show phu hieu chinh thu 1) -->
                            <div id="10-1-tab" class="tab-selected badge b-hover" style="cursor:pointer"
                                onclick="tab('active-runes','10-1')">
                                <div class="activerunes-image drop-hover badge-st be">
                                    <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                        <circle cx="36" cy="36"="20" fill="black">
                                        </circle>
                                        <circle cx="36" cy="36"="20" fill="transparent" stroke="rgb(239, 227, 24)"
                                            stroke-width="2">
                                        </circle>
                                        <image class="badge-img" x="0" y="0" height="72" width="72"
                                            xlink:href="../../../../Images/PhuHieu/VucHonMang.png" />
                                    </svg>
                                </div>
                                <div class="activerunes-image drop-hover badge-st be badge-2">
                                    <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="54" height="45">
                                        <circle cx="27" cy="27" r="15" fill="black">
                                        </circle>
                                        <image class="badge-img" x="17" y="17" height="20" width="20"
                                            xlink:href="../../../../Images/PhuHieu/ThanhKhoiNguyen.png" />
                                        <circle cx="27" cy="27" r="15" fill="transparent" stroke="rgb(217, 40, 16)"
                                            stroke-width="2">
                                        </circle>
                                    </svg>
                                </div>
                                <div class="rating" style="width:100%">
                                    <div class="rating-inner text-hover" style="text-align:center">
                                        <span class="opt-1">Option 1</span>
                                    </div>
                                </div>
                            </div>
                            <!-- div show the second primary badge(show phu hieu chinh thu 2) -->
                            <div id="10-19-tab" class="badge b-hover" style="cursor:pointer"
                                onclick="tab('active-runes','10-19')">
                                <div class="activerunes-image drop-hover badge-st be">
                                    <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                        <circle cx="36" cy="36" fill="black">
                                        </circle>
                                        <circle cx="36" cy="36" fill="transparent" stroke="rgb(239, 227, 24)"
                                            stroke-width="2">
                                        </circle>
                                        <image class="badge-img" x="0" y="0" height="72" width="80"
                                            xlink:href="../../../../Images/PhuHieu/VucHonMang.png" />
                                    </svg>
                                </div>
                                <div class="activerunes-image drop-hover badge-st be badge-2">
                                    <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="54" height="45">
                                        <circle cx="27" cy="27" r="15" fill="black">
                                        </circle>
                                        <image class="badge-img" x="17" y="17" height="20" width="20"
                                            xlink:href="../../../../Images/PhuHieu/ThapQuangMinh.png" />
                                        <circle cx="27" cy="27" r="15" fill="transparent" stroke="rgb(239, 219, 33)"
                                            stroke-width="2">
                                        </circle>
                                    </svg>
                                </div>
                                <div class="rating" style="width:100%">
                                    <div class="rating-inner text-hover" style="text-align:center">
                                        <span class="opt-2">Option 2</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- div show the inner details of the badge(show chi tiet phu hieu) -->
                        <div style="margin-top:30px;">
                            <!-- div show the details of the first badge(show chi tiet phu hieu thu 1) -->
                            <div id="10-1-content" class="content-selected ct-sd">
                                <div style="display:flex;margin-bottom:-10px;margin-top:-30px;">
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="26" cy="36" r="25" fill="black">
                                            </circle>
                                            <line x1="50" y1="36" x2="72" y2="36"
                                                style="stroke:rgb(251, 175, 23);stroke-width:2">
                                            </line>
                                            <image class="badge-img" x="5" y="15" height="40" width="40"
                                                xlink:href="../../../../Images/PhuHieu/VucHonMang.png">
                                            </image>
                                            <circle cx="26" cy="36" r="25" fill="transparent" stroke="rgb(251, 175, 23)"
                                                stroke-width="2">
                                            </circle>
                                        </svg>
                                    </div>
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="36" cy="36" r="10" fill="black">
                                            </circle>
                                            <line x1="56" y1="36" x2="72" y2="36"
                                                style="stroke:rgb(251, 175, 23);stroke-width:2">
                                            </line>
                                            <line x1="0" y1="36" x2="26" y2="36"
                                                style="stroke:rgb(251, 175, 23);stroke-width:2">
                                            </line>
                                            <circle cx="36" cy="36" r="10" fill="transparent" stroke="rgb(251, 175, 23)"
                                                stroke-width="2">
                                            </circle>
                                            <image class="badge-img" x="0" y="0" height="72" width="72"
                                                xlink:href="../../../../Images/PhuHieu/MaTinh.png">
                                            </image>
                                        </svg>
                                    </div>
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="36" cy="36" r="20" fill="black">
                                            </circle>
                                            <line x1="56" y1="36" x2="72" y2="36"
                                                style="stroke:rgb(251, 175, 23);stroke-width:2">
                                            </line>
                                            <line x1="0" y1="36" x2="26" y2="36"
                                                style="stroke:rgb(251, 175, 23);stroke-width:2">
                                            </line>
                                            <image class="badge-img" x="16" y="16" height="40" width="40"
                                                xlink:href="../../../../Images/PhuHieu/Duanh.png">
                                            </image>
                                            <circle cx="36" cy="36" r="20" fill="transparent" stroke="rgb(251, 175, 23)"
                                                stroke-width="2">
                                            </circle>
                                        </svg>
                                    </div>
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="36" cy="36" r="20" fill="black">
                                            </circle>
                                            <line x1="0" y1="36" x2="26" y2="36"
                                                style="stroke:rgb(251, 175, 23);stroke-width:2">
                                            </line>
                                            <image class="badge-img" x="16" y="16" height="40" width="40"
                                                xlink:href="../../../../Images/PhuHieu/CuongCong.png">
                                            </image>
                                            <circle cx="36" cy="36" r="20" fill="transparent" stroke="rgb(251, 175, 23)"
                                                stroke-width="2">
                                            </circle>
                                        </svg>
                                    </div>
                                </div>
                                <!-- div show the secondary badge(show phu hieu phu) -->
                                <div style="display:flex;flex-wrap:wrap;margin-bottom:-10px;">
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="26" cy="36" r="25" fill="black">
                                            </circle>
                                            <line x1="50" y1="36" x2="72" y2="36"
                                                style="stroke:rgb(217, 40, 16);stroke-width:2">
                                            </line>
                                            <image class="badge-img" x="7" y="15" height="40" width="40"
                                                xlink:href="../../../../Images/PhuHieu/ThanhKhoiNguyen.png">
                                            </image>
                                            <circle cx="26" cy="36" r="25" fill="transparent" stroke="rgb(217, 40, 16)"
                                                stroke-width="2">
                                            </circle>
                                        </svg>
                                    </div>
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="36" cy="36" r="20" fill="black">
                                            </circle>
                                            <line x1="0" y1="36" x2="26" y2="36"
                                                style="stroke:rgb(217, 40, 16);stroke-width:2">
                                            </line>
                                            <image class="badge-img" x="16" y="16" height="40" width="40"
                                                xlink:href="../../../../Images/PhuHieu/QuaCauBS.png">
                                            </image>
                                            <circle cx="36" cy="36" r="20" fill="transparent" stroke="rgb(217, 40, 16)"
                                                stroke-width="2">
                                            </circle>
                                        </svg>
                                    </div>
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="36" cy="36" r="25" fill="black">
                                            </circle>
                                            <line x1="50" y1="36" x2="72" y2="36"
                                                style="stroke:rgb(217, 40, 16);stroke-width:2">
                                            </line>
                                            <image class="badge-img" x="17" y="15" height="40" width="40"
                                                xlink:href="../../../../Images/PhuHieu/ThanhKhoiNguyen.png">
                                            </image>
                                            <circle cx="36" cy="36" r="25" fill="transparent" stroke="rgb(217, 40, 16)"
                                                stroke-width="2">
                                            </circle>
                                        </svg>
                                    </div>
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="36" cy="36" r="20" fill="black">
                                            </circle>
                                            <line x1="0" y1="36" x2="26" y2="36"
                                                style="stroke:rgb(217, 40, 16);stroke-width:2">
                                            </line>
                                            <image class="badge-img" x="16" y="16" height="40" width="40"
                                                xlink:href="../../../../Images/PhuHieu/ThoSan.png">
                                            </image>
                                            <circle cx="36" cy="36" r="20" fill="transparent" stroke="rgb(217, 40, 16)"
                                                stroke-width="2">
                                            </circle>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- div show the details of the second badge( show chi tiet phu hieu thu2)-->
                            <div id="10-19-content" class="ct-sd hidden">
                                <div style="display:flex;margin-bottom:-10px;margin-top:-30px;">
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="26" cy="36" r="25" fill="black">
                                            </circle>
                                            <line x1="50" y1="36" x2="72" y2="36"
                                                style="stroke:rgb(251, 175, 23);stroke-width:2">
                                            </line>
                                            <image class="badge-img" x="5" y="15" height="40" width="40"
                                                xlink:href="../../../../Images/PhuHieu/VucHonMang.png">
                                            </image>
                                            <circle cx="26" cy="36" r="25" fill="transparent" stroke="rgb(251, 175, 23)"
                                                stroke-width="2">
                                            </circle>
                                        </svg>
                                    </div>
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="36" cy="36" r="10" fill="black">
                                            </circle>
                                            <line x1="56" y1="36" x2="72" y2="36"
                                                style="stroke:rgb(251, 175, 23);stroke-width:2">
                                            </line>
                                            <line x1="0" y1="36" x2="26" y2="36"
                                                style="stroke:rgb(251, 175, 23);stroke-width:2">
                                            </line>
                                            <circle cx="36" cy="36" r="10" fill="transparent" stroke="rgb(251, 175, 23)"
                                                stroke-width="2">
                                            </circle>
                                            <image class="badge-img" x="0" y="0" height="72" width="72"
                                                xlink:href="../../../../Images/PhuHieu/MaTinh.png">
                                            </image>
                                        </svg>
                                    </div>
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="36" cy="36" r="20" fill="black">
                                            </circle>
                                            <line x1="56" y1="36" x2="72" y2="36"
                                                style="stroke:rgb(251, 175, 23);stroke-width:2">
                                            </line>
                                            <line x1="0" y1="36" x2="26" y2="36"
                                                style="stroke:rgb(251, 175, 23);stroke-width:2">
                                            </line>
                                            <image class="badge-img" x="16" y="16" height="40" width="40"
                                                xlink:href="../../../../Images/PhuHieu/CuongCong.png">
                                            </image>
                                            <circle cx="36" cy="36" r="20" fill="transparent" stroke="rgb(251, 175, 23)"
                                                stroke-width="2">
                                            </circle>
                                        </svg>
                                    </div>
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="36" cy="36" r="20" fill="black">
                                            </circle>
                                            <line x1="0" y1="36" x2="26" y2="36"
                                                style="stroke:rgb(251, 175, 23);stroke-width:2">
                                            </line>
                                            <image class="badge-img" x="16" y="16" height="40" width="40"
                                                xlink:href="../../../../Images/PhuHieu/CoThu.png">
                                            </image>
                                            <circle cx="36" cy="36" r="20" fill="transparent" stroke="rgb(251, 175, 23)"
                                                stroke-width="2">
                                            </circle>
                                        </svg>
                                    </div>
                                </div>
                                <div style="display:flex;flex-wrap:wrap;margin-bottom:-10px;">
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="26" cy="36" r="25" fill="black">
                                            </circle>
                                            <line x1="50" y1="36" x2="72" y2="36"
                                                style="stroke:rgb(10,0,148);stroke-width:2">
                                            </line>
                                            <image class="badge-img" x="7" y="15" height="40" width="40"
                                                xlink:href="../../../../Images/PhuHieu/ThapQuangMinh.png">
                                            </image>
                                            <circle cx="26" cy="36" r="25" fill="transparent" stroke="rgb(10,0,148)"
                                                stroke-width="2">
                                            </circle>
                                        </svg>
                                    </div>
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="36" cy="36" r="20" fill="black">
                                            </circle>
                                            <line x1="0" y1="36" x2="26" y2="36"
                                                style="stroke:rgb(10,0,148);stroke-width:2">
                                            </line>
                                            <image class="badge-img" x="16" y="16" height="40" width="40"
                                                xlink:href="../../../../Images/PhuHieu/XuyenTam.png">
                                            </image>
                                            <circle cx="36" cy="36" r="20" fill="transparent" stroke="rgb(10,0,148)"
                                                stroke-width="2">
                                            </circle>
                                        </svg>
                                    </div>
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="36" cy="36" r="25" fill="black">
                                            </circle>
                                            <line x1="50" y1="36" x2="72" y2="36"
                                                style="stroke:rgb(10,0,148);stroke-width:2">
                                            </line>
                                            <image class="badge-img" x="17" y="15" height="40" width="40"
                                                xlink:href="../../../../Images/PhuHieu/ThapQuangMinh.png">
                                            </image>
                                            <circle cx="36" cy="36" r="25" fill="transparent" stroke="rgb(10,0,148)"
                                                stroke-width="2">
                                            </circle>
                                        </svg>
                                    </div>
                                    <div class="be badge-st">
                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="72" height="72">
                                            <circle cx="36" cy="36" r="20" fill="black">
                                            </circle>
                                            <line x1="0" y1="36" x2="26" y2="36"
                                                style="stroke:rgb(10,0,148);stroke-width:2">
                                            </line>
                                            <image class="badge-img" x="16" y="16" height="40" width="40"
                                                xlink:href="../../../../Images/PhuHieu/TuongPhan.png">
                                            </image>
                                            <circle cx="36" cy="36" r="20" fill="transparent" stroke="rgb(10,0,148)"
                                                stroke-width="2">
                                            </circle>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- div show the best build(show trang bi tot nhat) -->
            <div class="bct-text ct-grid">
                <d class="bct-bg"
                    style="display:flex;flex-direction:column;justify-content:space-between;align-items:center;padding:5px;">
                    <h2 class="bct-title">Best <?php echo $GLOBALS['name'] ?> Item Build</h2>
                    <div class="bct-p">
                        <div style="width:100%;display:flex;justify-content:space-around;flex-wrap:wrap"
                            class="content-details">
                            <div style="display:flex;align-items:center;justify-content:center;">
                                <?php
                                  $itemNum = "81,46,82,68,83,67";
                                  $row_array = explode(',', $itemNum);
                                  for ($i = 0; $i < count($row_array); $i++) {
                                   $sql = "SELECT * FROM items WHERE id_items = '$row_array[$i]'";
                                      $result = mysqli_query($conn, $sql);
                                      $row = mysqli_fetch_assoc($result);
                                      if ($i <= count($row_array)) {
                                          echo '<div>
                                              <div class="badge-st">
                                              <div class="items items-pos">
                                                  <img src="../../../../Images/Items/' . $row['item_img'] . '" style="width:42px;height:42px">
                                              </div>
                                          </div>
                                      </div>';
                                      }
                                  }
                                  ?>
                            </div>
                        </div>
                    </div>
                    <!-- div show the best skill order(show thu tu up skill) -->
                    <div class="bct-bg"
                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:center;padding:5px;">
                        <h2 class="bct-title">Best <?php echo $GLOBALS['name'] ?> Skill Order</h2>
                        <div class="bct-p">
                            <table class="skill-table sl-te"
                                style="border-top:1px solid black;border-bottom:1px solid black;margin-bottom:5px;">
                                <tbody>
                                    <?php
                                       $sql = "SELECT * FROM champions, skills WHERE champions.id_champ = skills.id_champ AND champions.id_champ = $GLOBALS[id]";
                                       $result = mysqli_query($conn, $sql);
                                       $row = mysqli_fetch_assoc($result);
                                       $passive = $row['passive'];
                                       $skill1 = $row['first_skill'];
                                       $skill2 = $row['second_skill'];
                                       $skill3 = $row['third_skill'];
                                       echo
                                       '<tr class="skills">
                                           <th class="skill-inner">
                                               <div class="skills-st">
                                                  <!-- the passive(nội tại) -->
                                                   <img src="../../../../Images/Skills/'. $GLOBALS['name'].'/'.$passive.'"
                                                       style="width:20px;height:20px">
                                               </div>
                                           </th>
                                            <!-- each champions have 15 level to up skill -->';
                                           for ($i = 1;$i <= 15;$i++) {
                                               echo '<th class="skill-inner">'.$i.'</th>';
                                           }
                                       echo
                                       '</tr>
                                       <!-- skill 1(kỹ năng 1) -->
                                       <tr class="skills">
                                           <td class="skill-inner">
                                               <div class="skill-st">
                                                   <img src="../../../../Images/Skills/'. $GLOBALS['name'].'/'. $skill1.'"style="width:20px;height:20px">
                                               </div>
                                           </td>';
                                           for ($i = 1; $i <= 15;$i++) {
                                               if($i == 1 || $i == 3 || $i == 6 || $i == 9 || $i == 10 || $i == 13){
                                                   echo '<td class="skill-inner active-skill">X</td>';
                                               }
                                               else 
                                               {
                                                   echo '<td class="skill-inner"></td>';
                                               }
                                           }
                                           echo 
                                       '</tr>
                                       <!-- skill 2(kỹ năng 2) -->
                                       <tr class="skills">
                                           <td class="skill-inner">
                                               <div class="skill-st">
                                                   <img src="../../../../Images/Skills/'. $GLOBALS['name'].'/'. $skill2.'"
                                                       style="width:20px;height:20px">
                                               </div>
                                           </td>';
                                           for ($i = 1;$i <= 15;$i++) {
                                               if($i == 2 || $i == 5 || $i == 7 || $i == 11 || $i == 14 || $i == 15){
                                                   echo '<td class="skill-inner active-skill">X</td>';
                                               }
                                               else 
                                               {
                                                   echo '<td class="skill-inner"></td>';
                                               }
                                           }
                                           echo
                                       '</tr>
                                       <!-- skill 3(kỹ năng 3) -->
                                       <tr class="skills">
                                           <td class="skill-inner">
                                               <div class="skill-st">
                                                   <img src="../../../../Images/Skills/'. $GLOBALS['name'].'/'. $skill3.'"
                                                       style="width:20px;height:20px">
                                               </div>
                                           </td>';
                                           for ($i = 1;$i <= 15;$i++) {
                                               if($i == 4 || $i == 8 || $i == 12){
                                                   echo '<td class="skill-inner active-skill">X</td>';
                                               }
                                               else 
                                               {
                                                   echo '<td class="skill-inner"></td>';
                                               }
                                           }
                                       '</tr>';
                                       ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
        <!-- div show the items details build(show chi tiet buoc len trang bi) -->
        <div class="bct-inner te-st">
            <div class="bct-text bct-bg">
                <h2 class="bct-title">Best <?php echo $GLOBALS['name'] ?> Items Build Order</h2>
                <div class="bct-p">
                    <?php
                     
                     $sql = "SELECT * FROM items";
                     $result = mysqli_query($conn, $sql);
                     $row = mysqli_fetch_assoc($result);
                     ?>
                    <span style="margin-left:4px;"></span>
                    <?php
                     // $itemNum to store the item id, $row_array to store the item id in array
                     // using explode to split the string into array, then loopto get each id item
                     // then using sql to get the item details
                     // finally echo the item details
                     // $itemNum dùng để lưu id của item, $row_array dùng để lưu id của item vào mảng
                     // sử dụng explode để chia chuỗi thành mảng, sau đó lặp để lấy từng id item
                     // sau đó sử dụng sql để lấy chi tiết item
                     // cuối cùng là echo chi tiết item
                    $itemNum = "16,44,81,17,46,1,1,1,22,35,82,1,2,20,68,1,19,3,83,1,19,1,19,67";
                    $row_array = explode(',', $itemNum);
                    for ($i = 0; $i < count($row_array); $i++) {
                        $sql = "SELECT * FROM items WHERE id_items = $row_array[$i]";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $level_item = $row['level_item'];
                        if ($i <= count($row_array)) {
                            echo '<span class="fa fa-arrow-right" style="margin:4px;"></span>
                            <div class="items-st>
                            <div class="itemsin-st spec-item">
                        <img src="../../../../Images/Items/' . $row['item_img'] . '"
                            style="width:42px;height:42px">
                    </div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- div show the filter lane and search bar(để hiện thị bộ lọc và thanh tìm kiếm) -->
        <div class="bct-inner te-st">
            <div>
                <div id="relation-search" class="counters">
                    <div style="width:100%;">
                        <div style="display:flex;">
                            <div style="width: 16.5%;" class="lane-tick">
                                <label class="tkln-st bct-bg">
                                    <input class="champions-filter" name="filter" value="all" type="checkbox"
                                        checked="checked" hidden="hidden">
                                    <span>
                                        <span class="tick-st"></span>
                                        <img style="margin-right: 2px;width: 16px;height: 16px;"
                                            src="../../../../Images/Icon-Logo/all_icon.png" alt="All">
                                    </span>
                                    <span class="tkln-name">All</span>
                                </label>
                            </div>
                            <div style="width: 16.5%;" class="lane-tick">
                                <label class="tkln-st colorv-1">
                                    <input class="champions-filter" name="filter" value="all" type="checkbox"
                                        checked="checked" hidden="hidden">
                                    <span>
                                        <span class="tick-st"></span>
                                        <img style="margin-right: 2px;width: 16px;height: 16px;"
                                            src="../../../../Images/Lane/top_icon.png" alt="All">
                                    </span>
                                    <span class="tkln-name">Top</span>
                                </label>
                            </div>
                            <div style="width: 16.5%;" class="lane-tick">
                                <label class="tkln-st colorv-2">
                                    <input class="champions-filter" name="filter" value="all" type="checkbox"
                                        checked="checked" hidden="hidden">
                                    <span>
                                        <span class="tick-st"></span>
                                        <img style="margin-right: 2px;width: 16px;height: 16px;"
                                            src="../../../../Images/Lane/jungle_icon.png" alt="All">
                                    </span>
                                    <span class="tkln-name">Jungle</span>
                                </label>
                            </div>
                            <div style="width: 16.5%;" class="lane-tick">
                                <label class="tkln-st colorv-3">
                                    <input class="champions-filter" name="filter" value="all" type="checkbox"
                                        checked="checked" hidden="hidden">
                                    <span>
                                        <span class="tick-st"></span>
                                        <img style="margin-right: 2px;width: 16px;height: 16px;"
                                            src="../../../../Images/Lane/mid_icon.png" alt="All">
                                    </span>
                                    <span class="tkln-name">Mid</span>
                                </label>
                            </div>
                            <div style="width: 16.5%;" class="lane-tick">
                                <label class="tkln-st colorv-4">
                                    <input class="champions-filter" name="filter" value="all" type="checkbox"
                                        checked="checked" hidden="hidden">
                                    <span>
                                        <span class="tick-st"></span>
                                        <img style="margin-right: 2px;width: 16px;height: 16px;"
                                            src="../../../../Images/Lane/adc_icon.png" alt="All">
                                    </span>
                                    <span class="tkln-name">ADC</span>
                                </label>
                            </div>
                            <div style="width: 16.5%;" class="lane-tick">
                                <label class="tkln-st colorv-5">
                                    <input class="champions-filter" name="filter" value="all" type="checkbox"
                                        checked="checked" hidden="hidden">
                                    <span>
                                        <span class="tick-st"></span>
                                        <img style="margin-right: 2px;width: 16px;height: 16px;"
                                            src="../../../../Images/Lane/support_icon.png" alt="All">
                                    </span>
                                    <span class="tkln-name">Support</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div style="width:20%" class="search-counters">
                        <div class="typeahead-container">
                            <div class="bx-search">
                                <form class="search search-counter-filter">
                                    <input type="text" class="input-bx1" id="filter-counter-name"
                                        placeholder="Tìm kiếm...">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- div show the champions's counters(để hiện thị các tướng đối kháng) -->
        <div class="bct-inner te-st">
            <div class="bct-bg counter-content">
                <h2 class="champct-title"><?php echo $GLOBALS['name'] ?> counters</h2>
                <div style="padding-top: 10px;" class="counters-grid">
                    <?php
                      $sql = "SELECT * FROM champions JOIN stats ON champions.id_champ = stats.id_Champ JOIN lane WHERE stats.id_lane = lane.id_lane AND stats.id_lane = $GLOBALS[id_lane] EXCEPT SELECT * FROM champions JOIN stats ON champions.id_champ = stats.id_Champ JOIN lane WHERE stats.id_Champ = $GLOBALS[id] AND stats.id_lane = $GLOBALS[id_lane]";
                      $result = mysqli_query($conn, $sql);
                      $row = mysqli_num_rows($result);
                          while ($row = mysqli_fetch_assoc($result)) {
                              $sql_oneChamp = "SELECT * FROM champions JOIN stats ON champions.id_champ = stats.id_Champ JOIN lane WHERE lane.id_lane = stats.id_lane AND stats.id_Champ = $GLOBALS[id] AND stats.id_lane = $GLOBALS[id_lane]";
                              $result_oneChamp = mysqli_query($conn, $sql_oneChamp);
                              $row_one = mysqli_fetch_assoc($result_oneChamp);
                              $champ_name = $row['champ_Name'];
                              $champ_id = $row['id_champ'];
                              $champ_image = $row['image'];
                              $winrate = $row['win_rate'];
                              $winrate_one = $row_one['win_rate'];
                              if ($winrate < $winrate_one) {
                              echo
                              '<a href = "../../Champions/Champion.php?name='.$champ_name.'/Jungle.php">
                                  <div class="champct-item counters-st champct-st ' .setBgLane($lane).'">
                                          <img src="../../../../Images/Champions/'.$champ_image.'" alt="'.$champ_name.'"style="width: 50px;height: 50px;">
                                      <div class="champct-name">
                                          <span>'.$champ_name.'</span>
                                      </div>
                                  </div>
                              </a>';
                          }
                        }
            
                 ?>
                </div>
            </div>
        </div>
        <!-- div show the champions is countered(để hiện thị các tướng bi đối kháng) -->
        <div class="bct-inner te-st">
            <div class="bct-bg counter-content">
                <h2 class="champct-title"><?php echo $GLOBALS['name'] ?> is countered
                </h2>
                <div style="padding-top: 10px;" class="counters-grid">
                    <?php
                        $sql = "SELECT * FROM champions JOIN stats ON champions.id_champ = stats.id_Champ JOIN lane WHERE stats.id_lane = lane.id_lane AND stats.id_lane = $GLOBALS[id_lane] EXCEPT SELECT * FROM champions JOIN stats ON champions.id_champ = stats.id_Champ JOIN lane WHERE stats.id_Champ = $GLOBALS[id] AND stats.id_lane = $GLOBALS[id_lane]";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($result);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $sql_oneChamp = "SELECT * FROM champions JOIN stats ON champions.id_champ = stats.id_Champ JOIN lane WHERE lane.id_lane = stats.id_lane AND stats.id_Champ = $GLOBALS[id] AND stats.id_lane = $GLOBALS[id_lane]";
                                $result_oneChamp = mysqli_query($conn, $sql_oneChamp);
                                $row_one = mysqli_fetch_assoc($result_oneChamp);
                                $champ_name = $row['champ_Name'];
                                $champ_id = $row['id_champ'];
                                $champ_image = $row['image'];
                                $winrate = $row['win_rate'];
                                $winrate_one = $row_one['win_rate'];
                                if ($winrate > $winrate_one) {
                                echo
                                '<a href = "../../Champions/Champion.php?name='.$champ_name.'/Jungle.php">
                                    <div class="champct-item counters-st champct-st ' .setBgLane($lane).'">
                                            <img src="../../../../Images/Champions/'.$champ_image.'" alt="'.$champ_name.'"style="width: 60px;height: 50px;">
                                        <div class="champct-name">
                                            <span>'.$champ_name.'</span>
                                        </div>
                                    </div>
                                </a>';
                                }
                            }
                   ?>
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
    </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="../../../../JS/navigation.js"></script>
    <script type="text/javascript" src="../../../../JS/Home.js"></script>
    <script type="text/javascript" src="../../../../JS/metaaov.js"></script>
    <?php
        include '../../../account/Check_Session.php'
    ?>
</body>

</html>