<html>
    <head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script>
            function get_page_data()
            {
                var data = $("#page_no").val();
                $.ajax({
                    url: '/api_xml/php/get_api.php',
                    type: 'GET', //통신 방식을 지정합니다
                    data: {data:data},
                    dataType: 'xml',//서버로부터 받을 데이터 타입을 입력합니다.
                    success: function (msg) { // 통신 성공시 호출해야할 함수
                        var infoList = ``;
                        $(msg).find('item').each(function(index, item){
                            infoList += `
                                <tr>
                                    <td>${$(this).find('cityCode').text()}</td>
                                    <td>${$(this).find('cityEng').text()}</td>
                                    <td>${$(this).find('cityKor').text()}</td>
                                </tr>
                            `;
                            $('#info').empty().append(infoList);
                            $('tr:first').css('background', 'darkgray').css('color', 'white')
                        });//end each
                    },
                    error: function (xhr, status, msg) { // 통신 실패시 호출해야하는 함수
                        console.log('상태값 : ' + status + ' Http에러메시지 : ' + msg);
                        document.write('상태값 : ' + status + '<br> Http에러메시지 : ' + msg);
                    },
                });
            }
            var page_no = 1;
            function get_city_data()
            {
                var data = $("#city_name").val();
                $.ajax({
                    url: '/api_xml/php/get_api.php',
                    type: 'GET', //통신 방식을 지정합니다
                    data: {data:page_no},
                    dataType: 'xml',//서버로부터 받을 데이터 타입을 입력합니다.
                    success: function (msg) { // 통신 성공시 호출해야할 함수
                        var infoList = ``;
                        var count = 0;
                        $(msg).find('item').each(function(index, item){
                            if($(this).find('cityKor').text()==data)
                            {
                                infoList += `
                                    <tr>
                                        <td>${$(this).find('cityCode').text()}</td>
                                        <td>${$(this).find('cityEng').text()}</td>
                                        <td>${$(this).find('cityKor').text()}</td>
                                    </tr>
                                `;
                            }
                            else{
                                if(count == 9 && page_no <= 95)
                                {
                                    page_no++;
                                    //alert($(this).find('cityKor').text());
                                    get_city_data();
                                }
                                else{
                                    count++;
                                }
                            }
                            
                            $('#info').empty().append(infoList);
                            $('tr:first').css('background', 'darkgray').css('color', 'white')
                        });//end each
                    },
                    error: function (xhr, status, msg) { // 통신 실패시 호출해야하는 함수
                        console.log('상태값 : ' + status + ' Http에러메시지 : ' + msg);
                        document.write('상태값 : ' + status + '<br> Http에러메시지 : ' + msg);
                    },
                });
            }
        </script>
    <head>
    <body>
        <h3>공공데이터 XML 파싱</h3>
            <input type="text" id="page_no"/>
            <input type="button" value="page send" onclick="get_page_data(); return false;"/>
            <br>
            <input type="text" id="city_name"/>
            <input type="button" value="name send" onclick="get_city_data(); return false;"/>
        <table>
            <tr>            
                <th>도시코드</th>
                <th>도시명(영어)</th>
                <th>도시명(한국어)</th>
            </tr>
            <tbody id="info"></tbody>
        </table>
        
    <body>
</html>