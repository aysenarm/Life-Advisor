<?php
	session_start();
require_once('../Model/userInteractdb.php');

if (isset($_SESSION['user_session'])){
	$user_logout = new UserDB();
		$user_logout->logout();
		$user_logout->redirect('http://localhost/PHP%20class/PROJECT/Life-Advisor/');
}