<?php

    $adjs = array("funny", "smart", "talented", "nerdy", "gifted");
    $names = array("Ben", "Melissa", "Joe", "Matt", "Aman");
    
    $count = isset($_POST['num']) ? $_POST['num'] : 1;
    
    for ($i = 0; $i < $count; $i++) {
        $name = $names[rand(0, count($names)-1)];
        $adj = $adjs[rand(0, count($adjs)-1)];
        $result =  "<h3>$name is very $adj.</h3>";
        echo $result."<br>";
    }
