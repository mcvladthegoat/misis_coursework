<?php
class Controller_Main extends Controller{
	function __construct(){
		parent::__construct();
		$this->model = new Model_Main();
		$this->view = new View();
	}
	function action_index(){
		if(sizeof($_POST) > 0){ // ЗНАЧИТ, КТО-ТО ХОЧЕТ ЗАРЕГИСТРИРОВАТЬСЯ
			$code = $this->model->CheckUserInDB($_POST);
			if($code == 0){
				header("Location: upload");
			}
			else { header("Location: "); }  //Редиректим на мейн, если авторизация не прошла
		}
		else{
			$this->view->generate('main_view.php', 'template_view.php');// Просто главная страница с логинизацией. Юзер не логинился
		}
	}
	public function action_logOut(){
		unset($_SESSION["user_id"]);
		unset($_SESSION["email"]);
		// header("Location:");
		header("Location: /mvc/main");
		exit();
	}
}