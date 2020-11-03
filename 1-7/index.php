<?php
$taulukko = [
    ['A', 'B', 'C'],
    ['X', 'Y', 'Z'],
    [1, 2, 3]
];

for($i = 0; $i < count($taulukko); $i = $i + 1) {
    for($j = 0; $j < count($taulukko[$i]); $j = $j +1 ) {
    echo ' ' . $taulukko[$i][$j];
    }
    echo '<br>';
}

/*echo '1. ' . $taulukko[0][0] . ' ' . $taulukko[0][1] . ' ' . $taulukko[0][2] . '<br>';
echo '2. ' . $taulukko[1][0] . ' ' . $taulukko[1][1] . ' ' . $taulukko[1][2] . '<br>';
echo '3. ' . $taulukko[2][0] . ' ' . $taulukko[2][1] . ' ' . $taulukko[2][2] . '<br>';
*/