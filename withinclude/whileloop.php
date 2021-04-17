<?php 
    $title = 'While Loop';
    include 'includes/header.php';  
?>


<h1><?php echo $title; ?></h1>
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
    

    <?php require 'includes/footer.php'; ?>