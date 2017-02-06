<?php
function getNight(){
    global $nightStart, $nightEnd;

    $currentTime = date("H:i:s");

    return check_time($nightStart, $nightEnd, $currentTime);
}

function check_time($nightStart, $nightEnd, $currentTime) {
    $nightStart = +str_replace(":", "", $nightStart);
    $nightEnd = +str_replace(":", "", $nightEnd);
    $currentTime = +str_replace(":", "", $currentTime);
    if ($nightEnd >= $nightStart) {
        return $nightStart <= $currentTime && $currentTime < $nightEnd;
    } else {
        return ! ($nightEnd <= $currentTime && $currentTime < $nightStart);
    }
}

?>