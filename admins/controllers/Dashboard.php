<?php 
require dirname(__FILE__).'/../../config/route.php';
require dirname(__FILE__).'/../models/DashboardModel.php';

$obj=new Dashboard();
	$method=$_REQUEST['action'];
	if(is_callable([$obj,$method])){
		$obj->$method();
	}

class Dashboard {
	private $model;
	public function __construct(){
		$this->model=new DashboardModel();
	}
	public function dashboard(){
		include('../views/header.php');
		include('../views/dashboard.php');
		include('../views/footer.php');
	}
}
 ?>

