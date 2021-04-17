<?php 
    $title = 'If Statements';
    include 'includes/header.php';  
?>


<h1><?php echo $title; ?></h1>
<?php
    $grade = 50;

    if ($grade >= 50) {
        echo '<h3 style="color: green">You have passed</h3>';
    } else {
        echo '<h3 style="color: red">You have failed</h3>';
    }

    $grade = 'A';

    if($grade == 'A' && $grade == 50){
        echo '<h2>You are a superstar</h2>';
    } elseif ($grade == 'B') {
        echo '<h2>You did well!</h2>';
    } else {
        echo '<h2>You are failed........</h2>';
    }

?>    

    <?php require 'includes/footer.php'; ?>