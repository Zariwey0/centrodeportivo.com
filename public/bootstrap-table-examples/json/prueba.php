<?php

$file = "multifield.json";
//header('Content-Type: application/json');
//$book = json_decode(file_get_contents($file),true);
//$json = '"address": ["city":"fdasf","street":"asdfas","building":"asd"]';
/*
$json = '[ {
			"address": {
            "city": "fdasf", 
            "street": "asdfas", 
            "building": "asd" 
        	}
        } ]';
*/
$json = file_get_contents($file);
//$temperatureMin = array($json['address']['city'],$json['address']['street'],$json['address']['building']);
$book = json_decode($json,true);
die(json_encode($book[0]['address']));
//die(json_encode($json[0]['address']));        
//die(json_encode($json['address']));
//$arr = array('city' => 'Yeah', 'street' => 'Mamón', 'building' => 4852);
//die(json_encode($arr));
//die(json_encode($json));
//print_r($json);
//echo json_encode($json);