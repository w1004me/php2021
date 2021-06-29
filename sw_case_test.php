<html>
    <head>
        <meta charset="utf-8"/>
        <title> switch case 연습</title>
    </head>

    <body>
        <h1> 월을 입력하세요.</h1>
        <form method="POST" action="sw_case_test.php">
            월 입력: <input type="text" name="month"/><br/>
            <input type="submit" name="submit"/>
        </form>
    <body>
</html>

<?php
    $month = $_POST['month'];

    switch($month)
    {
        case 3:
        case 4:
        case 5:
            printf("%s는 spring 입니다.<br>",$month);
            break;
        case 6:
        case 7:
        case 8:
            printf("%s는 summer 입니다.<br>",$month);
            break;
        case 9:
        case 10:
        case 11:
            printf("%s는 fall 입니다.<br>",$month);
            break;
        case 12:
        case 1:
        case 2:
            printf("%s는 winter 입니다.<br>",$month);
            break;
    }
?>