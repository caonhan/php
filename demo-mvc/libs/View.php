<?php
class View{
	public function __construct(){
    }
	public function render($link,$Noinclude=""){
		if($Noinclude==""){
			require_once __TEMPLATES_PATH."header.php";
			echo "<div id='conten'>";
				require(__VIEW_PATH.$link.".php");
			echo"</div>";
			require_once __TEMPLATES_PATH."footer.php";
		}else{
			require(__VIEW_PATH.$link.".php");
		}
	}
	public function redirect($link=''){
		ob_start();
		if($link!=''){
		$link=__SITE_PATH.$link;
		}else{
		$link=__SITE_PATH;
		}
		header("Location:$link");
	}
}
?>