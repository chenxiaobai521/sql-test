<?php

//接收数据
$name=$_POST['name'];
$pass=md5($_POST['pass']);

$dbh=new PDO('mysql:host=192.168.126.66;dbname=news','root','root');
$sql="select * from users where name=:name and pass=:pass";
$stmt=$dbh->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':pass', $pass);
$stmt->execute();
$res=$stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($res);
// $mysqli=mysqli_connect('192.168.126.66','root','root','news');
// $sql="select * from users";
// $res=$mysqli->query($sql);
// foreach($res as $k=>$v){
//     echo $v['name'].$v['pass']."<br>";
// }
