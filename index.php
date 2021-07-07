<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th width="100">번호</th>
                    <th width="100">ID</th>
                    <th width="100">PW</th>
                    <th width="180">Phone</th>
                    <th width="100">date</th>
                    <th width="100">gender</th>
                    <th width="180">e-mail</th>
                </tr>
            </thead>
<?php 
    
    // login.php or db.php
    $db_hostname = '127.0.0.1';  //102.168.126.78  방화벽
    //$db_hostname = '192.168.31.41';
    $db_database = 'web_test'; //DB 이름 확인
    $db_username = 'root';
    $db_password = '1234';

    //$db_server = mysqli_connect('localhost', $db_username, $db_password, $db_database,3306);
    $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);
    if (!$db_server)
        echo "DB Server connect Error<br>";
    else
        echo "DB Server connect<br>";

    //select ex
    $Select = "SELECT * FROM member ";
    $result = mysqli_query($db_server, $Select);
    while($board = $result->fetch_array())
    {
        $m_no = $board['m_no'];
        $m_id = $board['m_id'];
        $m_pw = $board['m_pw'];
        $m_phone_num = $board['m_phone_num'];
        $m_date = $board['m_date'];
        $m_gender = $board['m_gender'];
        $m_email = $board['m_email'];
        echo <<<END
        <tbody>
            <tr>
                <td width="100">$m_no</td>    
                <td width="100">$m_id</td>
                <td width="100">$m_pw</td>
                <td width="180">$m_phone_num</td>
                <td width="100">$m_date</td>
                <td width="100">$m_gender</td>
                <td width="180">$m_email</td>
            </tr>
        </tbody>
END;
    }
    //insert ex
    $Insert = "INSERT INTO member (
        m_id,m_pw, m_phone_num,m_date, m_gender, m_email) VALUES (
        'id_test3','password','010-3456-3456','2021-07-07','남','test3@naver.com')";
    $result = mysqli_query($db_server, $Insert);
    if($result == false){
        echo mysqli_error($db_server);
    }
?>
        </table>
    </body>
</html>