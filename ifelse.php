<?php

    $title = 'If Else';
    include 'includes/header.php';
    
?>
    <?php
        // if statement
        echo '<h2> If Statement</h2>';

        $grade = 40;
        // comparison operators ==, >, <, >=, <=, ===
        if($grade >= 40){
            echo '<h3 style="color:green"> YOU PASSED </h3>';
        }
        else{
            echo '<h3 style="color:red"> YOU FAILED </h3>';
        }

        // if else
        $grade = 'A';
        if($grade == 'A'){
            echo '<h3 style="color:pink"> YOU are exceptional! </h3>';
        }
        elseif($grade == 'B'){
            echo '<h3 style="color:pink"> YOU are great! </h3>';
        }
        else{
            echo '<h3 style="color:red"> YOU FAILED </h3>';
        }
    ?>
<?php
    require 'includes/footer.php'
?>