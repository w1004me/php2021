<?php
    ini_set('display_errors', '0');
    $num = $_GET["num"];
    $count = $_GET["count"]+$num;
    echo <<<_END
<html>
    <head>
        <meta charset="utf-8"/>
        <title>세븐나이츠2 뽑기 확률 알아보기</title>
    </head>

    <body>
        <h2> 일회 또는 10연속 뽑기를 선택하세요.</h2>
        <button onclick="window.location.href='game_1.php?num=1&&count=$count'">1회뽑기</button>
        <button onclick="window.location.href='game_1.php?num=10&&count=$count'">10회뽑기</button>
    <body>
</html>
_END;
    echo "<br>시도횟수 : ",$count;
    if($num == 1)
    {
        $select_num = rand(0,100000)/1000;
        select_char($select_num);
    }
    else{
        for($i = 0; $i<$num;$i++)
        {
            $select_num = rand(0,100000)/1000;
            select_char($select_num);
        }
    }

    function select_char($select_num)
    {
        if($select_num>=0 && $select_num<=0.01)
        {
            echo '<p style="color:red">네스트라의 사도 세인<br>';
        }
        else if($select_num>0.01 && $select_num<=0.02)
        {
            echo '<p style="color:red">네스트라의 사도 밍<br>';
        }
        else if($select_num>0.02 && $select_num<=0.03)
        {
            echo '<p style="color:red">엘레나의 검 발데르<br>';
        }
        else if($select_num>0.03 && $select_num<=0.04)
        {
            echo '<p style="color:red">엘레나의 검 코제트<br>';
        }
        else if($select_num>0.04 && $select_num<=0.1133)
        {
            echo '<p style="color:red">포디나의 여제 아일린<br>';
        }
        else if($select_num>0.1133&& $select_num<=0.1866)
        {
            echo '<p style="color:red">절대 수호자 루디<br>';
        }
        else if($select_num>0.1866&& $select_num<=0.2599)
        {
            echo '<p style="color:red">파멸의 기사 델론즈<br>';
        }
        else if($select_num>0.2599&& $select_num<=0.3332)
        {
            echo '<p style="color:red">불멸의 화신 레이첼<br>';
        }
        else if($select_num>0.3332&& $select_num<=0.4065)
        {
            echo '<p style="color:red">차원의 인도자 연희<br>';
        }
        else if($select_num>0.4065&& $select_num<=0.4798)
        {
            echo '<p style="color:red">하얀 이리 에반<br>';
        }
        else if($select_num>0.4798&& $select_num<=0.5531)
        {
            echo '<p style="color:red">혹한의 폭군 스파이크<br>';
        }
        else if($select_num>0.5531&& $select_num<=0.6264)
        {
            echo '<p style="color:red">불멸의 여제 아일린<br>';
        }
        else if($select_num>0.6264&& $select_num<=0.6997)
        {
            echo '<p style="color:red">빛의 성녀 카린<br>';
        }
        else if($select_num>0.6997&& $select_num<=1.033)
        {
            echo '<p style="color:blue">네스트라의 사도 루키<br>';
        }
        else if($select_num>1.033&& $select_num<=1.3663)
        {
            echo '<p style="color:blue">네스트라의 사도 챙첸<br>';
        }
        else if($select_num>1.3663&& $select_num<=1.6996)
        {
            echo '<p style="color:blue">네스트라의 사도 멜리사<br>';
        }
        else if($select_num>1.6996&& $select_num<=2.0329)
        {
            echo '<p style="color:blue">엘레나의 검 렌<br>';
        }
        else if($select_num>2.0329&& $select_num<=2.3662)
        {
            echo '<p style="color:blue">엘레나의 검 앙리<br>';
        }
        else if($select_num>2.3662&& $select_num<=2.6995)
        {
            echo '<p style="color:blue">엘레나의 검 케이드<br>';
        }
        else if($select_num>2.6995&& $select_num<=3.2209)
        {
            echo '<p style="color:blue">흑화마검 세인<br>';
        }
        else if($select_num>3.2209&& $select_num<=3.7423)
        {
            echo '<p style="color:blue">마도 오토마타 코제트<br>';
        }
        else if($select_num>3.7423&& $select_num<=4.2637)
        {
            echo '<p style="color:blue">최후의 기사 발데르<br>';
        }
        else if($select_num>4.2637&& $select_num<=4.7851)
        {
            echo '<p style="color:blue">은둔자 루디<br>';
        }
        else if($select_num>4.7851&& $select_num<=5.3065)
        {
            echo '<p style="color:blue">영원의 뇌제 아일린<br>';
        }
        else if($select_num>5.3065&& $select_num<=5.8279)
        {
            echo '<p style="color:blue">새로운 자아 네오 델론즈<br>';
        }
        else if($select_num>=5.8279&& $select_num<=6.3493)
        {
            echo '<p style="color:blue">천상의 목소리 세레나<br>';
        }
        else if($select_num>6.3493&& $select_num<=6.8707)
        {
            echo '<p style="color:blue">모험가 샤이<br>';
        }
        else if($select_num>6.8707&& $select_num<=7.3921)
        {
            echo '<p style="color:blue">서큐버스 악동 밍<br>';
        }
        else if($select_num>7.3921&& $select_num<=7.9135)
        {
            echo '<p style="color:blue">혹한의 수호자 윈디고<br>';
        }
        else if($select_num>7.9135&& $select_num<=8.4349)
        {
            echo '<p style="color:blue">혁명의 수인 테온<br>';
        }
        else if($select_num>8.4349&& $select_num<=8.9563)
        {
            echo '<p style="color:blue">특급 해결사 캐스퍼<br>';
        }
        else if($select_num>8.9563&& $select_num<=9.4777)
        {
            echo '<p style="color:blue">영혼의 인도자 주주<br>';
        }
        else if($select_num>9.4777&& $select_num<=9.9991)
        {
            echo '<p style="color:blue">야성의 포효 이오타<br>';
        }
        else if($select_num>9.9991&& $select_num<=13.7491)
        {
            echo '<p style="color:green">로얄 블러드 아델<br>';
        }
        else if($select_num>13.7491&& $select_num<=17.4991)
        {
            echo '<p style="color:green">순백의 순찰자 클레어<br>';
        }
        else if($select_num>17.4991&& $select_num<=21.2491)
        {
            echo '<p style="color:green">검은 장미 미스 벨벳<br>';
        }
        else if($select_num>21.2491&& $select_num<=24.9991)
        {
            echo '<p style="color:green">악마 사냥군 스콧<br>';
        }
        else if($select_num>24.9991&& $select_num<=28.7491)
        {
            echo '<p style="color:green">강철의 요새 트리스탄<br>';
        }
        else if($select_num>28.7491&& $select_num<=32.4991)
        {
            echo '<p style="color:green">고통의 탐식자 앙리<br>';
        }
        else if($select_num>32.4991&& $select_num<=36.2491)
        {
            echo '<p style="color:green">연금술사 이안<br>';
        }
        else if($select_num>36.2491&& $select_num<=39.9991)
        {
            echo '<p style="color:green">마도 공학자 길라한<br>';
        }
        else if($select_num>39.9991&& $select_num<=51.9991)
        {
            echo '<p style="color:black">파동의 용아 챙첸<br>';
        }
        else if($select_num>51.9991&& $select_num<=63.9991)
        {
            echo '<p style="color:black">정예저나 케이드<br>';
        }
        else if($select_num>63.9991&& $select_num<=75.9991)
        {
            echo '<p style="color:black">빛의 순례자 멜리사<br>';
        }
        else if($select_num>75.9991&& $select_num<=87.9991)
        {
            echo '<p style="color:black">승부사 루키<br>';
        }
        else{
            echo '<p style="color:black">여명의 희망 렌<br>';
        }
    }
    
    
?>