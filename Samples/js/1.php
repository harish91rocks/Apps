<?php

$n = 600851475143;
$lp;
for ($i = 1; $i < $n / 2; $i++) {
    if ($n % $i === 0) {
        $counter = 0;
        for ($num = $i / 2; $num >= 1; $num--) {
            if ($i % $num === 0)
                $counter = $counter + 1;
        }
        if ($counter === 1) {
            $lp = $i;
        }
    }
}
echo $lp;
