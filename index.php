<?php

    $title = 'Main';
    include 'includes/header.php';
    
?>
    <!-- Basic HTML -->
    <h1> Hi there1 </h1>
    <?php
        //printint to HTml using echo
        echo 'Blah Blah blah';
        // You can print html tag using echo
        echo '<br>';
        echo 'Second line';
     ?>
     <br>
     <?php
        // declare variable
        $name = "Cool Guy";
        // printing variable
        echo $name;
        // printing dynamic variable mixing with html tag
        echo '<h1>My name is ' .$name. '</h1>';
     ?>
<?php
    require 'includes/footer.php'
?>