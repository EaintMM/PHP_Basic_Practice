<?php

    $title = 'Array';
    include 'includes/header.php';
    
?>
    <h1> ARRAY using</h1>
    <?php
        // a variable
        $num = 3;

        // an array
        $numbers = array(1,2,3,4,5,6,7,8,9);
        // can access the value in an array using index, index starts with 0
        echo '<p>The first element is : '. $numbers[0].   '</p>';
        echo $numbers[3];
        // array size
        $size = count($numbers);
        echo "<p>Array size is : " . $size.   "</p>";

        // looping through an array
        echo 'looping through an array ';
        for($count = 0; $count < $size; $count++){
            echo $numbers[$count]. " ";
        }

    require 'includes/footer.php'
?>