<?php

$d1 = json_decode(file_get_contents("php://input"), false);

echo "we received";
print_r([
    "temp" => $d1->temperature,
    "moisture" => $d1->sm,
    "sm_per100" => ($d1->sm * 100 / 1024),
    "temp_alert" => $d1->temperature > 100 ? 1 : 0
]);