<?php 
    $title = 'Date Time Functions';
    include 'includes/header.php';  
?>

<h1><?php echo $title; ?></h1>
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
    

    <?php require 'includes/footer.php'; ?>