<?php
require 'connect_1v1.php';
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

function setColorRole($role_name) 
{
    if($role_name == "Pháp sư") {
        return "champ-bg-mage ";
    }
    else
    {
        if($role_name == "Đấu sĩ") {
            return "champ-bg-fighter";
        }
        else
        {
            if($role_name == "Xạ thủ") {
                return "champ-bg-marksman";
            }
            else
            {
                if($role_name == "Đỡ đòn") {
                    return "champ-bg-tank";
                }
                else
                {
                    if($role_name == "Trợ thủ") {
                        return "champ-bg-support";
                    }
                    else
                        return "champ-bg-assassin";
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
$sql = "SELECT * FROM champions JOIN stats ON champions.id_champ = stats.id_champ JOIN role_champions WHERE stats.id_role = role_champions.id_role AND status <> 0 ORDER BY champions.champ_Name ASC";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
    $name = $row['champ_Name'];
    $trend = $row['trend'];
    $win = $row['win_rate'];
    $pick = $row['pick_rate'];
    $KDA = $row['KDA'];
    $role_name = $row['name_role'];

// Function to get the tier text
    echo '<tr class = "rating-inner" role = "row">
     <td class = "rating-cell rating-st rt-hv">
        <span hidden = "hidden"> ' . $name . '</span>
        <a href="../3v3/Champion/' . $name . '.php?name=' . $name . '" style = "color:inherit;display:block">
            <img src = "../../Images/Champions/' . $name . '.jpg" alt = "' . $name . '" width = "24" height = "24"> ' . $name . '
        </a>
     </td>
     <td class = "rating-cell rating-txt">
        <div class = "' . setColorRole($role_name) . '"> ' . $role_name . ' </div>
    </td>
     <td class = "rating-cell '.setTierColor($win).'">
     ' .getTierText($win) .'
     </td>
    <td class = "rating-cell">
        <div class = "' . setTrendColor($trend) . '"> ' . $trend . ' </div>
    </td>
    <td class = "rating-cell"> ' . $win . '%
    </td>
    <td class = "rating-cell"> ' . $pick . '% </td>
    <td class = "rating-cell"> ' . $KDA . '</td>
    </tr>';
}