<?php 
require __DIR__.'/vendor/autoload.php';
 
$client = new \GuzzleHttp\Client();
$url = 'http://localhost:8000/api/programmers';
$res = $client->request('POST', $url);
echo $res->getBody();


 ?>