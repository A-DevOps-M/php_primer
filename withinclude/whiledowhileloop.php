<?php 
    $title = 'While Do-While Loop';
    include 'includes/header.php';  
?>


<h1><?php echo $title; ?></h1>

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


    <?php require 'includes/footer.php'; ?>