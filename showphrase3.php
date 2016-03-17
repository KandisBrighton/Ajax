<?php
    $adjs = array("funny", "smart", "talented");
    $names = array("Ben", "Melissa", "Joe");
        
    if(isset($_POST['name']))
        $name = $_POST['name'];
    else
        $name = $names[rand(0, count($names)-1)];
    $adj = $adjs[rand(0, count($adjs)-1)];
    $phrase =  "<h3>$name is very $adj.</h3>";
    echo $phrase;
?>
