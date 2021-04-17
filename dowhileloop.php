<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Do-while Loop</title>
</head>
<body>
<h1>Do-while Loop</h1>
<?php
    // Do-while Loop
    echo '<h2>Post-condition Loop</h2>';

    $grade = 10;
    $range = 10;
    do{
        echo "$grade is may be less than $range";
        $grade++;
    }while($grade < $range);


?>
    
</body>
</html>