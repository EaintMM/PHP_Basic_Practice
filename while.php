<?php

    $title = 'while loop';
    include 'includes/header.php';
    
?>
    <h1> While loop</h1>
    <?php
    // while loop testing
    // pre condition loop
    $grade = 3;
        while($grade < 10){
            echo 'Grade is '.$grade. ' , less than 10<br>';
            $grade++;
        }
        echo '<h3>You have reached 10</h3>';
    ?>
    <h1> do-while</h1>
    <?php
        // do-while testing
        // post condition loop
        $grade = 10; // change here to see the difference
        do{
            echo '<p> I am a do-while</p>';
            $grade++;
        } while($grade<10);
    ?>
<?php
    require 'includes/footer.php'
?>