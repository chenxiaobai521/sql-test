<?php

//连接redis
$redis=new redis();
$redis->connect('127.0.0.1');
$redis->auth('');

$goods_id=$_GET['goods_id'];
$aaa=$redis->zincrby('view_num',1,$goods_id);
echo json_encode(['aaa'=>$aaa]);