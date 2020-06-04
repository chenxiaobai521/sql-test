<?php

echo "自动上线";
$cmd='cd /wwwroot/1906/sql-test && git pull';
shell_exec($cmd);