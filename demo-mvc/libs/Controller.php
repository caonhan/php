<?php
class Controller {
	public function __construct(){
		Session::__init();
        $this->view=new View;
		$this->view->js=array("default","jquery");
		$this->view->css=array("default");
    }
	public function LoadModel($name){
		$path=__MODEL_PATH.$name."_Model.php";
		if(file_exists($path)){
		require_once($path);
		$name=$name."_Model";
		$this->model=new $name;
		}
	}
}
?>