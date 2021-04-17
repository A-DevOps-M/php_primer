<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Date Time Functions</title>
</head>
<body>
<h1>Date Time Functions</h1>
<?php
    echo '<h2>Current Date: </h2>';
    $datenow = getdate();
    echo "Today's Date: <br/>";
    echo sprintf("%02d", $datenow['mday']) . ' - '; // to add zero before single digit number
    echo sprintf("%02d", $datenow['mon']) . ' - ';
    echo $datenow['year'] . '<br/>';
    echo '<hr/>';


    echo '<h2>Current Date: </h2>';
    echo time();
    echo '<hr/>';
?>
    
</body>
</html>