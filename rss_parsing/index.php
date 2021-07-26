<?php
    function produce_XML_object_tree($raw_XML) { // XML노드를 PHP Object자료형으로 변경하는 함수
        libxml_use_internal_errors(true);
        try {
			$xmlTree = new SimpleXMLElement($raw_XML);
		} catch (Exception $e) { // Something went wrong.
			$error_message = 'SimpleXMLElement threw an exception.';
			foreach(libxml_get_errors() as $error_line) {
                $error_message .= "\t" . $error_line->message;
			}
			trigger_error($error_message);
			return false;
		}
		return $xmlTree;
	}

	$feed_url	= 'http://www.weather.go.kr/weather/forecast/mid-term-rss3.jsp?stnId=133';
	$ch			= curl_init();
	curl_setopt($ch, CURLOPT_URL, $feed_url);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$xml = curl_exec($ch);

	curl_close($ch);
    //print_r($xml);

	$cont = produce_XML_object_tree($xml); // XML노드를 Object 형태로 전환
    $channel = $cont->channel;
    $item = $channel->item;
	$desc = $item->description;
	$body = $desc->body;	
    //print_r($body);
    function objectToArray($d) { // Object 형태를 배열로 전환하는 함수
		if (is_object($d))	$d = get_object_vars($d);
 		if (is_array($d))	return array_map(__FUNCTION__, $d);
		else				return $d;
	}
    
    $body_2	= objectToArray($body);
    /*echo "<pre>";
    print_r($body_2);
    echo "</pre>";*/
    echo "지역 : ",$body_2['location'][0]['city'],"<br>";		
    for ($i = 0; $i<13;$i++)
    {
        echo "시간 : ",$body_2['location'][0]['data'][$i]['tmEf'],"<br>";		
        echo "날씨 : ",$body_2['location'][0]['data'][$i]['wf'],"<br>";		
	    echo "최저온도 : ",$body_2['location'][0]['data'][$i]['tmn'],"<br>";		
	    echo "최고온도 : ",$body_2['location'][0]['data'][$i]['tmx'],"<br>";	
    }
    
?>