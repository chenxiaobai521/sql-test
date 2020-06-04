<?php
$user='root';
$pass='root';
$dbh=new PDO('mysql:host=192.168.126.66;dbname=news',$user,$pass);

$content=file_get_contents('news.html');
$aaa='/<ul class="branch_list_ul paging">(.*)<\/ul>/Us';
preg_match_all($aaa,$content,$bbb);
$ccc=$bbb[1][0];
// echo "<pre>";print_r($ccc);echo "<pre>";die;
$ddd='/<a href="(.*)" >(.*)<\/a>/U';
preg_match_all($ddd,$ccc,$eee);
$fff=$eee[1];
$ggg=$eee[2];
$url='http://www.bj.chinanews.com';
foreach($fff as $k=>$v){
    $link=$url.$v;
    echo $ggg[$k]."-".$link;echo '<br>';
    $sql="insert into p_news(`title`,`link`) values ('{$ggg[$k]}','{$link}')";
    $dbh->query($sql);
}