<html>
    <head>
        <meta charset="utf-8"></meta>
        <title>함수 학습_로또 추출기 제작</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script>
            var lotto_array = [Rand(1,45),Rand(1,45),Rand(1,45),Rand(1,45),Rand(1,45),Rand(1,45)];
            var timerId = null;
            function Rand(min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min)) + min;
            }
            function Start() {
                for(i = 0; i < 6; i++)
                {
                    lotto_array[i] = Rand(1, 45);
                    Auto_change_img(i,"num"+i);
                }
                timerId = setTimeout(Start, 10);
            }
            function sort()
            {
                for(i = 0; i < 6; i++)
                {
                    for(j = i; j < 6; j++)
                    {
                        if(lotto_array[i]>lotto_array[j])
                        {
                            temp = lotto_array[j];
                            lotto_array[j] = lotto_array[i];
                            lotto_array[i] = temp;
                        }
                    }
                }
            }
            function check_no() {
                for(i = 0; i < 6; i++)
                {
                    for(j = (i+1); j < 6; j++)
                    {
                        if(lotto_array[i]==lotto_array[j])
                        {
                            lotto_array[j] = Rand(1, 45);
                            j--;
                        }
                    }
                }
            }
            function Stop() {
                check_no();
                sort();
                for(i = 0; i < 6; i++)
                {
                    Auto_change_img(i,"num"+i);
                }
                clearTimeout(timerId);
            }
            function Auto_change_img(count,id_value){                
                var myNum = document.getElementById(id_value);
                str = "/img/lotto/ball_"+lotto_array[count]+".png";
                myNum.src = str;
                return count;
            }
        </script>
    </head>
    <body>
        <input type="button" value="start" onclick="Start()">
        <input type="button" value="stop" onclick="Stop()">
    </body>
    <div>
        <?php
            $rand_arry = array(rand(1,45),rand(1,45),rand(1,45),rand(1,45),rand(1,45),rand(1,45));
            check_no();
            sort_array();
            function sort_array()
            {
                global $rand_arry;
                for($i = 0; $i < count($rand_arry); $i++)
                {
                    for($j = $i; $j < count($rand_arry); $j++)
                    {
                        if($rand_arry[$i]>$rand_arry[$j])
                        {
                            $temp = $rand_arry[$j];
                            $rand_arry[$j] = $rand_arry[$i];
                            $rand_arry[$i] = $temp;
                        }
                    }
                }
            }
            function check_no() {
                global $rand_arry;
                for($i = 0; $i < count($rand_arry); $i++)
                {
                    for($j = ($i+1); $j < count($rand_arry); $j++)
                    {
                        if($rand_arry[$i]==$rand_arry[$j])
                        {
                            $rand_arry[$j] = rand(1, 45);
                            $j--;
                        }
                    }
                }
            }
            
            echo <<<END
            <img src="/img/lotto/ball_$rand_arry[0].png" width="100px" height="100px" id="num0">
            <img src="/img/lotto/ball_$rand_arry[1].png" width="100px" height="100px" id="num1">
            <img src="/img/lotto/ball_$rand_arry[2].png" width="100px" height="100px" id="num2">
            <img src="/img/lotto/ball_$rand_arry[3].png" width="100px" height="100px" id="num3">
            <img src="/img/lotto/ball_$rand_arry[4].png" width="100px" height="100px" id="num4">
            <img src="/img/lotto/ball_$rand_arry[5].png" width="100px" height="100px" id="num5">
END
        ?>
    </div>
</html>