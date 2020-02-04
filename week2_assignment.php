<?php
    // check to see if array has been set
   if (isset($_GET['firstName'], $_GET['lastName'], $_GET['age'])){
        // assign variables to the $GET 
        $firstName = $_GET['firstName'];
        $lastName = $_GET['lastName']; 
        $age = $_GET['age'];
        // create variable for first and last name
        $name = $firstName . ' ' . $lastName;

        echo 'Hello, my name is ' . $name .'.';
        // conditional of age 
        if ($age >= 18){
            echo ' I am ' . $age .' years old and I am old enough to vote in the United States.';
        }else if($age < 18){
            echo ' I am ' . $age . ' years old and I am not old enough to vote in the United States.';
        }

   }
   
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Week 2 Assignment</title>
</head>
<body>
<form method="GET" action= "week2_assignment.php">

<br>
        <div>
            <label for="">First Name: </label>
            <input type="text" name = "firstName">
        </div>
<br>
        <div>
            <label for="">Last Name: </label>
            <input type="text" name= "lastName">
        </div>
<br>
        <div>
            <label for="">Age: </label>
            <input type="text" name= "age">
        </div>
 <br>
    <input type="submit" value= "Submit">
</form>


</body>
</html>