<?php 
define('url','http://localhost/project/');
if(session_id()==''){
	session_start();
	session_regenerate_id();
}
function setLocation($location){
	$urlPath = url.$location;
	echo "<script>window.location.href='".$urlPath."'</script>";
}
function setAlertMessage($message,$flag){
	$_SESSION['message']=$message;
	$_SESSION['flag']=$flag;
}
function getMessageAlert(){
	if(isset($_SESSION['message']))
	{
		$message=$_SESSION['message'];
		$flag=$_SESSION['flag'];
		unset($_SESSION['message']);
		unset($_SESSION['flag']);
		// if($flag==true)
		// {
		// 	$msg='<div class="col-md-12 px-0"><div class="alert alert-danger alert-dismissible my-alert"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Error!</strong></div></div>';
		// }
	}
}

?>
