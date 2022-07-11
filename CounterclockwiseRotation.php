<?php
    fscanf(STDIN, "%d %d %d", $x, $y, $d);
    $current_rad = atan2($y, $x);
    $distance = sqrt($x ** 2 + $y ** 2);
    $target_rad = deg2rad(rad2deg($current_rad) + $d);
    echo cos($target_rad)  * $distance . ' ' . sin($target_rad) * $distance . "\n";