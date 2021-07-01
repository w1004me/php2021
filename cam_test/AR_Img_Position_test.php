<html>
    <head>
        <meta charset="utf-8"/>
        <title>web cam connection test</title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script type="text/javascript">
            
            if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true}).then(function(stream) {
                    var video = document.getElementById('video');
                    video.srcObject = stream;
                    video.play();
                });
            }
            var video = document.getElementById('video');

            $(function(){                
                $(".img_1").mouseover(function()
                {
                    $(".img_1").attr("src",$(".img_1").attr("src").replace("0.png","1.png"));
                });
                
                $(".img_1").mouseout(function()
                {
                    $(this).attr("src",$(this).attr("src").replace("1.png","0.png"));
                });
            });


            $(document).ready(function(){
                $('.img_1').draggable();
            });
        </script>
        <style>
            .video_absolute
            {
                position: absolute;
                top:0px;
                left:0px;
                z-index: 2;
            }
        </style>
    </head>
    <body>
        <video id="video" width="100%" height="100%" controls="true" autoplay></video>
        <script>
            setInterval(function()
            {
                var x_pos = Math.floor(Math.random() * 1024);
                var y_pos = Math.floor(Math.random() * 350);
                var change_tag = 
                    '<img class="img_1" style="z-index: 5; position:absolute; top:'+y_pos+'px; left:'+x_pos+'px;" src="./img/event_0.png" width="100" height="200" draggable="ture">'
                $("#run_php").html(change_tag);
            }, 2000 );
        </script>
        <div id="run_php">
            <?php 
                $x_pos = rand(100,1024);
                $y_pos = rand(0,350); 
                echo "<img class=\"img_1\" style=\"z-index: 5; position:absolute; top:",$y_pos,"px",";left:",$x_pos,"px;\" src=\"./img/event_0.png\" width=\"100\" height=\"200\" draggable=\"ture\">";
            ?>
        </div>
    </body>
</html>