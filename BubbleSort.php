<?php
function bubbleSortDescending($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

$numbers = [3, -2, 7, 1, -5, 3, 0, 9];

echo "Lista antes del ordenamiento:<br>";
print_r($numbers);

$sortedNumbers = bubbleSortDescending($numbers);
echo "<br><br>";
echo "Lista después del ordenamiento:<br>";
print_r($sortedNumbers);
?>
