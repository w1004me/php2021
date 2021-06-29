<?php
    $num = 2;
    $count = 1;
    $end = 5;
    while($num<=$end)
    {
        if($count == 1)
            echo $num,"단<br>";    
        echo $num," x ",$count," = ", $num*$count,"<br>";
        $count++;
        if($count == 10)
        {
            $num++;    
            $count = 1;
            echo "<br>";
        }
    }
    $num = 13;
    do{
        echo "10보다 작거나 같아요!! : ",$num,"<br>";
        $num++;
    }
    while($num<=10);
    echo "10보다 커요!! : ",$num,"<br>";

?>