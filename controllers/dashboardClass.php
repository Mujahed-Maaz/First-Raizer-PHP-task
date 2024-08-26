<?php

class BMICalculation
{
    
    public $bmi;
    private $weightStatus;

    public function __construct($user)
    {
        $this->bmi = $user['weight']/($user['height']*$user['height']/10000);
    }
    
    
    
    public function weightStatus()
    {
        if ($this->bmi < 18.5)
        {
            $this->weightStatus = "Ooups! you are Underweight";
        }else if ($this->bmi <= 24.9)
        {
            $this->weightStatus = "Greate Job, you have a Healthy Weight";            
        }else if ($this->bmi <= 29.9)
        {
            $this->weightStatus = "Hmmm.. you are Overweight";
        }else   //if ($this->bmi >= 30)
        {
            $this->weightStatus = "You should make some excersises you have Obesity";
        }
        return $this->weightStatus;
    }
    
}

class BMRCalculation
{
    private $bmr;
    private $amr;
    public function __construct($user)
    {
        if($user['gener'] == 'male'){
            $this->bmr = 88.362 + (13.397 * $user['weight']) + (4.799 * $user['height']) - (5.677 * $user['age']);
        }else if($user['gener'] == 'female'){
            $this->bmr = 447.593 + (9.247 * $user['weight']) + (3.098 * $user['height']) - (4.330 * $user['age']);
        }
        
                    
    }

    public function dailyRoutine($user)
    {
        switch ($user['activityLevel']){
            case 'sedentary':
                $this->amr = ($this->bmr)*1.2;
                switch ($user['fitnessGoal']){
                    case 'lose weight':
                        echo 'if you want to lose weight throug diet, your daily calorie intake should be ';
                        echo($this->amr - 500);
                        break;
                        case 'maintain weight':
                            echo 'very well, you should do some excersise
                             to avoid gaining too much calories from food ';
                            break;
                            case 'gain muscle':
                                echo 'Add +300 to 1,000 calories throug some excercises ';
                                break;
                }
                break;
                case 'lightly':
                $this->amr = ($this->bmr)*1.375;
                switch ($user['fitnessGoal']){
                    case 'lose weight':
                        echo 'if you want to lose weight throug diet, your daily calorie intake should be ';
                        echo($this->amr - 500);
                        break;
                    case 'maintain weight':
                        echo 'very well, you should do more training and eat healthy food
                        to maintain your weight';
                        break;
                    case 'gain muscle':
                        echo 'Add +100 to 300 calories throug some excercises ';
                        break;
                }
                break;
                case 'moderately':
                    $this->amr = ($this->bmr)*1.55;
                    switch ($user['fitnessGoal']){
                        case 'lose weight':
                            echo 'if you want to lose weight throug diet, your daily calorie intake should be ';
                            echo($this->amr - 500);
                            break;
                        case 'maintain weight':
                            echo 'very well, you should keep training and eat healthy food
                            to maintain your weight';
                            break;
                        case 'gain muscle':
                            echo 'Add +100 to 300 calories throug some excercises ';
                            break;
                    }
                    break;
                    case 'active':
                        $this->amr = ($this->bmr)*1.725;
                        switch ($user['fitnessGoal']){
                            case 'lose weight':
                                echo 'if you want to lose weight throug diet, your daily calorie intake should be ';
                                echo($this->amr - 500);
                                break;
                            case 'maintain weight':
                                echo 'You are on a roll! keep training and eat healthy food
                                to maintain your weight';
                                break;
                            case 'gain muscle':
                                echo 'It should be easy to you, add +100 to 300 calories throug some excercises ';
                                break;
                        }
                break;
            }
        
    }
}
