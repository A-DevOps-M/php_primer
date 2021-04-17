<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch Statement</title>
</head>
<body>
<?php
    echo '<h2>Switch Statement</h2>';

    $grade = 'A';
    switch($grade){
        case 'A':
            echo '<h2>You are a superstar</h2>';
            break;
        case 'B':
            echo '<h2>You did well!</h2>';
            break;
        default:
        echo '<h2>You are failed</h2>';
        break;
    }


?>
    
</body>
</html>