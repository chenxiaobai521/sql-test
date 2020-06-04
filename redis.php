<?php

//连接redis
$redis=new redis();
$redis->connect('127.0.0.1');
$redis->auth('');

$key='aaa';
$users_set='users';
$number=$redis->get($key);
if($number<1){
    $data=[
        'error' =>  '1',
        'msg'   =>  '活动结束',
    ];
    die(json_encode($data));
}
$uid=3;
$res=$redis->sIsMember($users_set,$uid);
if($res){
    $data=[
        'error' =>  '2',
        'msg'   =>  '您已参与秒杀',
    ];
    die(json_encode($data));
}
$redis->decr($key);//自减
$redis->sAdd($users_set,$uid);
$data=[
    'error' =>  '0',
    'msg'   =>  '恭喜您秒杀成功，请尽快去支付...',
];
die(json_encode($data));