



// $height = 5.8;
// $weight = 73;
// $bmi = $weight / ($height * $height);

// echo "{$bmi}";



<?php

function calculateBMI($weight_kg, $height_m) {
    // BMI formula: weight (kg) / (height (m) * height (m))
    $bmi = $weight_kg / ($height_m * $height_m);
    return $bmi;
}

// Example usage:
$weight = 70; // in kilograms
$height = 1.75; // in meters

$bmi = calculateBMI($weight, $height);

echo "Weight: {$weight} kg<br>";
echo "Height: {$height} m<br>";
echo "BMI: " . number_format($bmi, 1); // Display BMI rounded to 1 decimal place

// Interpretation of BMI categories (just an example, you might use different thresholds):
if ($bmi < 18.5) {
    echo " (Underweight)";
} elseif ($bmi >= 18.5 && $bmi < 25) {
    echo " (Normal weight)";
} elseif ($bmi >= 25 && $bmi < 30) {
    echo " (Overweight)";
} else {
    echo " (Obese)";
}

?>
