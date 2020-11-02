<?php
$taulukko1 = ['A', 'B', 'C' , 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K'];
$taulukko2 = ['K', 'J', 'I' , 'H', 'G', 'F', 'E', 'D', 'C', 'B', 'A'];
$arrlength = count($taulukko1);

for ($x = 0; $x < $arrlength; $x++) {
    echo $taulukko1[$x];
    echo ' ';
}
echo '<br>';
for ($x = 0; $x < $arrlength; $x++) {
    echo $taulukko2[$x];
    echo ' ';
}


// Ensimmäinen versio
/*
echo $taulukko[0] . ' ' . $taulukko[1] . ' ' . $taulukko[2] . ' ' . $taulukko[3] . ' ' . $taulukko[4] . ' ' . $taulukko[5] . ' ' . $taulukko[6] . ' ' . $taulukko[7] . ' ' . $taulukko[8] . ' ' . $taulukko[9] . ' ' . $taulukko[10] . ' ' . $taulukko[11] . '<br>' .  $taulukko[11] . ' ' . $taulukko[10] . ' ' . $taulukko[9] . ' ' . $taulukko[8] . ' ' . $taulukko[7] . ' ' . $taulukko[6] . ' ' . $taulukko[5] . ' ' . $taulukko[4] . ' ' . $taulukko[3] . ' ' . $taulukko[2] . ' ' . $taulukko[1] . ' ' . $taulukko[0];
*/