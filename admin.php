<?php 
$ids=$_GET["id"];
$pg=$_GET["pg"];
$url='http://v10.com/api.php/provide/vod/?ac=detail&ids='.$ids.'&pg='.$pg;
$json=file_get_contents($url);
echo $json;
?>