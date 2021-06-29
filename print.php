<?php
    $num = $_POST['num'];
    echo "<h1>입력 받은 숫자 ",$num,"<br></h1>";
    echo "<h2><pre>";
    for($count = 0; $count <$num; $count++)
    {
        for($subcount = 1; $subcount<($num-$count);$subcount++)
        {
            echo " ";
        }
        for($subcount = 0; $subcount<=(($count*2));$subcount++)
        {
            echo "*";
        }
        echo "<br>";
    }
    for($count = 0; $count <$num-1; $count++)
    {
        for($subcount = 0; $subcount<=$count;$subcount++)
        {
            echo " ";
        }
        for($subcount = 0; $subcount<=($num-($count*2)+1);$subcount++)
        {
            echo "*";
        }
        echo "<br>";
    }
    echo "</pre></h2>";
?>