<?php
    fscanf(STDIN, "%d %d %d %d %d", $n, $m, $x, $t, $d);
    $height_array[$n] = $t;
    for ($i=$n - 1;$i>=$m;$i--) {
        if ($n >= $i && $x <= $i && $n !== $x) {
        } else {
            $t = $t - $d;
        }
         $height_array[$i] = $t;
    }
    echo $height_array[$m] . "\n";