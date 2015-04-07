<?php
include_once("application/core/mysql_config.php");
include_once("application/core/ftp_config.php");
include_once("application/core/logger_mod.php");
$con = new mysqli(SQLADDR, SQLUSER, SQLPWD, SQLDB);
$get_task = $con->query("SELECT id, filename, user_id, msg FROM board WHERE status = 0 LIMIT 1");
$get_task->data_seek(0);
$data = $get_task->fetch_row();
$json_data = json_encode($data);
file_put_contents(FULLADDR.$data[0].".json", $json_data);
$conn_id = ftp_connect(FTPADDR, '21'); 
$login_result = ftp_login($conn_id, FTPLOGIN, FTPPWD); 
$source_file = FULLADDR.$data[1];
$destination_file =   FTPDEST.$data[1];
// echo $source_file; !DEBUG
ftp_pasv($conn_id, true);
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY); 
if (!$upload) { 
        logger("FTP upload failed! Check credentials");
}
$source_file = FULLADDR.$data[0].".json";
$destination_file =  FTPDEST.$data[0].".json";
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);
ftp_close($conn_id);
$ch = curl_init("http://mcvlad.myjino.ru/check.php?id=".$data[0]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);
if($result == "OK"){
	unlink(FULLADDR.$data[0].".json");
	$con->query("UPDATE board SET status = 1 WHERE id='$data[0]'");
}
else {
	logger("FTP error respond from Server#2: ".$result);
}
?>