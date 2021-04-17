
<?php 
    $title = 'Home';
    include 'includes/header.php';  
?>
    <h1><?php echo $title; ?></h1>

    <h2>Hello From The Home Page</h2>



    <button type="button" class="btn btn-dark">Dark</button>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <a href="https://www.heroku.com" class="btn btn-danger" target="_blank">Heroku.com</a>

    <?php require 'includes/footer.php'; ?>