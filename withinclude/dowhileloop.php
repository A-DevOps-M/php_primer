<?php 
    $title = 'Do-While Loop';
    include 'includes/header.php';  
?>

<h1><?php echo $title; ?></h1>
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
    
    <?php require 'includes/footer.php'; ?>