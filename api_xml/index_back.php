<html>
    <head>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script>
            //xml parsing code
            $(document).ready(function () {
                $("#AirportCode").submit(function(){
                    var value = $('#page_no').val();
                    $.ajax({
                        url: '/api_xml/php/get_api.php',
                        type: 'GET', //통신 방식을 지정합니다
                        data: {val:value},
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
                                $('tr:first').css('background', 'darkgray').css('color', 'white');
                                
                            });
                        }
                        /*error: function (xhr, status, msg) { // 통신 실패시 호출해야하는 함수
                            console.log('상태값 : ' + status + ' Http에러메시지 : ' + msg);
                            document.write('상태값 : ' + status + '<br> Http에러메시지 : ' + msg);
                        },*/
                    });//end ajax
                });//end submit
            });//end ready
        </script>
    <head>
    <body>
        <h3>공공데이터 XML 파싱</h3>
        <form id="AirportCode">
            <input type="text" id="page_no"/>
            <input type="submit" value="send"/>
        </form>
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