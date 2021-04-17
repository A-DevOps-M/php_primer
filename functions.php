<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Functions</title>
</head>
<body>
<h1>Functions</h1>
<?php
    echo '<h2>Defining a Function 1</h2>';
    echo '........................';
    function writeMessage(){
        echo 'You are amazing!';
    }

    echo '<h2>Calling the function 1</h2>';
    writeMessage();
    echo '<hr/>';



    echo '<h2>Defining a Function 2 with parameters</h2>';
    echo '........................';
    function addFunction($num1, $num2){
        return $num1 + $num2;
    }

    echo '<h2>Calling the function 2</h2>';
    echo addFunction(4, 4);
    echo '<hr/>';

?>
    
</body>
</html>