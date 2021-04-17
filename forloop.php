<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - For Loops</title>
</head>
<body>
<h1 style="color: #00FF55;">For Loops</h1>

<?php
    // For Loops
    echo '<h2>For Loop 1</h2>';
    for($count = 0; $count < 10; $count++) {
        echo '<p>Hello world</p>';
    }

    echo '<hr>';
    
    echo '<h2>For Loop 2</h2>';
    for($count = 0; $count < 10; $count++){
        echo "<p> The count is: $count </p>";
    }

?>
    
</body>
</html>