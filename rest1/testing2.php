<?php 
require __DIR__.'/vendor/autoload.php';
 
$client = new \GuzzleHttp\Client();

$nickname = 'ObjectOrienter'.rand(0, 999);
$data = array(
    'nickname' => $nickname,
    'avatarNumber' => 5,
    'tagLine' => 'a test dev!'
);


$url = 'http://localhost:8000/api/programmers';
$res = $client->request('POST', $url,[
	 'body' => json_encode($data)
	]);
echo $res->getBody();


 ?>