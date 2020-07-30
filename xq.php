<?php

//连接redis
$redis=new redis();
$redis->connect('127.0.0.1');
$redis->auth('');
$bbb=$redis->zscore('view_num',2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    商品名称:"二哈"<br>
    商品价格:"2000"<br>
    访问量:<?php echo $bbb;?>
</body>
</html>