<?php
chdir("../");
include "includes/settings.php";

$floorNames = array("-", "A", "B", "C");

$floor = $_GET["floor"];
$room = $_GET["room"];

if ($floor && $room) {
    $filters = array(
        new DFC(Events::FIELD_ACTIVE, 1, DFC::EXACT),
        new DFC(Events::FIELD_FLOOR, $floor, DFC::EXACT),
        new DFC(Events::FIELD_ROOM, $room, DFC::EXACT),
    );

    $events = Events::findByFilter($db, $filters, true);

    if (count($events) == 0) {
        $event = new Events();
        $event->setName($floorNames[$floor].$room);
        $event->setFloor($floor);
        $event->setRoom($room);
        $event->setActive(1);
        $event->setCreatedOn(date("Y-m-d H:i:s"));
        $event->insertIntoDatabase($db);
    }
}
//$data = serialize($_GET);
//$logname = "/Users/khitas/Sites/rooms/log.txt";
//$log = fopen($logname,"a");
//fwrite($log, "SET ".$data.PHP_EOL);
//fclose($log);
?>