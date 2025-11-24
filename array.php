<?php
declare(strict_types = 1);

$columns = 5;
$rows = 7;
$totalNumbers = $columns * $rows;

$numbers = range(1, 1000);
shuffle($numbers);
$numbers = array_slice($numbers, 0, $totalNumbers);

$array = [];
$columnsSum = array_fill(0, $columns, 0);
$rowsSum = [];
$numIndex = 0;
for ($i = 0; $i < $rows; $i++) {
    $row = [];
    $curRowSum = 0;
    for ($j = 0; $j < $columns; $j++) {
        $num = $numbers[$numIndex++];
        $row[] = $num;
        $curRowSum += $num;
        $columnsSum[$j] += $num;
    }
    $rowsSum[] = $curRowSum;
    $array[] = $row;
    echo implode(' ', $row) . PHP_EOL;
}
echo "Sum by columns: " . implode(', ', $columnsSum) . PHP_EOL;
echo "Sum by rows: " . implode(', ', $rowsSum) . PHP_EOL;