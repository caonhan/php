<?php
class help_Controller extends Controller{
	public function __construct(){
	   parent::__construct();
	}
	public function index(){
		$this->view->render("help/index");
	}
}
?>