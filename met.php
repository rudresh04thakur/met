<?php
   
    $i = 100;
    $b = true;
    echo @$s . $i . $b;
    $ar = ["Ganesh",25];
    echo "<pre>";
    print_r($ar[0]);
    $ara = ["name"=>"Ganesh","age"=>25];
    echo "<pre>";
    print_r(@$ara['name']);
    echo "<br>";
    $c = 2;

    if($c > 10):
        echo "MET";
    elseif($c<5):
        echo "Nashik";
    else:
        echo "MH";
    endif;
    
    switch($c){
        case $c > 10:
            echo "MET";
            break;
        case $c < 5:
            echo "NASHIK";
            break;
        default:
            echo "MH";
            break;
    }

    for($i = 0; $i<10; $i++){
        echo "\n" . $i;
    }
    $n=0;
    while($n<3){
        echo $n++;
    }
    foreach($ar as $k){
        echo "\n" .$k;
    }
    echo $k;
        ?>