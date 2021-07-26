<?php
    $no = $_GET["data"];
    $ch = curl_init();
    $AirportCode = 'getAirportCodeList';/*공항 코드 정보*/
    $en_key = "pMgRnW4wnjPU0mz%2Fd7h8m6PficxgUKrcm3dZ5TGXL85LnsL%2Fe8jZyH4Wj3xXbq%2FUmi0PEauSMJCi9UnFfh0NGg%3D%3D";
    $url = "http://openapi.airport.co.kr/service/rest/AirportCodeList/$AirportCode";

    $queryParams = '?' . urlencode('ServiceKey') . "=$en_key"; /*Service Key*/
    $queryParams .= '&' . urlencode('pageNo') . '=' . urlencode($no); /**/
    curl_setopt($ch, CURLOPT_URL, $url .$queryParams);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $response = curl_exec($ch);
    curl_close($ch);
    print_r($response);
?>