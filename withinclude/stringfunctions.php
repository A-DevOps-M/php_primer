<?php 
    $title = 'String Functions';
    include 'includes/header.php';  
?>


<h1><?php echo $title; ?></h1>
<?php
    $phrase1 = "student who came late";
    $phrase2 = "in class stand with Rock";

    echo 'Concatenation: <br/>';
    echo $phrase1 . ' ' . $phrase2;
    echo '<hr/>';

    echo 'String Transformation: <br/>';
    $name = 'naam';
    echo 'Uper Case First: ' . ucfirst($name);
    echo '<hr/>';

    echo 'String Transformation: <br/>';
    $zin = 'Het is lekker vandaag';
    echo 'Elk woord in de zin begint met hoofdletter: ' . ucwords($zin);
    echo '<hr/>';

    echo 'String Transformation: <br/>';
    $zin = 'PHP moet je leren';
    echo 'Alle letters in hoofdletter: ' . strtoupper($zin) . '<br/>';
    echo 'Alle letters in kleinletter: ' . strtolower($zin);
    echo '<hr/>';

    echo 'String Transformation: <br/>';
    $herhalen = 'php';
    echo 'Repeat String: ' . str_repeat($herhalen, 5) . '<br/>';
    echo 'Repeat String in hoofdletter: ' . strtoupper(str_repeat($herhalen, 5)) . '<br/>';
    echo '<hr/>';

    echo 'String Transformation: <br/>';
    $tekst = 'php is my love';
    echo 'Substring: ' . substr($tekst, 7, 13) . '<br/>';
    echo 'Substring: ' . strtoupper(substr($tekst, 7, 13)) . '<br/>';
    echo '<hr/>';

    echo 'String Transformation: <br/>';
    $tekst = 'php is my love';
    echo 'Get position of string: ' . strpos($tekst, 'p') . '<br/>';
    echo '<hr/>';

    echo 'String Transformation: <br/>';
    $tekst = 'php is my love';
    echo 'Find Character: ' . strpos($tekst, 'v') . '<br/>';
    echo '<hr/>';

    echo 'String Transformation: <br/>';
    $tekst = 'php is my love';
    echo 'Length of the string: ' . strlen($tekst) . '<br/>';
    echo '<hr/>';


    echo 'String Transformation:  Trim Functions<br/>';
    echo 'Without Trim: ' . "A" . " B C D " . "E" . '<br/>';
    echo 'Trim spaces on both sides: ' . "A" . trim(" B C D ") . "E" . '<br/>';
    echo 'Trim spaces on the left: ' . "A" . ltrim(" B C D ") . "E" . '<br/>';
    echo 'Trim spaces on the right: ' . "A" . rtrim(" B C D ") . "E" . '<br/>';
    echo '<hr/>';

    echo 'String Transformation:  Replace String with another<br/>';
    $origineel = "PHP is leuk";
    $vervanger = "Java";
    echo ' Replace string with another: ' . str_replace("PHP", $vervanger, $origineel);
    echo '<hr/>';
?>
    

    <?php require 'includes/footer.php'; ?>