<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>BMI & MBR calculator</title>
</head>
<style>
body
{
    list-style: none;
    padding: 50px;
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(216, 216, 216);
}

a{
    color: whitesmoke;
    text-decoration-line: none;
}

.container
{
    background-color: rgb(0, 33, 61);
    border-radius: 0 0 15px 15px;
    max-width: 600px;
    margin:0 auto;
    padding: 50px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    text-decoration: dashed;    
}

.form-group
{
    margin-bottom: 30px;
}
</style>
<body>
    <div class="container"  style="font-size:large; border-radius:  15px 15px 0 0; text-align: center;">
        <h1 style="color:aliceblue;">Welcome to the daily calorie calculator</h1>
    </div>
    <div class="container" style="max-width: 600px; ">
        <form method="post" action="/dashboard">
            <div class="form-group">
                <input class="form-control" type="text"  name="name" placeholder="Name:" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="age" placeholder="Age:" required>
            </div>
            <div class="form-group">
                <label for="gener" style="padding-bottom: 10px;">Gender:</label>
                <select name="gener" class="form-control" required>
                    <option value="NA">Select</option>    
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select> 
            </div>
            <div class="form-group">
                <input class="form-control" type="number"  name="height" placeholder="Height (cm):" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="weight" placeholder="Weight (kg):" required>
            </div>
            <div class="form-group">
                <label for="activityLevel" style="padding-bottom: 10px;">Activity Level:</label>
                <select name="activityLevel" class="form-control" required>
                    <option value="">Select</option>
                    <option value="sedentary">Sedentary</option>
                    <option value="lightly">Lightly Active</option>
                    <option value="moderately">Moderately Active</option>
                    <option value="active">Very Active</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fitnessGoal" style="padding-bottom: 10px;">Fitness Goal:</label>
                <select name="fitnessGoal" class="form-control">
                    <option value="">Select</option>
                    <option value="lose weight">Lose Weight</option>
                    <option value="maintain weight">Maintain Weight</option>
                    <option value="gain muscle">Gain Muscle</option>
                </select>
            </div>
            <div class="form-btn">
                <button type="submit" class="btn btn-primary" style="background-color: rgb(255, 115, 0);" >Submit</button>
            </div>
        </form>
    </div>
</body>
</html>