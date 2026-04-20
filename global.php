<?php
//change superglobal
// $x = 10;

// function changeValue() {
//     $GLOBALS['x'] = 50;
// }

// changeValue();

// echo $x; // Output: 50
//Multiply Numbers
// $a = 4;
// $b = 3;

// function multiply() {
//     $GLOBALS['result'] = $GLOBALS['a'] * $GLOBALS['b'];
// }

// multiply();

// echo $result; // Output: 12
//Using loop
$total = 0;

function sumArray() {
    $numbers = [1, 2, 3, 4];

    foreach ($numbers as $num) {
        $GLOBALS['total'] += $num;
    }
}

sumArray();

echo $total; // Output: 10
?>