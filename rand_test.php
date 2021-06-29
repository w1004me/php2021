<html>
    <head>
        <meta charset="utf-8"/>
        <title>if,case 연습</title>
    </head>

    <body>
        <h1> 수입을 입력하세요.</h1>
        <form method="POST" action="rand_test.php">
            홍보를 하지 않을 경우의 수입: <input type="text" name="non_promotion_profit"/><br/>
            홍보를 할 경우의 수입: <input type="text" name="promotion_profit"/><br/>
            홍보 비용: <input type="text" name="promotion_price"/><br/>
            <input type="submit" name="submit"/>
        </form>
    <body>
</html>

<?php
    $non_promotion_profit = $_POST['non_promotion_profit'];
    $promotion_profit = $_POST['promotion_profit'];
    $promotion_price = $_POST['promotion_price'];

    $profit_1 = $non_promotion_profit;
    $profit_2 = $promotion_profit-$promotion_price;

    echo "홍보 비용 : ",$promotion_price,"<br>";
    echo "홍보시 수입 : ",$promotion_profit,"<br>";
    echo "비홍보시 수입 : ",$non_promotion_profit,"<br>";

    if($profit_1 > $profit_2)
    {
        echo "홍보를 수행하지 않을 경우 ",$profit_1-$profit_2,"만큼의 이득 존재";
        echo "do not advertise<br>";
    }
    elseif($profit_2 > $profit_1)
    {
        echo "홍보를 수행할 경우 ",$profit_2-$profit_1,"만큼의 이득 존재";
        echo "advertise<br>";
    }
    else{
        echo "홍보를 하거나 않하거나 같은 이득 존재";
        echo "does not matter";
    }
?>