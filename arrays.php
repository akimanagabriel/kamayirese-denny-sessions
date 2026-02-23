<?php


// echo "<pre>";
// print_r($numbers);

// foreach ($numbers as $v) {
//     echo "$v <hr>";
// }

$person = [
    "name" => "John Doe",
    "ages" => 12,
    "location" => "Kirehe"
];

// echo $person["name"];

// foreach($person as $p){
//     echo "$p <hr>";
// }

// foreach ($person as $key => $value) {
//     echo "$key : $value <hr>";
// }


// $numbers = [1, 3, 2,50, 4, 6, 4, 6, 8];
// echo array_sum($numbers);

// exercise: Write a php program to calculate an average of array elements average = sum / n

$marks = [
    [10, 30, 40],
    [45, 70, 85],
    [10, 20, 15, 8,3,4],
];

$total = 0;
$count = 0;
foreach ($marks as $term) {
    $total += array_sum($term);
    $count += count($term);
}

$average = $total / $count;

echo "Tatal marks = $total <br>";
echo "Average of $count elements = $average";






