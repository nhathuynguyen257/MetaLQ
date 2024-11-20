<?php
function getTier($win, $status)
{
    if($status == 1) {
        if($win >= 55) {
            return 'S+';
        }
        else
        {
            if($win >= 50 && $win < 55) {
                return 'S';
            }
            else
            {
                if($win>= 45 && $win < 50) {
                    return 'A';
                }
                else
                {
                    if($win >= 40 && $win < 45) {
                        return 'B';
                    }
                    else
                    {
                        if($win >= 30 && $win < 40) {
                            return 'C';
                        }
                        else if($win < 30)
                            {
                                return 'D';
                            }
                    }
                }
            }
        }
    }
    else
        return 'Off meta';
}

function setTier($win, $status) 
{
    if(getTier($win, $status) == "S+") {
        return "rate-colorv1";
    }
    else
    {
        if(getTier($win, $status) == "S") {
            return "rate-colorv2";
        }
        else
        {
            if(getTier($win, $status) == "A") {
                return "rate-colorv3";
            }
            else
            {
                 if(getTier($win, $status) == "B") {
                     return "rate-colorv4";
                 }
                 else
                 {
                     if(getTier($win, $status) == "C") {
                         return "rate-colorv5";
                     }
                     else
                     {
                         if(getTier($win, $status) == "D")
                         {
                             return "rate-colorv6";
                         }
                    }
                }
            }
        }
    }
}