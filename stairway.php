<?php
declare(strict_types = 1);

$start = 1;
$end = 100;
for ($line = 1; $start <= $end; $line++) {
    for ($i = 0; $i < $line && $start <= $end; $i++) {
        echo $start++ . ' ';
    }
    echo PHP_EOL;
}