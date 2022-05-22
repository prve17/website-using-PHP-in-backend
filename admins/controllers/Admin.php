<?php 
	require dirname(__FILE__).'/../../config/route.php';
	require dirname(__FILE__).'/../models/AdminModel.php';
	$obj=new Admin();
	$method=$_REQUEST['action'];
	if(is_callable([$obj,$method])){
		$obj->$method();
	}
	class Admin{
		private $model;
		public function __construct(){
			$this->model=new AdminModel();
		}
		public function login(){
			$username=$_POST['username'];
			$pwd=$_POST['password'];
			if(!empty($username) && !empty($pwd))
			{
				$response=$this->model->login($username,$pwd);
				if($response!= null)
				{
					$_SESSION['user_id']=$response['admin_id'];
					// echo 'Login Successfull';
					// header('Location: Dashboard.php?action=dashboard');
					setLocation('admins/controllers/Dashboard.php?action=dashboard');
				}
				else{
					setLocation('admins/index.php');
				}
			}
			else
			{
				echo 'Please fill';
			}
		}
		public function logout(){
			session_destroy();
			setLocation('index.php');
		}
	}
 ?>
 