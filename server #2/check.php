<?php
if(file_exists("files/".$_GET["id"].".json")){
	$link = fopen("files/".$_GET["id"].".json", "r");
	$input = fgets($link);
	fclose($link);
	$d = json_decode($input);
	$con = new mysqli("localhost", "mcvlad", "thealgoritm2012", "mcvlad");
	$con->query("INSERT INTO stock VALUES('$d[0]', '$d[1]', '$d[2]', '$d[3]')");
	unlink("files/".$_GET["id"].".json");
	echo "OK";
}
else{echo "error";}
?>
