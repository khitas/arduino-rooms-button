<?php
chdir("../");
include "includes/settings.php";

$night = getNight();

$filters = array(
    new DFC(Events::FIELD_ACTIVE, 1, DFC::EXACT),
);

$sort = array(
    new DSC(Events::FIELD_CREATED_ON, DSC::ASC)
);

$events = Events::findByFilter($db, $filters, true, $sort);

$data["floors"] = array();

if ($night){
    foreach($events as $event){
        if ($data["floors"][ "2" ]["main"])
            $data["floors"][ "2" ]["next"][] = $event->getName();
        else
            $data["floors"][ "2" ]["main"] = $event->getName();
    }
}
else {
    foreach($events as $event){
        if ($data["floors"][ $event->getFloor() ]["main"])
            $data["floors"][ $event->getFloor() ]["next"][] = $event->getName();
        else
            $data["floors"][ $event->getFloor() ]["main"] = $event->getName();
    }
}



if (!$data["floors"][ "1" ]["main"]) $data["floors"]["1"]["main"] = "--";
if (!$data["floors"][ "2" ]["main"]) $data["floors"]["2"]["main"] = "--";
if (!$data["floors"][ "3" ]["main"]) $data["floors"]["3"]["main"] = "--";

if (!is_array($data["floors"]["1"]["next"])) { $data["floors"]["1"]["next"] = array("--"); }
if (!is_array($data["floors"]["2"]["next"])) { $data["floors"]["2"]["next"] = array("--"); }
if (!is_array($data["floors"]["3"]["next"])) { $data["floors"]["3"]["next"] = array("--"); }

$data["night"] = $night;
$data["mode_text"] = "---=== <b>".($night ? "Night" : "Day")." Mode</b> ===---";

echo json_encode($data);

?>