<?php
class Bootstrap{
	public function __construct(){
	  if(isset($_GET['url'])){
		  $url=rtrim($_GET['url'],"/");
		  $url=explode('/',$url);
		  $c=$url[0];
	  }else{
		  $c="index";
	  }
	  $file_controller=__CONTROLLER_PATH.$c."_Controller.php";
	  if(file_exists($file_controller)){
	      require_once($file_controller);
	  }else{
		  require_once(__CONTROLLER_PATH."error_Controller.php");
		  $controller=new error();
		  $controller->index();
		  return false;
	  } 
	  $name_controller=$c."_Controller";
	  $controller=new $name_controller;
	  $controller->LoadModel($c);//autoload model
		  if(isset($url[2])){
			  $controller->{$url[1]}($url[2]);
		  }else{
			  if(isset($url[1])){
			  $controller->{$url[1]}();
			  }else{
			  $controller->index();
			  }
		  }
	}
}
?>