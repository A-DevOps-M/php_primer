<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While Do-While Loop</title>
</head>
<body>
<h1>While Do-While Loop (zie: effect op variabelen)</h1>

<h2>While Loop</h2>
<?php
    // While Loop
    $grade = 0;
    $range = 10;
    while($grade < $range){
        echo "<p>$grade is less than $range</p>";
        $grade++;
    }


?>

<h2>Do-while Loop</h2>
<?php
    // Do-while Loop
    // De waarde van $grade = 10 hier
    do{
        echo "$grade is may be less than $range";
        $grade++;
        // De waarde van $grade = 11 hier
    }while($grade < $range);


?>
    
</body>
</html>