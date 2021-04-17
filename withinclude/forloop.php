<?php 
    $title = 'For Loop';
    include 'includes/header.php';  
?>


<h1><?php echo $title; ?></h1>

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
    

    <?php require 'includes/footer.php'; ?>