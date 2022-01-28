<?php

    $title = 'Functions';
    include 'includes/header.php';
    
?>
    <h1> Functions </h1>
    <?php
        // defining a function
        function message(){
            echo "Hi I'm user defined function.<br>";
        }
        // calling a function
        message();


        // functions with parameters
        function addFunction($n1,$n2){
            $sum = $n1 + $n2;
            echo"<br>The sum of " . $n1 . ' and ' . $n2 . ' is '. $sum;
        }

        addFunction(3,5);
        addFunction(30,'50');
        addFunction('3','4');

        // parameter pass by reference using &
        function changeNum(&$num){
            $num += 10;
        }
        $num = 200;
        changeNum($num);
        echo '<br>'.$num.'<br>';

        // returning a value
        function returnProduct($n1,$n2){
            return $n1 * $n2;
        }
        echo returnProduct(4,5);
    ?>
    
    <?php
    require 'includes/footer.php'
?>