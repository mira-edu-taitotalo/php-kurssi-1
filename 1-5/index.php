<?php
$taulukko = ['A', 'B', 'C' , 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K'];

for ($x = 0; $x < count($taulukko); $x = $x + 1) {
    echo $taulukko[$x] . ' ';
}
echo '<br>';
for ($x = count($taulukko) - 1; $x >= 0; $x = $x - 1) {
    echo $taulukko[$x] . ' ';
}


// Ensimmäinen versio
/*
echo $taulukko[0] . ' ' . $taulukko[1] . ' ' . $taulukko[2] . ' ' . $taulukko[3] . ' ' . $taulukko[4] . ' ' . $taulukko[5] . ' ' . $taulukko[6] . ' ' . $taulukko[7] . ' ' . $taulukko[8] . ' ' . $taulukko[9] . ' ' . $taulukko[10] . ' ' . $taulukko[11] . '<br>' .  $taulukko[11] . ' ' . $taulukko[10] . ' ' . $taulukko[9] . ' ' . $taulukko[8] . ' ' . $taulukko[7] . ' ' . $taulukko[6] . ' ' . $taulukko[5] . ' ' . $taulukko[4] . ' ' . $taulukko[3] . ' ' . $taulukko[2] . ' ' . $taulukko[1] . ' ' . $taulukko[0];
*/