<?php
require 'connect.php';
function getTierText($win)
{
        if($win >= 55) {
            return 'S+ / God';
        }
        else
        {
            if($win >= 50 && $win < 55) {
                return 'S / Strong';
            }
            else
            {
                if($win >= 45 && $win < 50) {
                    return 'A / Good';
                }
                else
                {
                    if($win >= 40 && $win < 45) {
                        return 'B / Fair';
                    }
                    else
                    {
                        if($win >= 30 && $win < 40) {
                            return 'C / Weak';
                        }
                        else if($win < 30)
                            {
                                return 'D / Bad';
                            }
                    }
                }
            }
        }
    }

function setTierColor($win) 
{
    if(getTierText($win) == "S+ / God") {
        return "rate-colorv1";
    }
    else
    {
        if(getTierText($win) == "S / Strong") {
            return "rate-colorv2";
        }
        else
        {
            if(getTierText($win) == "A / Good") {
                return "rate-colorv3";
            }
            else
            {
                 if(getTierText($win) == "B / Fair") {
                     return "rate-colorv4";
                 }
                 else
                 {
                     if(getTierText($win) == "C / Weak") {
                         return "rate-colorv5";
                     }
                     else
                     {
                         if(getTierText($win) == "D / Bad")
                         {
                             return "rate-colorv6";
                         }
                    }
                }
            }
        }
    }
}

function setColorLane($lane) 
{
    if($lane == "Mid") {
        return "colorv-3";
    }
    else
    {
        if($lane == "Top") {
            return "colorv-1";
        }
        else
        {
            if($lane == "Jungle") {
                return "colorv-2";
            }
            else
            {
                if($lane == "ADC") {
                    return "colorv-4";
                }
                else
                {
                    if($lane == "Support") {
                        return "colorv-5";
                    }
                }
            }
        }
    }
}

function setTrendColor($trend) 
{
    // take the first character of the trend
    $trend = substr($trend, 0, 1);
    if($trend == '+') {
        return 'trend-color1';
    }
    else
    {
        if($trend == '-') {
            return 'trend-color2';
        }
    }
}
require 'style.php';
// get the data from the database champions, stats and lane, remove the champions with status = 0(off meta) and order by champions name
$sql = "SELECT * FROM champions JOIN stats ON champions.id_champ = stats.id_champ JOIN lane WHERE stats.id_lane = lane.id_lane AND stats.status <> 0 ORDER BY champions.champ_Name ASC";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
    $name = $row['champ_Name'];
    $lane = $row['lane_name'];
    $trend = $row['trend'];
    $win = $row['win_rate'];
    $pick = $row['pick_rate'];
    $ban = $row['ban_rate'];
    $KDA = $row['KDA'];
// Function to get the tier text
    echo '<tr class = "rating-inner" role = "row">
     <td class = "rating-cell rating-st rt-hv">
        <span hidden = "hidden"> ' . $name . '</span>
        <a href="../5v5/Champions/' . $name . '/' . $lane . '.php?name=' . $name . '&lane='.$lane.'" style = "color:inherit;display:block">
            <img id = "name_c" src = "../../Images/Champions/' . $name . '.jpg" alt = "' . $name . '" width = "24" height = "24"> ' . $name . '
        </a>
     </td>
    <td class = "rating-txt">
        <div class = "lane-st ' . setColorLane($lane) . '"> ' . $lane . '</div>
    </td>
    <td class = "rating-cell '.setTierColor($win).'">
    ' .getTierText($win) .'
    </td>
    <td class = "rating-cell">
        <div class = "'. setTrendColor($trend). '"> ' . $trend . ' </div>
    </td>
    <td class = "rating-cell"> ' . $win . '%
    </td>
    <td class = "rating-cell"> ' . $pick . '% </td>
    <td class = "rating-cell"> ' . $ban . '%  </td>
    <td class = "rating-cell"> ' . $KDA . '</td>
    </tr>';
}