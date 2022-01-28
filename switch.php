<?php

    $title = 'switch';
    include 'includes/header.php';
    

        $grade = 'A';

        switch($grade){
            case 'A':
                echo '<h3 style="color:blue"> YOU are exceptional! </h3>';
                break;
            case 'B':
                echo '<h3 style="color:pink"> YOU are great! </h3>';
                break;
            default:
            echo '<h3 style="color:red"> YOU FAILED </h3>';
        }



    require 'includes/footer.php'
?>