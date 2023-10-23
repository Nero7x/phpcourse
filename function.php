<?php

    function add($x, $y){
        return $x + $y;
    }
    
    echo add(10, 25);
    echo "<br>";

    function hello($x){
        $user = $x;
        if($user === "Ali"){
        echo "Hello " . $user;
        }else{
            echo "Bye " . $user;
        }

    }

    hello("Anas");
    echo "<br>";
    hello("Ali");
?>