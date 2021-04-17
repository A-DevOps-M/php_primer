<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While Loop</title>
</head>
<body>
<h1>While Loop</h1>
<?php
    // While Loop
    echo '<h2>Pre-condition Loop</h2>';

    $grade = 0;
    $range = 10;
    while($grade < $range){
        echo "<p>$grade is less than $range</p>";
        $grade++;
    }


?>
    
</body>
</html>