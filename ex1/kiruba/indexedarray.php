<?php
    $numbers = array(10,20,30,40);

    // for ($i=0; $i<count($numbers); $i++)
    // {
    //     echo "numbers[$i] = $numbers[$i] \n";
    // }

    $i = count($numbers)-1;
    while($i >= 0)
    {
        echo "numbers[$i] = $numbers[$i] \n";
        $i--;
    }
    
?>