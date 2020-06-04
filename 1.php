<?php
$url="http://www.bj.chinanews.com/focus/4.html";
$html=file_get_contents($url);
$html1=iconv("gb2312","utf-8//IGNORE",$html);
file_put_contents('news.html',$html1);