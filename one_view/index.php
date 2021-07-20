<html>
    <head>
        <meta content="width=device-width, initial-scale=1">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script src="/one_view/js/jquery.fullscreen-min.js"></script>
        <script type="text/javascript">
            $(function() {
                $(document).bind("fullscreenchange", function(e) {
                    console.log("Full screen changed.");
                    $("#status").text($(document).fullScreen() ? 
                        "Full screen enabled" : "Full screen disabled");
                    });
            });
        </script>
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
        <script>
            function next_page()
            {
                $(function(){ $(".txt_inner").load("/one_view/contents/test1.php"); });
            }
            
        </script>
        <style>
            body {
                margin: 0;
            }
            .container {
                width: 100vw;
                height: 100vh;
                background: white;
            }
            .btn_inner {
                position: absolute;
                left: 50%;
                top: 30%;
                transform: translateX(-50%);
            }
            .img_inner {
                position: absolute;
                left: 50%;
                top: 40%;
                transform: translateX(-50%);
            }
            .txt_inner {
                position: absolute;
                left: 50%;
                top: 60%;
                transform: translateX(-50%);
            }
            .btn_location {
                position: absolute;
                left: 87%;
                top: 90%;
            }
            .btn-right {
                text-decoration: none;
                font-family: "Malgun Gothic", "맑은 고딕", dotum, "돋움", sans-serif;
                position: relative;
                font-weight: 300;
                font-size: 20px;
                letter-spacing: -0.03em;
                display: inline-block;
                color: #fff;
                background-color: rgba(0, 121, 240);
                padding: 0.9em 2.8em 0.9em 2.25em;
            }

            .arrow-right {
                position: absolute;
                display: inline-block;
                width: 0;
                height: 0;
                border-top: 8px solid transparent;
                border-right: 8px solid transparent;
                border-bottom: 8px solid transparent;
                border-left: 8px solid white;
                margin-top: 8px;
                margin-left: 9px;
                animation: horizontal 0.7s ease-in-out infinite;
            }

            @keyframes horizontal {
                0% {
                    margin-left: 9px;
                }
                50% {
                    margin-left: 11px;
                }
                100% {
                    margin-left: 9px;
                }
            }
        </style>
    </head>
    <body style="background:white">
        <div class="container" ondblclick="$(document).fullScreen(true)">
            <div class="inner">
                <div class="btn_inner">
                    <input type="button" value="start" onclick="Start()">
                    <input type="button" value="stop" onclick="Stop()">
                </div>
                <div class="img_inner">
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
            <div class="txt_inner">
                    <h1>        
                    ID : w1004mesmg<br>
                    pw: sunmoons1s2s3!<br>
                    path: mp/&#60;your initial ex: jmh&#62;/<br>
                    </h1>  
            </div>
        </div>
        <div class="btn_location">
        
            <a href="#" onclick="next_page();"class="btn-right">
                다음페이지
                <span class="arrow-right"></span>
            </a>
        </div>
        
    </body>
</html>


<?php

?>