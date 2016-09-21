<?php

//$file = "multifield.json";
$file = "datos_basedatos.json";

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

//if (file_exists($file)) {
	//unlink(realpath($file));
//if(!unlink(realpath($file))) echo "No funciona";

if(file_exists($file)) unlink($file);

//}
//if(File::exists($file)) File::delete($file);
//$temperatureMin = array($json['address']['city'],$json['address']['street'],$json['address']['building']);
$book = json_decode($json,true);

$arr = array();

for($i = 0; $i < count($book); $i++) {
    //$arr[$i]['address'] = $book[$i]['address'];
    //$arr[$i]['id'] = "type".$book[$i]['id'];
    //Creamos un array para mantener la estructura. Estará formado por el par actividad-monitor.
    $par = array();
    $par['activity'] = $book[$i]['activity'];
    $par['monitor'] = $book[$i]['monitor'];
    $arr[$i]['address'] = $par;
    $arr[$i]['id'] = "type".$book[$i]['activity_type'];
}



//$arr[0] = $book[0]['address'];
//$arr[1] = $book[0]['id'];
//die(json_encode($book[0]['address'],$book[0]['id']));
die(json_encode($arr));
//die(json_encode($json[0]['address']));        
//die(json_encode($json['address']));
//$arr = array('city' => 'Yeah', 'street' => 'Mamón', 'building' => 4852);
//die(json_encode($arr));
//die(json_encode($json));
//print_r($json);
//echo json_encode($json);