<?php

    $title = 'for loop';
    include 'includes/header.php';
    
?>
    <h1> For loop </h1>
    <?php
        //for loop
        for($count=0; $count<10; $count++){
            echo 'hi '.$count.'<br>';
        }
    ?>
    
    <?php
    require 'includes/footer.php'
?>