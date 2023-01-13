<?php

$myArray = ["janvier", "fevier", "mars", 'avril', "mai", 'juin', 'juillet', 'aout',' septembre', 'octobre', 'novembre', 'décembre'];


echo $myArray[2];
echo $myArray[5];

echo $myArray[7] = "Août";

$departments = array(
    "02" => "Aisne",
    "59" => "Nord",
    "60" => "Oise",
    "62" => "Pas-de-Calais",
    "80" => "Somme"
);

echo $departments["59"];
$departments["51"] = "Marne";


foreach ($myArray as $item){
    echo "<p>$item</p>";
}

foreach ($departments as $item => $val){
    echo "<p>$item . $val</p>";
}
