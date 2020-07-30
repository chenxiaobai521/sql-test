<?php
	$timePath = Date("/Y/m/d/",time());
	$path = "Z:/sql".$timePath;
	$arr = scandir($path);//便利目录下内容
	
	foreach($arr as $key => $val){
		if($val == "." | $val == ".."){
			continue;
		}
		$filePath = $path.$val;
		@unlink($filePath);
	}

	rmdir($path);//删除目录
?>