<?php  
$redis = new redis();  
$redis->connect('127.0.0.1', 6379);  
//$result = $redis->get('test');  
//var_dump($result);   //结果：string(11) "11111111111"  

$img = $redis->get('img');
header('Content-Type: image/png'); // you may change image/png to image/jpeg if you pic is jpeg.
header('Content-Length: ' . strlen($img));
echo $img;

?>  

