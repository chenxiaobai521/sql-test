<?php

$cmd='cd /wwwroot/1906/sql-test && git pull';
$res=shell_exec($cmd);
var_dump($res);
echo 111;