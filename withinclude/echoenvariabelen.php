<?php 
    $title = 'Echo Variabelen';
    include 'includes/header.php';  
?>


<h1><?php echo $title; ?></h1>

    <?php
        echo '<hr>';
        echo "<h2> Gebruiken van HTML-tags </h2>";
        echo 'new';
        echo '<br/>';
        echo 'user';
    ?>

    <!-- Variabelen -->
    <?php
        echo '<hr>';
        echo "<h2> Variabelen </h2>";
        $name = 'iets';
        echo '<br/>' . $name;
    ?>


    <?php require 'includes/footer.php'; ?>  