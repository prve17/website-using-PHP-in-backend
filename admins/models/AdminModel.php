<?php 
	require dirname(__FILE__).'/../../database/DataModel.php';

	class AdminModel extends DataModel{
		public function __construct()
		{
			parent::__construct();
		}
		public function login($username,$password){
			$username=$this->conn->real_escape_string($username);
			$active=1;
			$password=$this->conn->real_escape_string($password);
			$query_result= null;
			$sql="SELECT * FROM admins WHERE email=? and password=? and active=? limit 1";
			$stmp=$this->conn->prepare($sql);
			$stmp->bind_param('ssi',$username,$password,$active);
			$stmp->execute();
			$result=$stmp->get_result();
			while($row=$result->fetch_assoc()){
				$query_result=$row;
			}
			return $query_result;
		}
	}
 ?>
