<?php

$value = [54, 87, 54, 67, 43, 78, 90, 89, 85, 69, 70, 83, 97, 100, 67, 40, 58, 76];

$max = $value[0];
$min = $value[0];
$sum = $value[0];
for ($i = 1; $i <count($value); $i++) { 
    if ($value[$i] > $max) {
        $max = $value[$i];
    }
    if ($value[$i] < $min) {
        $min = $value[$i];
    }
    $sum = $sum + $value[$i];
}

print_r("<pre>");
print_r("Rata Rata Nilai Ujian =>  " . $sum / count($value));
print_r("<br><br>");
print_r("Nilai Tertinggi Dari Ujian => " . $max);
print_r("<br><br>");
print_r("Nilai Terrendah Dari Ujian => " . $min);
die;