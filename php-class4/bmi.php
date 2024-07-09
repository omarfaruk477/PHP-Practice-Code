<?php


// 1 feet = 0.3048 meter

$weight = 130; // in kilograms
$height = 5.8; // in feet
$height_m = $height*0.3048; // in meter

// BMI Calculation
$bmi = $weight / (($height*0.3048) * ($height*0.3048));

echo "Weight: {$weight} kg<br>";
echo "Height: {$height_m} m<br>";
echo "Your BMI: {$bmi} <br>"; 

// Interpretation of BMI categories (just an example, you might use different thresholds)
if ($bmi < 16) {
    echo "Severe Thinness <br> Eat good nutritious food";
} elseif ($bmi > 16 && $bmi < 17) {
    echo "Moderate Thinness <br> Eat good nutritious food";
} elseif ($bmi >= 17 && $bmi <= 18.4) {
    echo "Mild Thinness <br> Eat good nutritious food";
} elseif ($bmi >= 18.5 && $bmi < 25) {
    echo "Normal <br> Your helth is good";
}elseif ($bmi >= 25 && $bmi < 30) {
    echo "Overweight <br> Need to exercise";
}elseif ($bmi >= 30 && $bmi < 35) {
    echo "Obese Class 1 <br> Exercise is very important";
}elseif ($bmi >= 35 && $bmi < 40) {
    echo "Obese Class 2 <br> You must have need to exercise";
}elseif ($bmi >= 40) {
    echo "Obese Class 3 <br> You must have need to exercise";
}else {
    echo "Obese Class 3*** <br> You must have need to exercise";
}

?>