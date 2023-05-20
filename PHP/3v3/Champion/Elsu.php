<?php session_start(); ?>
<!-- <?php setcookie('username', $_SESSION['username'], time() + 60, "/"); // 86400 = 1 day
?> -->

<!DOCTYPE html>
<html lang="en" class="nav-collapsed">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>META liên quân</title>
    <link rel="icon" href="../../../Images/Icon-Logo/unnamed.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../CSS/Champion.css">
    <link rel="stylesheet" href="../../../CSS/Illumia.css">
    <link rel="stylesheet" href="../../../CSS/Home.css">
    <link rel="stylesheet" href="../../../Extension/font-awesome.css">
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
                    <a href="../../5v5/Home.php"
                        style="display:flex;justify-content:center;align-items:center;font-size:20px;">
                        <img src="../../../Images/Icon-Logo/N5-removebg-preview.png" alt="logo"
                            style="width:32px;height:32px;">
                        <b class="f-word">META</b>
                        <b class="s-word">aov</b>
                    </a>
                </div>
            </div>
            <div class="head-inner logo-team" style="width:450px;">
                <ul class="menu-top">
                    <li>
                        <a id="signup" href="../../../PHP/User/Register.php">Đăng ký</a>
                    </li>
                    <li>
                        <a id="login" href="../../../PHP/User/Login.php">Đăng nhập</a>
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
                                    <img class="img-pos" src="../../../Images/Icon-Logo/N5-removebg-preview.png"
                                        alt="logo" style="width:32px;height:32px;">
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
                            <a class="item-logo nav-item" href="../../Stats.php" style="padding-left: 14px;">
                                <div style="display: flex;justify-content: center;align-items: center;">
                                    <span style="width: 32px;height: 32px;" data-loaded="true">
                                        <ion-icon name="stats-chart"></ion-icon>
                                    </span>
                                    <div class="text-logo logo-st">Stats</div>
                                </div>
                            </a>
                        </div>
                        <div class="menu-item no-button">
                            <a class="item-logo nav-item" href="Home.php" style="padding-left: 14px;">
                                <div style="display: flex;justify-content: center;align-items: center;">
                                    <span style="width: 32px;height: 32px;" data-loaded="true">
                                        <ion-icon name="book"></ion-icon>
                                    </span>
                                    <div class="text-logo logo-st">Plot</div>
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
                                                    <div class="image-inner"
                                                        style="min-width: 120px;min-height: 120px;max-width: 120px;max-height: 120px;">
                                                        <?php
                                                        require '../../5v5/connect.php';
                                                        // sql 3 table champions, role_champions, stats
                                                        $sql="SELECT * FROM role_champions JOIN champions ON role_champions.id_role = champions.id_role JOIN lane WHERE champions.id_lane = lane.id AND champions.ID = 9";
                                                        $result = mysqli_query($conn, $sql);
                                                        $row = mysqli_fetch_assoc($result);
                                                        $name=$row['champ_Name'];
                                                        $lane=$row['lane_name'];
                                                        $role=$row['name_role'];
                                                        $GLOBALS['name']=$name;
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
                                                                        if($lane == "Bot") {
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
                                                        function setRoleBorder($role) {
                                                            switch($role) {
                                                                case "Pháp sư":
                                                                    return "champ-role-mage";
                                                                    break;
                                                                case "Đấu sĩ":
                                                                    return "champ-role-fighter";
                                                                    break;
                                                                case "Đỡ đòn":
                                                                    return "champ-role-tank";
                                                                    break;
                                                                case "Sát thủ":
                                                                    return "champ-role-assassin";
                                                                    break;
                                                                case "Xạ thủ":
                                                                    return "champ-role-marksman";
                                                                    break;
                                                                case "Trợ thủ":
                                                                    return "champ-role-support";
                                                                    break;
                                                                default:
                                                                    return "unknown";
                                                            }
                                                        }
                                                    echo
                                                    '<a class="champ-img ' . setLaneBorder($lane) . '"
                                                        style="position: relative;width: 100%;min-height: 120px;min-width: 120px;max-width: 120px;max-height: 120px;border-radius: 50%;display: flex;box-shadow: black 0px 0px 10px;background-size: 120px;background-position: center center;background-repeat: no-repeat;background-image: url(../../../Images/Champions/' . $name. '.jpg);">
                                                    </a>
                                                    <div style="top: 105px;left:49px;position: absolute;width: 30px;height: 30px;
                                                    background-size: cover;" class="champ-role">
                                                        <img class="img-role ' . setRoleBorder($role) . ' tooltipped"
                                                            src="../../../Images/Role/'.$row['role_img'].'" alt="' . $row['name_role'] . '"
                                                            style="width: 30px; height: 30px; border-radius: 50%;">
                                                    </div>
                                                    <div class="champ-lane"
                                                        style="top: 23px; left: 101px;position: absolute; width: 30px;height: 30px;border-radius: 50%;background-size: cover;">
                                                        <img class="img-role ' . setLaneBorder($lane) . ' tooltipped"
                                                            src="../../../Images/Lane/'.$row['lane_img'].'" alt="' . $row['lane_name'] . '"
                                                            style="width: 30px;height: 30px; border-radius: 50%;">
                                                    </div>';
                                                    ?>
                                                    </div>
                                                    <div class="title">
                                                        <h1 class="title-inner1"
                                                            style="margin-left: 20px; font-size: 2em;font-weight: bold;line-height: 0.9;">
                                                            <span style="display: flex;font-size: 30px;">
                                                                <?php echo $GLOBALS['name'] ?> Build Guide
                                                            </span>
                                                            <span class="title-inner2">Mid Lane Patch
                                                                24</span>
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="map-mode ch-ct">
                                            <a href="../<?php echo $GLOBALS['name'] ?>/Bot.php" class="home-page ge-st"
                                                style="border-bottom-color: #fff;">
                                                <span class="name-map text-hover">5v5</span>
                                            </a>
                                            <a href="#" class="active 3v3-page ge-st"
                                                style="border-bottom-color: #fff;">
                                                <span class="name-map text-hover">3v3</span>
                                            </a>
                                            <a href="../<?php echo $GLOBALS['name'] ?>/1v1.php" class="1v1-page ge-st"
                                                style="border-bottom-color: #fff;">
                                                <span class="name-map text-hover">1v1</span>
                                            </a>
                                            <div style="flex-basis: 100%; justify-content: flex-end; display: flex;">
                                            </div>
                                        </div>
                                        <div class="descript descript-bg descript-pos">
                                            <?php
                                            require '../../5v5/connect.php';
                                            $sql = "SELECT * FROM champions JOIN stats ON champions.ID = stats.id_Champ JOIN lane WHERE champions.id_lane = lane.id AND champions.ID = 9";
                                            $result = mysqli_query($conn, $sql);
                                            $count = mysqli_num_rows($result);
                                            $row = mysqli_fetch_assoc($result);
                                            if ($count > 0) {
                                                $tier = $row['tier'];
                                                $winrate = $row['win_rate'];
                                                $pickrate = $row['pick_rate'];
                                                $banrate = $row['ban_rate'];
                                                $KDA = $row['KDA'];
                                                $score = $row['Score'];
                                                echo
                                                '<div style="display: flex; justify-content: space-between; padding: 9px;">
                                                <span class="descript-text">
                                                <strong>Tier: </strong>
                                                <span class="tier-value">' . $tier . '</span>
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
                                                <span class="kda-value">' . $KDA . '%</span>
                                                </span>
                                                <span class="descript-text">
                                                <strong>Score: </strong>
                                                <span class="score-value">' . $score . '</span>
                                                </span>
                                                </div>';
                                            }
                                            ?>
                                            <div class="descript-para" style="display: flex;">
                                                <span>
                                                    <?php
                                                    $sql = "SELECT * FROM champions WHERE ID = 9";
                                                    $result = mysqli_query($conn, $sql);
                                                    $count = mysqli_num_rows($result);
                                                    $row = mysqli_fetch_assoc($result);
                                                    $name = $row['champ_Name'];
                                                    echo '<p class="para-inner">
                                                    Chào mừng bạn đến với hướng dẫn xây dựng ' . $name . ' 3v3 theo thống kê của Metaaov, patch 24. 
                                                    Chúng tôi đã tính toán cách lên đồ có tỷ lệ thắng cao nhất, ngọc bổ trợ tốt nhất cho ' . $name . ', 
                                                    thứ tự kỹ năng, cách lên đồ đầy đủ, trang bị khởi điểm, phép thuật triệu hồi, thứ tự lên đồ, đồ trang sức và phép khắc chế. 
                                                    </p>
                                                     
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="splash" class="sp-a1 spl-st">
                                        <div class="background color-bg"
                                            style="background-image: linear-gradient(45deg, rgb(17,17,17), transparent), url(../../../Images/Background/'. $name .'_bg.jpg);">
                                        </div>
                                    </div>';
                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Guiding user part -->
                                <div class="content content-details" style="flex-direction: column;">
                                    <div style="display: flex;justify-content: center;" class="ch-ct">
                                        <div class="h-content content-details">
                                            <div class="empty-space slidebar-spacer"></div>
                                        </div>
                                    </div>
                                    <div id="b-content" class="ch-ct" style="display:flex;justify-content:center;">
                                        <div class="bct ct-grid" style="position: relative">
                                            <div class="bct-inner ct-grid">
                                                <div class="bct-text">
                                                    <div class="bct-paragraph bct-bg">
                                                        <h2 class="bct-title">
                                                            Best <?php echo $GLOBALS['name'] ?> Summoner Spells
                                                        </h2>
                                                        <div class="bct-p">
                                                            <div
                                                                style="width:100%;display:flex;align-items:center;justify-content: space-around;">
                                                                <?php
                                                                require '../../5v5/connect.php';
                                                                $sql = "SELECT * FROM champions JOIN stats_spell ON champions.ID = stats_spell.id_Champ JOIN spells WHERE stats_spell.id_spell = spells.id AND champions.champ_Name = '$name'";
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
                                                                                    <img src="../../../Images/Spell/' . $spell_img . '"
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
                                                                                        <span class="win">' . $spell_win . '</span>
                                                                                    </div>
                                                                                    <div class="rating-inner"
                                                                                        style="text-align:left;">
                                                                                        <span class="pick">' . $spell_pick . '</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>';
                                                                        while($row = mysqli_fetch_assoc($result)){
                                                                            $spell = $row['spell_name'];
                                                                            $spell_img = $row['spell_image'];
                                                                            $spell_win = $row['win_rate'];
                                                                            $spell_pick = $row['pick_rate'];
                                                                            echo
                                                                            '<div>
                                                                                <div style="gap: 3px;display: flex;padding:3px;">
                                                                                    <div class="spell">
                                                                                        <img src="../../../Images/Spell/' . $spell_img . '"
                                                                                            style="width:42px;height:42px">
                                                                                    </div>
                                                                                </div>
                                                                                <div style="display:flex;margin-top:6px">
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
                                                                            </div>';
                                                                        }
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bct-text">
                                                    <div class="bct-paragraph bct-bg">
                                                        <h2 class="bct-title">
                                                            Best <?php echo $GLOBALS['name'] ?> Starting Items
                                                        </h2>
                                                        <div class="bct-p bct-bg"
                                                            style="justify-content:space-around;align-items: center;">
                                                            <div style="display:flex;margin-top:1px;">
                                                                <?php
                                                                $sql = "SELECT * FROM champions JOIN stats_items ON champions.ID = stats_items.id_Champ JOIN items WHERE stats_items.id_items = items.id AND champions.champ_Name = '$name'";
                                                                $result = mysqli_query($conn, $sql);
                                                                $count = mysqli_num_rows($result);
                                                                $row = mysqli_fetch_assoc($result);
                                                                if ($count > 0) {
                                                                    $item_img = $row['item_img'];
                                                                    $item_win = $row['win_rate'];
                                                                    $item_pick = $row['pick_rate'];
                                                                    echo
                                                                '<div>
                                                                    <div style="width:42px;height:52px;">
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="rating-inner"
                                                                            style="text-align:left;">
                                                                            <span class="win">Win%</span>
                                                                        </div>
                                                                        <div class="rating-inner"
                                                                            style="text-align:left;">
                                                                            <span class="pick">Pick%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="items group-gap items-bg"
                                                                        style="padding:3px">
                                                                        <div style="display:flex;">
                                                                            <div
                                                                                style="width:42px;display:flex;justify-content:center;align-items:center;">
                                                                                <div class="items-inner">
                                                                                    <img src="../../../Images/Items/' . $item_img . '"
                                                                                        style="width:42px;height:42px;">
                                                                                </div>
                                                                            </div>
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
                                                                </div>
                                                                </div>
                                                            <div style="margin-top:1px">
                                                                <div class="items items-bg">
                                                                    <div style="display: flex;">';
                                                                    $itemNum = "2,17,3";
                                                                    $row_array = explode(',', $itemNum);
                                                                    for ($i = 0; $i < count($row_array); $i++) {
                                                                        $sql = "SELECT * FROM champions JOIN stats_items ON champions.ID = stats_items.id_Champ JOIN items WHERE stats_items.id_items = items.id AND champions.champ_Name = '$name' AND stats_items.id_items = $row_array[$i]";
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
                                                                                    <img src="../../../Images/Items/' . $item_img . '"
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
                            </div>
                            <div class="bct-inner ct-grid">
                                <div class="bct-text">
                                    <div class="bct-paragraph bct-bg">
                                        <h2 class="bct-title">Best <?php echo $GLOBALS['name'] ?> Runes</h2>
                                        <div id="active-runes" class="bct-p bct-bg">
                                            <div
                                                style="margin-top: -10px;width:100%;display:flex;justify-content:center;">
                                                <div>
                                                    <div style="width:42px;height:79px;"></div>
                                                    <div class="rating">
                                                        <div class="rating-inner" style="text-align:left;">
                                                            <span class="win">Win%</span>
                                                        </div>
                                                        <div class="rating-inner" style="text-align:left;">
                                                            <span class="pick">Pick%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="10-19-tab" class="tab-selected badge b-hover"
                                                    style="cursor:pointer" onclick="tab('active-runes','10-19')">
                                                    <div class="activerunes-image drop-hover badge-st be">
                                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                            width="72" height="72">
                                                            <circle cx="36" cy="36"="20" fill="black">
                                                            </circle>
                                                            <circle cx="36" cy="36"="20" fill="transparent"
                                                                stroke="rgb(239, 227, 24)" stroke-width="2">
                                                            </circle>
                                                            <image class="badge-img" x="0" y="0" height="72" width="72"
                                                                xlink:href="../../../Images/PhuHieu/ThapQuangMinh.png" />
                                                        </svg>
                                                    </div>
                                                    <div class="activerunes-image drop-hover badge-st be badge-2">
                                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                            width="54" height="45">
                                                            <circle cx="27" cy="27" r="15" fill="black">
                                                            </circle>
                                                            <image class="badge-img" x="17" y="17" height="20"
                                                                width="20"
                                                                xlink:href="../../../Images/PhuHieu/ThanhKhoiNguyen.png" />
                                                            <circle cx="27" cy="27" r="15" fill="transparent"
                                                                stroke="rgb(10, 0, 148)" stroke-width="2">
                                                            </circle>
                                                        </svg>
                                                    </div>
                                                    <div class="rating" style="width:100%">
                                                        <div class="rating-inner text-hover" style="text-align:center">
                                                            <span class="win">100%</span>
                                                        </div>
                                                        <div class="rating-inner text-hover" style="text-align:center">
                                                            <span class="pick">100%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="19-10-tab" class="badge b-hover" style="cursor:pointer"
                                                    onclick="tab('active-runes','19-10')">
                                                    <div class="activerunes-image drop-hover badge-st be">
                                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                            width="72" height="72">
                                                            <circle cx="36" cy="36" r="20" fill="black">
                                                            </circle>
                                                            <circle cx="36" cy="36" r="20" fill="transparent"
                                                                stroke="rgb(239, 227, 24)" stroke-width="2">
                                                            </circle>
                                                            <image class="badge-img" x="0" y="0" height="72" width="80"
                                                                xlink:href="../../../Images/PhuHieu/ThanhKhoiNguyen.png" />
                                                        </svg>
                                                    </div>
                                                    <div class="activerunes-image drop-hover badge-st be badge-2">
                                                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                            width="54" height="45">
                                                            <circle cx="27" cy="27" r="15" fill="black">
                                                            </circle>
                                                            <image class="badge-img" x="17" y="17" height="20"
                                                                width="20"
                                                                xlink:href="../../../Images/PhuHieu/ThapQuangMinh.png" />
                                                            <circle cx="27" cy="27" r="15" fill="transparent"
                                                                stroke="rgb(239, 219, 33)" stroke-width="2">
                                                            </circle>
                                                        </svg>
                                                    </div>
                                                    <div class="rating" style="width:100%">
                                                        <div class="rating-inner text-hover" style="text-align:center">
                                                            <span class="win">100%</span>
                                                        </div>
                                                        <div class="rating-inner text-hover" style="text-align:center">
                                                            <span class="pick">100%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-top:30px;">
                                                <div id="10-19-content" class="content-selected ct-sd">
                                                    <div style="display:flex;margin-bottom:-10px;margin-top:-30px;">
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="26" cy="36" r="25" fill="black">
                                                                </circle>
                                                                <line x1="50" y1="36" x2="72" y2="36"
                                                                    style="stroke:rgb(251, 175, 23);stroke-width:2">
                                                                </line>
                                                                <image class="badge-img" x="5" y="15" height="40"
                                                                    width="40"
                                                                    xlink:href="../../../Images/PhuHieu/ThapQuangMinh.png">
                                                                </image>
                                                                <circle cx="26" cy="36" r="25" fill="transparent"
                                                                    stroke="rgb(251, 175, 23)" stroke-width="2">
                                                                </circle>
                                                            </svg>
                                                        </div>
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="36" cy="36" r="10" fill="black">
                                                                </circle>
                                                                <line x1="56" y1="36" x2="72" y2="36"
                                                                    style="stroke:rgb(251, 175, 23);stroke-width:2">
                                                                </line>
                                                                <line x1="0" y1="36" x2="26" y2="36"
                                                                    style="stroke:rgb(251, 175, 23);stroke-width:2">
                                                                </line>
                                                                <circle cx="36" cy="36" r="10" fill="transparent"
                                                                    stroke="rgb(251, 175, 23)" stroke-width="2">
                                                                </circle>
                                                                <image class="badge-img" x="0" y="0" height="72"
                                                                    width="72"
                                                                    xlink:href="../../../Images/PhuHieu/ThanQuang.png">
                                                                </image>
                                                            </svg>
                                                        </div>
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="36" cy="36" r="20" fill="black">
                                                                </circle>
                                                                <line x1="56" y1="36" x2="72" y2="36"
                                                                    style="stroke:rgb(251, 175, 23);stroke-width:2">
                                                                </line>
                                                                <line x1="0" y1="36" x2="26" y2="36"
                                                                    style="stroke:rgb(251, 175, 23);stroke-width:2">
                                                                </line>
                                                                <image class="badge-img" x="16" y="16" height="40"
                                                                    width="40"
                                                                    xlink:href="../../../Images/PhuHieu/BiQuyet.png">
                                                                </image>
                                                                <circle cx="36" cy="36" r="20" fill="transparent"
                                                                    stroke="rgb(251, 175, 23)" stroke-width="2">
                                                                </circle>
                                                            </svg>
                                                        </div>
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="36" cy="36" r="20" fill="black">
                                                                </circle>
                                                                <line x1="0" y1="36" x2="26" y2="36"
                                                                    style="stroke:rgb(251, 175, 23);stroke-width:2">
                                                                </line>
                                                                <image class="badge-img" x="16" y="16" height="40"
                                                                    width="40"
                                                                    xlink:href="../../../Images/PhuHieu/ThanhChau.png">
                                                                </image>
                                                                <circle cx="36" cy="36" r="20" fill="transparent"
                                                                    stroke="rgb(251, 175, 23)" stroke-width="2">
                                                                </circle>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div style="display:flex;flex-wrap:wrap;margin-bottom:-10px;">
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="26" cy="36" r="25" fill="black">
                                                                </circle>
                                                                <line x1="50" y1="36" x2="72" y2="36"
                                                                    style="stroke:rgb(10,0,148);stroke-width:2">
                                                                </line>
                                                                <image class="badge-img" x="7" y="15" height="40"
                                                                    width="40"
                                                                    xlink:href="../../../Images/PhuHieu/ThanhKhoiNguyen.png">
                                                                </image>
                                                                <circle cx="26" cy="36" r="25" fill="transparent"
                                                                    stroke="rgb(10,0,148)" stroke-width="2">
                                                                </circle>
                                                            </svg>
                                                        </div>
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="36" cy="36" r="20" fill="black">
                                                                </circle>
                                                                <line x1="0" y1="36" x2="26" y2="36"
                                                                    style="stroke:rgb(10,0,148);stroke-width:2">
                                                                </line>
                                                                <image class="badge-img" x="16" y="16" height="40"
                                                                    width="40"
                                                                    xlink:href="../../../Images/PhuHieu/MatNgu.png">
                                                                </image>
                                                                <circle cx="36" cy="36" r="20" fill="transparent"
                                                                    stroke="rgb(10,0,148)" stroke-width="2">
                                                                </circle>
                                                            </svg>
                                                        </div>
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="36" cy="36" r="25" fill="black">
                                                                </circle>
                                                                <line x1="50" y1="36" x2="72" y2="36"
                                                                    style="stroke:rgb(10,0,148);stroke-width:2">
                                                                </line>
                                                                <image class="badge-img" x="17" y="15" height="40"
                                                                    width="40"
                                                                    xlink:href="../../../Images/PhuHieu/ThanhKhoiNguyen.png">
                                                                </image>
                                                                <circle cx="36" cy="36" r="25" fill="transparent"
                                                                    stroke="rgb(10,0,148)" stroke-width="2">
                                                                </circle>
                                                            </svg>
                                                        </div>
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="36" cy="36" r="20" fill="black">
                                                                </circle>
                                                                <line x1="0" y1="36" x2="26" y2="36"
                                                                    style="stroke:rgb(10,0,148);stroke-width:2">
                                                                </line>
                                                                <image class="badge-img" x="16" y="16" height="40"
                                                                    width="40"
                                                                    xlink:href="../../../Images/PhuHieu/QuaCauBS.png">
                                                                </image>
                                                                <circle cx="36" cy="36" r="20" fill="transparent"
                                                                    stroke="rgb(10,0,148)" stroke-width="2">
                                                                </circle>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="19-10-content" class="ct-sd hidden">
                                                    <div style="display:flex;margin-bottom:-10px;margin-top:-30px;">
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="26" cy="36" r="25" fill="black">
                                                                </circle>
                                                                <line x1="50" y1="36" x2="72" y2="36"
                                                                    style="stroke:rgb(251, 175, 23);stroke-width:2">
                                                                </line>
                                                                <image class="badge-img" x="5" y="15" height="40"
                                                                    width="40"
                                                                    xlink:href="../../../Images/PhuHieu/ThanhKhoiNguyen.png">
                                                                </image>
                                                                <circle cx="26" cy="36" r="25" fill="transparent"
                                                                    stroke="rgb(251, 175, 23)" stroke-width="2">
                                                                </circle>
                                                            </svg>
                                                        </div>
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="36" cy="36" r="10" fill="black">
                                                                </circle>
                                                                <line x1="56" y1="36" x2="72" y2="36"
                                                                    style="stroke:rgb(251, 175, 23);stroke-width:2">
                                                                </line>
                                                                <line x1="0" y1="36" x2="26" y2="36"
                                                                    style="stroke:rgb(251, 175, 23);stroke-width:2">
                                                                </line>
                                                                <circle cx="36" cy="36" r="10" fill="transparent"
                                                                    stroke="rgb(251, 175, 23)" stroke-width="2">
                                                                </circle>
                                                                <image class="badge-img" x="0" y="0" height="72"
                                                                    width="72"
                                                                    xlink:href="../../../Images/PhuHieu/ThanQuang.png">
                                                                </image>
                                                            </svg>
                                                        </div>
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="36" cy="36" r="20" fill="black">
                                                                </circle>
                                                                <line x1="56" y1="36" x2="72" y2="36"
                                                                    style="stroke:rgb(251, 175, 23);stroke-width:2">
                                                                </line>
                                                                <line x1="0" y1="36" x2="26" y2="36"
                                                                    style="stroke:rgb(251, 175, 23);stroke-width:2">
                                                                </line>
                                                                <image class="badge-img" x="16" y="16" height="40"
                                                                    width="40"
                                                                    xlink:href="../../../Images/PhuHieu/BiQuyet.png">
                                                                </image>
                                                                <circle cx="36" cy="36" r="20" fill="transparent"
                                                                    stroke="rgb(251, 175, 23)" stroke-width="2">
                                                                </circle>
                                                            </svg>
                                                        </div>
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="36" cy="36" r="20" fill="black">
                                                                </circle>
                                                                <line x1="0" y1="36" x2="26" y2="36"
                                                                    style="stroke:rgb(251, 175, 23);stroke-width:2">
                                                                </line>
                                                                <image class="badge-img" x="16" y="16" height="40"
                                                                    width="40"
                                                                    xlink:href="../../../Images/PhuHieu/ThanhChau.png">
                                                                </image>
                                                                <circle cx="36" cy="36" r="20" fill="transparent"
                                                                    stroke="rgb(251, 175, 23)" stroke-width="2">
                                                                </circle>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div style="display:flex;flex-wrap:wrap;margin-bottom:-10px;">
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="26" cy="36" r="25" fill="black">
                                                                </circle>
                                                                <line x1="50" y1="36" x2="72" y2="36"
                                                                    style="stroke:rgb(10,0,148);stroke-width:2">
                                                                </line>
                                                                <image class="badge-img" x="7" y="15" height="40"
                                                                    width="40"
                                                                    xlink:href="../../../Images/PhuHieu/ThanhKhoiNguyen.png">
                                                                </image>
                                                                <circle cx="26" cy="36" r="25" fill="transparent"
                                                                    stroke="rgb(10,0,148)" stroke-width="2">
                                                                </circle>
                                                            </svg>
                                                        </div>
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="36" cy="36" r="20" fill="black">
                                                                </circle>
                                                                <line x1="0" y1="36" x2="26" y2="36"
                                                                    style="stroke:rgb(10,0,148);stroke-width:2">
                                                                </line>
                                                                <image class="badge-img" x="16" y="16" height="40"
                                                                    width="40"
                                                                    xlink:href="../../../Images/PhuHieu/MatNgu.png">
                                                                </image>
                                                                <circle cx="36" cy="36" r="20" fill="transparent"
                                                                    stroke="rgb(10,0,148)" stroke-width="2">
                                                                </circle>
                                                            </svg>
                                                        </div>
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="36" cy="36" r="25" fill="black">
                                                                </circle>
                                                                <line x1="50" y1="36" x2="72" y2="36"
                                                                    style="stroke:rgb(10,0,148);stroke-width:2">
                                                                </line>
                                                                <image class="badge-img" x="17" y="15" height="40"
                                                                    width="40"
                                                                    xlink:href="../../../Images/PhuHieu/ThanhKhoiNguyen.png">
                                                                </image>
                                                                <circle cx="36" cy="36" r="25" fill="transparent"
                                                                    stroke="rgb(10,0,148)" stroke-width="2">
                                                                </circle>
                                                            </svg>
                                                        </div>
                                                        <div class="be badge-st">
                                                            <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                                                                width="72" height="72">
                                                                <circle cx="36" cy="36" r="20" fill="black">
                                                                </circle>
                                                                <line x1="0" y1="36" x2="26" y2="36"
                                                                    style="stroke:rgb(10,0,148);stroke-width:2">
                                                                </line>
                                                                <image class="badge-img" x="16" y="16" height="40"
                                                                    width="40"
                                                                    xlink:href="../../../Images/PhuHieu/QuaCauBS.png">
                                                                </image>
                                                                <circle cx="36" cy="36" r="20" fill="transparent"
                                                                    stroke="rgb(10,0,148)" stroke-width="2">
                                                                </circle>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bct-text ct-grid">
                                    <d class="bct-bg"
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:center;padding:5px;">
                                        <h2 class="bct-title">Best <?php echo $GLOBALS['name'] ?> Item Build</h2>
                                        <div class="bct-p">
                                            <div style="width:100%;display:flex;justify-content:space-around;flex-wrap:wrap"
                                                class="content-details">
                                                <div style="display:flex;align-items:center;justify-content:center;">
                                                    <?php
                                                        $itemNum = "46,53,58,60,61,62";
                                                        $row_array = explode(',', $itemNum);
                                                        for ($i = 0; $i < count($row_array); $i++) {
                                                            $sql = "SELECT * FROM `items` WHERE `id` = $row_array[$i]";
                                                            $result = mysqli_query($conn, $sql);
                                                            $row = mysqli_fetch_assoc($result);
                                                            if ($i <= count($row_array)) {
                                                                echo '<div>
                                                                    <div class="badge-st">
                                                                    <div class="items items-pos">
                                                                        <img src="../../../Images/Items/' . $row['item_img'] . '" style="width:42px;height:42px">
                                                                    </div>
                                                                </div>
                                                                <div class="rating">
                                                                    45%
                                                                </div>
                                                                </div>';
                                                            }
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bct-bg"
                                            style="display:flex;flex-direction:column;justify-content:space-between;align-items:center;padding:5px;">
                                            <h2 class="bct-title">Best <?php echo $GLOBALS['name'] ?> Skill Order</h2>
                                            <div class="bct-p">
                                                <table class="skill-table sl-te"
                                                    style="border-top:1px solid black;border-bottom:1px solid black;margin-bottom:5px;">
                                                    <tbody>
                                                        <tr class="skills">
                                                            <th class="skill-inner">
                                                                <div class="skills-st">
                                                                    <img src="../../../Images/Skills/Illumia/NoiTai.png"
                                                                        style="width:20px;height:20px">
                                                                </div>
                                                            </th>
                                                            <th class="skill-inner">1</th>
                                                            <th class="skill-inner">2</th>
                                                            <th class="skill-inner">3</th>
                                                            <th class="skill-inner">4</th>
                                                            <th class="skill-inner">5</th>
                                                            <th class="skill-inner">6</th>
                                                            <th class="skill-inner">7</th>
                                                            <th class="skill-inner">8</th>
                                                            <th class="skill-inner">9</th>
                                                            <th class="skill-inner">10</th>
                                                            <th class="skill-inner">11</th>
                                                            <th class="skill-inner">12</th>
                                                            <th class="skill-inner">13</th>
                                                            <th class="skill-inner">14</th>
                                                            <th class="skill-inner">15</th>
                                                        </tr>
                                                        <tr class="skills">
                                                            <td class="skill-inner">
                                                                <div class="skill-st">
                                                                    <img src="../../../Images/Skills/Illumia/QuaCauAS_1.png"
                                                                        style="width:20px;height:20px">
                                                                </div>
                                                            </td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>

                                                        </tr>
                                                        <tr class="skills">
                                                            <td class="skill-inner">
                                                                <div class="skill-st">
                                                                    <img src="../../../Images/Skills/Illumia/TrucXuat_2.png"
                                                                        style="width:20px;height:20px">
                                                                </div>
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>
                                                            <td class="skill-inner"></td>

                                                        </tr>
                                                        <tr class="skills">
                                                            <td class="skill-inner">
                                                                <div class="skill-st">
                                                                    <img src="../../../Images/Skills/Illumia/ThanTran_3.png"
                                                                        style="width:20px;height:20px">
                                                                </div>
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner skill-active">X
                                                            </td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner"></td>
                                                            <td class="skill-inner"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="bct-inner ct-grid">
                                <div class="bct-text bct-bg">
                                    <h2 class="bct-title">Best <?php echo $GLOBALS['name'] ?> Items Build Order</h2>
                                    <div class="bct-p">
                                        <?php
                                            require '../../5v5/connect.php';
                                            $sql = "SELECT * FROM `items`";
                                            $result = mysqli_query($conn, $sql);
                                            $row = mysqli_fetch_assoc($result);
                                            ?>
                                        <span style="margin-left:4px;"></span>
                                        <?php
                                            // split number of items
                                            $itemNum = "17,46,6,25,11,53,6,25,58,6,59,60,6,27,11,61,6,25,62";
                                            $row_array = explode(',', $itemNum);
                                            for ($i = 0; $i < count($row_array); $i++) {
                                                $sql = "SELECT * FROM `items` WHERE `id` = $row_array[$i]";
                                                $result = mysqli_query($conn, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                $level_item = $row['level_item'];
                                                if ($i <= count($row_array)) {
                                                    echo '<span class="fa fa-arrow-right" style="margin:4px;"></span>
                                                    <div class="items-st>
                                                    <div class="itemsin-st spec-item">
                                                <img src="../../../Images/Items/' . $row['item_img'] . '"
                                                    style="width:42px;height:42px">
                                            </div>';
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="../../../JS/navigation.js"></script>
    <script type="text/javascript" src="../../../JS/Home.js"></script>
    <script type="text/javascript" src="../../../JS/metaaov.js"></script>
    <?php
    // Start the session
    $username = $_SESSION['user'];
    // Check if the session variable username is set
    if (isset($username)) {
        echo '
        <script>
        // using JS to change the login and register button to user name and logout button if session is set
        var show_log = document.getElementById("login");
        var show_reg = document.getElementById("signup");
        if(show_log != null || show_reg != null) {
            show_log.innerHTML = "<p>Xin chào, ' . $username . '</p>";
            // Print the echo statement in the a tag have id login
            show_reg.innerHTML = "<a href=\"../../../PHP/User/logout.php\">Đăng xuất</a>";
    }
    </script>';
    ?>
    <?php
    } else {
    ?>
    <?php echo '
    <script>
        // Print back the login and register button if session variable username is not set
        <a href="../../../PHP/User/login.php">Đăng nhập</a>
        <a href="../../../PHP/User/register.php">Đăng ký</a>
    </script>';
    ?>
    <?php
    }
    ?>
</body>

</html>