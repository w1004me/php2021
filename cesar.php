<html>
    <head>
        <meta charset="utf-8"/>
        <title>if,case 연습</title>
    </head>

    <body>
        <h1> 원 문장을 입력하세요.</h1>
        <form method="POST" action="cesar.php">
            원 문장: <input type="text" name="ori_str"/><br/>
            <input type="submit" name="submit"/>
        </form>
    <body>
</html>

<?php
    $str_eng = array('a','b','c','d','e','f','g','h','i','j','k','l'
    ,'m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    $input_str = $_POST['ori_str'];

    for($chr = 0; $chr<=strlen($input_str); $chr++)
    {
        echo "test : ",substr($input_str,$chr,1 )," -> ";
        if(substr($input_str,$chr,1 ) != " ")
        {
            for($i = 0; $i < count($str_eng);$i++)
            {
                if(substr($input_str,$chr,1 ) == $str_eng[$i])
                {
                    if($i >= 23)
                    {
                        echo $str_eng[($i-23)],"<br>";
                    }else{
                        echo $str_eng[$i+3],"<br>";
                    }
                }
            }
        }
        else{
            echo "<br>";
        }   
    }
?>