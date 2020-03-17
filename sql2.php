<?php

$mysqli = new mysqli("localhost", "root", "root", "api1906");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";echo '<br>';
$user_name=$_GET['user_name'];//接收数据
$user_name=addslashes($user_name);
echo $user_name;
$sql="select * from p_users where user_name='{$user_name}'";
echo '<br>';echo $sql;
$res=$mysqli->query($sql);
while ($row = $res->fetch_assoc()) {
    echo '<br>';print_r($row);
}