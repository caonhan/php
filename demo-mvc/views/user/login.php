<h2>Trang login.....</h2>
<hr />
<div class="error" style="background:#FC6;color:red;padding:10px">
<?php 
if(isset($this->msg)){
echo $this->msg;
}
?>
</div>
<form action="" method="post">
<label>User  </label><input name="user" type="text" /><br />
<label>Password  </label><input name="password" type="text" /><br />
<label></label><input type="submit" value="login" name="login"/><br />

</form>

