<?php
class Model_Main extends Model{
	function CheckUserInDB($d){
		$this->ConnectDB();
		$q = "SELECT id FROM users WHERE email='$d[email]' AND pwd='$d[pwd]'";
		$res = $this->query($q);
		$res->data_seek(0);
		$user_id = $res->fetch_row()[0];
		if(sizeof($user_id) > 0){
			$_SESSION["user_id"] = $user_id;
			$_SESSION["email"] = $d["email"];
			return 0;
		}
	}
}