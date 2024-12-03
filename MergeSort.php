<?php
function mergeSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }

    $middle = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    $i = 0; $j = 0;

    while ($i < count($left) && $j < count($right)) {
        if (strcasecmp($left[$i], $right[$j]) <= 0) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }


    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}


$words = ["manzana", "banana", "uva", "naranja", "limón", "fresa", "cereza"];


echo "Lista antes del ordenamiento:<br>";
print_r($words);


$sortedWords = mergeSort($words);

echo "<br><br>";
echo "Lista después del ordenamiento:<br>";
print_r($sortedWords);
?>
