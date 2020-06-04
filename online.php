<?php

echo "自动上线";
$cmd="cd /wwwroot/sql && git push";
shell_exec($cmd);