<?php

$string = "TestDasarProgrammerPHP"; 

echo "<b>" . $string ."</b>". " Memiliki " . "<b>" . strlen(preg_replace('![^A-Z]+!', '', $string)) . "</b>" . " Huruf Kapital";
