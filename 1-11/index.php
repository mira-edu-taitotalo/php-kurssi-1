<?php
$number = rand (0,5000);

if ($number > 4000) {
    echo 'A';
} elseif ($number == 0 || $number == 1000) {
    echo 'B';
} elseif ((($number % 2) == 0) && $number < 3000) {
    echo 'C';
} else {
    echo 'D';
}
