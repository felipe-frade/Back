<?php

$ts = strtotime("2018-07-18 15:00");
$ta = strtotime("now");

$oi= $ts-$ta;

echo date("d/m/Y", $ts)."<br>";
echo date("d/m/Y", $ta)."<br>";

echo date("H:i:s", $oi);
?>