<?php 
    $title = 'Array';
    include 'includes/header.php';  
?>


<h1><?php echo $title; ?></h1>
<?php
    // An array contains only one datatype
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $numbers1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    echo 'Element one of the first array is: ' . $numbers[0] . '<br/>';
    echo 'Element one of the second array is: ' . $numbers1[0] . '<br/>';

    $size = count($numbers);
    echo "Aantal elementen in array: $size";

    echo '<hr>';
    echo '<h2>Druk alle elementen af m.b.v. For Loop </h2>';
    for($count = 0; $count < $size; $count++){
        echo "<p>numbers[$count]</p>";
    }

    echo '<hr>';
    echo '<h2>Druk alle elementen af m.b.v. Foreach Loop </h2>';
    foreach($numbers as $number){
        echo "<p>$number</p>";
    }


?>

<?php require 'includes/footer.php'; ?>