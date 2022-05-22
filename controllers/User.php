<?php
	require dirname(__FILE__).'/../config/route.php';
	require dirname(__FILE__).'/../models/UserModel.php';
	$obj=new User();
	$method=$_REQUEST['action'];
	if(is_callable([$obj,$method])){
		$obj->$method();
	}

	class User {
		private $model;
		public function __construct(){
			$this->model=new UserModel();
		}
		public function signup(){
			$data['name']=$_POST['name'];
			$data['email']=$_POST['email'];
			$data['mobile']=$_POST['mobile'];
			$data['password']='12345';
			$response=$this->model->add('admins',$data);
			if($response!=null)
			{
				// setAlertMessage('Registration Successfull!',false);
				setLocation('views/signup.php');

			}
			else{
				echo 'Please fill';
			}
		} 
	}
?>