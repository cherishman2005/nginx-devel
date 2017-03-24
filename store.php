<?php  
$redis = new redis();  
$redis->connect('127.0.0.1', 6379);  
$result = $redis->set('test',"11111111111");  

$img = file_get_contents('vod.png');
$redis->set('img', $img);

var_dump($result);    //结果：bool(true)  

?>  

