<?php
include "includes/settings.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rooms</title>
    <script src="libs/jquery/jquery-2.1.0.js"></script>

</head>
<script>
$(document).ready(function(){

    setInterval(function() {
        $.ajax({
            url: "/server/get_rooms_list.php",
            type: 'GET',
            data: {},
            success: function (response) {
                var data = JSON.parse(response);

                if (data.night){
                    $("#monitor_1").hide();
                    $("#monitor_3").hide();
                    $("#mode").html(data.mode_text);
                } else {
                    $("#monitor_1").show();
                    $("#monitor_3").show();
                    $("#mode").html(data.mode_text);
                }

                $.each(data.floors, function (id, floor) {
                    $("#floor_" + id + "_main").html(floor.main);
                    $("#floor_" + id + "_next").html(floor.next.join(", "));
                });
            }
        })
    }, 1000);
});
</script>
<style>
    .monitor{
        padding: 30px;
        font-family: Courier;
    }
    .mainroom{
        font-size: 80pt; color: midnightblue;
    }
    .nextroom{
        font-size: 20pt;
    }
    .mode{
        padding: 5px;
        font-family: Courier;
    }
</style><body>
<center>
<div class="monitor" id="monitor_1">
    <span class="mainroom" id="floor_3_main">--</span><br>
    <span class="nextroom" id="floor_3_next">&nbsp;</span>
    <hr>
</div>
<div class="monitor" id="monitor_2">
    <span class="mainroom" id="floor_2_main">--</span><br>
    <span class="nextroom" id="floor_2_next">&nbsp;</span>
    <hr>
</div>
<div class="monitor" id="monitor_3">
    <span class="mainroom" id="floor_1_main">--</span><br>
    <span class="nextroom" id="floor_1_next">&nbsp;</span>
    <hr>
</div>
<div class="mode" id="mode"> </div>
<div class="mode">Powered by jchr @ 2016 </div>
</center>
</body>
</html>