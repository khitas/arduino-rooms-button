<?php
chdir("../");
include "includes/settings.php";

$night = getNight();

$floor = $_GET["floor"];

$room = "";

if ($floor) {

    if ($night) {
        $filters = array(
            new DFC(Events::FIELD_ACTIVE, 1, DFC::EXACT),
        );
    } else {
        $filters = array(
            new DFC(Events::FIELD_ACTIVE, 1, DFC::EXACT),
            new DFC(Events::FIELD_FLOOR, $floor, DFC::EXACT),
        );
    }

    $sort = array(
        new DSC(Events::FIELD_CREATED_ON, DSC::ASC)
    );

    $events = Events::findByFilter($db, $filters, true, $sort);

    if (count($events) > 0) {
        $event = $events[0];
        $room = $event->getName();
    } else {
        $room = "--";
    }
}
else {
    $room = "00";
}

$room .= (count($events) > 0 ? "+" : "-");

echo "{" . $room . "}" . PHP_EOL;

//$data = serialize($_GET);
//$logname = "/Users/khitas/Sites/rooms/log.txt";
//$log = fopen($logname,"a");
//fwrite($log, "GET ".$data.PHP_EOL);
//fclose($log);
//echo '{B2+}' . PHP_EOL;
?>