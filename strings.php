<?php

    $title = 'Strings';
    include 'includes/header.php';
    
?>
    <h1> String manipulation </h1>
    <?php
        // strings
        $txt1 = "Hey, what's up?";
        $txt2 = "Great!";
        echo $txt1;
        echo $txt2;
        echo "<br>";
        // concatenation
        echo $txt1 . " join " . $txt2;
        // string transformatin
        $name = 'oliver rodrigo';
        echo '<br>Uppercase first letter : '. ucfirst($name); // Oliver rodrigo
        echo '<br> Capatalize : ' . ucwords($name); // Oliver Rodrigo
        echo '<br> All uppercase : ' . strtoupper($name); // OLIVER RODRIGO
        echo '<br> lower case : ' . strtolower('JUNG HAEIN');
        echo '<hr>';
        echo 'Repeat string : ' . str_repeat(' Love you <br>' ,5). '<br>';
        // sub string
        echo '<br>Substring of vegetables : ' . substr('vegetables', 0 , 4);
        echo '<br> Get a string position of e in vege : '. strpos('vege','e');
        echo '<br> string length in love : '. strlen('love');
        // trimming trim('bla'), ltrim('bla'),rtrim('bla')
        // replace string
        echo '<br> Replace jung with lee : ' . str_replace('jung','lee','jung hae in');
    ?>
    
    <?php
    require 'includes/footer.php'
?>