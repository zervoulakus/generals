<?php
	session_start();
	$action = isset($_GET['action'])?$_GET['action']:"invalid";
	switch($action){
		case "logout":
			logout();	
			break;
		case "reguser":
			register_user();
			break;
		case "revoke":
			revoke_validation();
			break;
		case "invalid":
			break;
		default:
			break;
	}
	function revoke_validation(){
		$_SESSION['nickname'] = "";
		unset($_SESSION['nickname']);		
		session_destroy();
		
		$err_id = isset($_GET['errorid'])?$_GET['errorid']:0;
		if($err_id >0){
			echo "<meta http-equiv='refresh' content='0; url=http://wordpress.local/lobby/?err_id={$err_id}' />";
		}else{
			echo "<meta http-equiv='refresh' content='0; url=http://wordpress.local/lobby' />";
		}
		
	}
	function logout(){
		$_SESSION['nickname'] = "";
		unset($_SESSION['nickname']);		
		session_destroy();
		echo "<meta http-equiv='refresh' content='0; url=http://wordpress.local/lobby' />";
	}
	function register_user(){	
		if($_POST['nickname']!= ""){
			$_SESSION['nickname'] = $_POST['nickname'];
		}
		echo "<meta http-equiv='refresh' content='0; url=http://wordpress.local/lobby' />";
	}	
	
	
		
	
?>