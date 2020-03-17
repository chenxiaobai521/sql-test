<?php

$mysqli = new mysqli("localhost", "root", "root", "api1906");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";echo '<br>';
// $sql="select * from goods";
$id=$_GET['id'];//接收数据
$id=intval($id);
echo '<br>';
echo $id;
$sql="select * from goods where id=".$id;
echo $sql;
$res=$mysqli->query($sql);
while ($row = $res->fetch_assoc()) {
    echo '<br>';print_r($row);
}