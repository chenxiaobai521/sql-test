<?php
$user='root';
$pass='root';
$dbh=new PDO('mysql:host=192.168.126.66;dbname=news',$user,$pass);

$title=$_POST['title'];
$sql="select * from p_news where title like '%$title%'";
$stmt=$dbh->query($sql);
$res=$stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($res as $k=>$v){
    echo "<a href=".$v['link'].">".$v['title']."</a>"."<br>";
}