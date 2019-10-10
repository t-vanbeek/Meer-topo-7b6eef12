<?php
/*
Nu je geslaagd bent voor de toets,
mag je nieuwe hoofdsteden toevoegen aan het programma. 
Welke landen en hoofdsteden ga jij toevoegen?

Zorg ervoor dat de gebruiker nieuwe landen en hoofdsteden toe kan voegen aan de associative array.
*/

$landen = array(["Land"],
                ["Hoofdstad"]);

echo "Hoeveel landen wil je toevoegen?" . PHP_EOL;
$aantalLanden = readline();

for ($telGetal = 1; $telGetal <= $aantalLanden; $telGetal++) {
    array_push($landen["Land"] = readline("Welk land wil je toevoegen?" . PHP_EOL));
    array_push($landen["Hoofdstad"] = readline("Wat is de hoofdstad van " . $landen["Land"] . "?" . PHP_EOL));
}
echo "De volgende landen zijn toegevoegd: ".PHP_EOL;
foreach ($landen as $land){
    echo $land . PHP_EOL;
}
array_
?>