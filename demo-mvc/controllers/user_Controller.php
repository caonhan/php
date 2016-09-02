<?php
class user_Controller extends Controller{
	public function __construct(){
	   parent::__construct();
	}
	public function index(){
		$this->view->render("user/index");
		$this->model->test();
		if($this->model->data==0){
			echo "khong co gi";
		}else{
			foreach($this->model->data as $row){
				echo $row["id_SP"];
			}
		}
	}
	public function login(){
		if(isset($_POST['login'])){
			if($_POST['user']=="" or $_POST['password']==""){
				$this->view->msg="Hay dien user hay pass";
				$this->view->render("user/login");
			}else{
				if($this->model->login()==true){
					Session::set("login",true);
					Session::set("user",$_POST['user']);
					$this->view->redirect();
				}else{
					$this->view->redirect("user/login");
				}
			}
		}else{
		    $this->view->render("user/login");
		}
		
	}
	public function logout(){
		Session::set("login",false);
		Session::unset_session("user");
		$this->view->redirect();
	}
}
?>