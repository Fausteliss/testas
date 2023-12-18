<?php

//kintamieji
$prev = 0;
$current = 1;
$sum = 1;
$last = 0;

//spausdinimas
echo "$last<br>";
echo "$sum<br>";


while ($last < 1000000) { //sukamas ciklas kol suma bus mazesne nei 1000000
    $next = $prev + $current; //apskaiciuojamas sekanti suma
    $sum += $next; // pridedama nauja suma
    $prev = $current; //ansktesniam elemento reiksmei priskiriama dabartine elemento reiksme
    $current = $next; // dabartiniui elementui priskiriama dabartine reiksme
    $last = $next; // elementui priskiriama nauja apskaiciuota elemento reiksme

    echo "$next<br>";
}

//spausdinimas
echo "<br>Paskutinio elemento reikšmė: " . $last;
echo "<br>Visų elementų suma: " . $sum;

?>