<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles.css">
    <title>About</title>
</head>
<body>
    <p style="color:darkblue;"><strong>warning!!!</strong> this website doesn't contain any <u>medical information</u>,
     it's just for learning purposes.</p>
        <div class="container" style="max-width: 600px; border-radius:15px; ">
            <h1 style="color:aliceblue;">Well Done</h1>
            <h2 style="color:aliceblue;">Your BMI is <?php echo($BMI->bmi) ?></h2>
            <p>
                <b><?php echo($BMI->weightStatus()); ?></b> <br>
                you want to <?php echo($user['fitnessGoal']); ?>, 
                so based on your activity level <?php echo($BMR->dailyRoutine($user)) ?>
            </p>
            <a href="/"><p class="list" >Take me back to HomePage</p></a>
    </div>
</body>
</html>