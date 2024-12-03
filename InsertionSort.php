<?php
function insertionSort($arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && strcasecmp($arr[$j], $key) > 0) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }

    return $arr;
}

$names = ["Carlos", "Ana", "Luis", "María", "Beatriz", "Pedro", "José"];

echo "Lista antes del ordenamiento:<br>";
print_r($names);

$sortedNames = insertionSort($names);
echo "<br><br>";
echo "Lista después del ordenamiento:<br>";
print_r($sortedNames);
?>
