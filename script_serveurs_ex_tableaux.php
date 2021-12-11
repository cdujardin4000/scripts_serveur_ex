<?php
//1.Declarer des tableaux

function showTab($tab) {
    echo "<pre>.$tab.</pre>>";
}

$tabPoids = [76, 62.5, 45];
showTab($tabPoids);

$tabPrenoms = ['Cyril', 'Malaika', 'Abdel', 'Fritz'];
showTab($tabPrenoms);

$saisons = [1 => 'hiver', 2 => 'printemps', 5 => 'été', 6 => 'automne'];
showTab($saisons);

$infosDate = ['joursem' => 'lundi', 'jour' => 4, 'mois' => 'novembre', 'année' => 2013];
showTab($infosDate);

$tabJours = ['dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'];
showTab($tabJours);

$tabMois  = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
showTab($tabMois);

$dateComplet = ['weekday' => 'Monday', 'wday' => 1, 'mday' => 4, 'month' => 'novembre', 'mon' => 11, 'year' => 2013, 'hours' => 15, 'minutes' => 23, 'seconds' => 58];
showTab($dateComplet);

$infosPays = [
    'Belgique' => ['capitale' => 'Bruxelles', 'monnaie' => 'euro', 'superficie' => 30528, 'langues' => ['français', 'neerlandais', 'allemand']],
    'France' => ['capitale' => 'Paris', 'monnaie' => 'euro', 'superficie' => 675417, 'langues' => 'français'],
    'Japon' => ['capitale' => 'Tokio', 'monnaie' => 'yen', 'superficie' => 377915, 'langues' => 'japonais'],
    'Suisse' => ['capitale' => 'Berne', 'monnaie' => 'franc Suisse', 'superficie' => 41285, 'langues' => ['allemand', 'français', 'italien', 'romanche']],
];
showTab($infosPays);

//2.Afficher des tableaux

echo "<p>Affichez chaque poids du tableau tabPoids sur un paragraphe différent.</p>";

foreach ($tabPoids as $poid) {
    echo "<p>.$poid.</p>";
}

echo "<p>Affichez chaque poids du tableau tabPoids sur un paragraphe différent.</p>";

echo "<ul>";
foreach ($tabPrenoms as $prenom) {
    echo "<li>.$prenom.</li>";
}
echo "</ul>";

echo "<p>Affichez chaque poids du tableau tabPoids sur un paragraphe différent.</p>";

$lastNameIndex = count($tabPrenoms) - 1;
echo "<ul>";
for ($i = $lastNameIndex; $i = 0; $i--){
    echo $tabPrenoms[$i];
}
echo "</ul>";

echo "<p>Affichez les poids supérieur à 50.</p>";

$minCharge = 50;
foreach ($tabPoids as $poid) {
    if ($poid > $minCharge) {
        echo "<p>.$poid.</p>";
    }
}

echo "<p>Affichez un prénom sur deux sous forme de tableau à une colonne.</p>";

echo "<table><tr><th>Un prénom sur deux</th></tr>";
for ($i=0; $i<=$lastNameIndex; $i++){
    if (is_int($lastNameIndex/$i)){
        echo "<tr><td>.$tabPrenoms[$i].</td></tr>";
    }
}
echo "</table>";

echo "<p>Affichez chaque saison du tableau saisons séparés par une virgule et un espace</p>";

$returnString = "";
$format = ", ";
foreach ($saisons as $saison){
    $returnString += $saison;
    $returnString += $format;
}
echo "<p>.$returnString</p>";

