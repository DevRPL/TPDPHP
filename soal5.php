<?php

function perkalian($n1,$n2)
{
    return $n1 *= $n2; 
}

function pembagian($n1,$n2)
{
    return $n1 /= $n2; 
}

print_r("<pre>");
print_r("Hasil dari 5 * 5  Adalah " . perkalian(5, 5));
print_r("<br><br>");
print_r("Hasil dari 25 / 5 Adalah " . pembagian(25, 5));
die;