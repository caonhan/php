<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
if(isset($this->css)){//load array css
	foreach($this->css as $css){
		echo "<link rel='stylesheet' type='text/css' href='".__SITE_PATH."public/css/".$css.".css' />";
	}
}
if(isset($this->js)){//load array js
	foreach($this->js as $js){
		echo "<script type='text/javascript' charset='utf-8' src='".__SITE_PATH."public/js/".$js.".js' ></script>";
	}
}
?>
<title>VMC pro</title>
</head>
<body>
<div id="wrapper">
    <!-----------------# header-------------------->
    <div id="header">
	<h1>HEADER</h1><br />
    <ul id="menu">
        <li><a href="<?php echo __SITE_PATH?>index">Index</a></li>
        <li><a href="<?php echo __SITE_PATH?>help">Help</a></li>
        <li>
        <?php
		if(Session::get("login")==true){
        echo "Xin chào ".Session::get("user");
		echo " <a href='".__SITE_PATH."user/logout'>logout</a>";
        }else{
        echo "<a href='".__SITE_PATH."user/login'>Login</a>";
        }?>
       </li>
    </ul>
    
    </div>