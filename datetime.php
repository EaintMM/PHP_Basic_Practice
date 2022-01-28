<?php

    $title = 'Date and time';
    include 'includes/header.php';
    
?>
    <h1> Date and Time Manipulation </h1>
    <?php
        // current date with get date
        $datenow = getdate();
        echo $datenow['mday']. '<br>'; // the day of the month
        echo $datenow['mon']. '<br>'; //month 
        echo $datenow['year']. '<br>'; // year
        echo time(). '  time in seconds?<br>'; // time 
        // current date with date 
        print date('m/d/y'). "<br>";
    

    require 'includes/footer.php'
?>