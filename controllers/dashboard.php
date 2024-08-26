<?php

require 'dashboardClass.php';

$user = [
     'height' => $_POST['height'],
     'weight' => $_POST['weight'],
    'gener' => $_POST['gener'],
    'age' => $_POST['age'],
    'activityLevel' => $_POST['activityLevel'],
    'fitnessGoal' => $_POST['fitnessGoal']
];



$BMI = new BMICalculation($user);
$BMR = new BMRCalculation($user);
require 'view/dashboard.view.php';