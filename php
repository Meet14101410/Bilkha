<?php
$bilkha = [
    "village_name" => "Bilkha",
    "district" => "Junagadh",
    "taluka" => "Junagadh",
    "spirituality" => "Bilkheshwar Mahadev Temple",
    "pincode" => 362110
];

echo "<h2>Profile of " . $bilkha['village_name'] . "</h2>";
echo "<ul>";
foreach ($bilkha as $key => $value) {
    echo "<li>" . str_replace("_", " ", ucfirst($key)) . ": " . $value . "</li>";
}
echo "</ul>";
?>
