<?php echo validation_errors(); ?>

<?php echo form_open('login/aksi_login'); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/styles.css">
	<title></title>
</head>
<body>
	<div class="form">
		<h2 style="text-align: center;">Login</h2>
		<br>
		<form>
			<div class="field-wrap" style="height: 30px;">
				<label>
	              Username<span class="req">*</span>
	            </label>
	            <input type="text" name="username" required autocomplete="off"/>
			</div>
			<div class="field-wrap" style="height: 30px; margin-bottom: 60px;">
	            <label>
	              Password<span class="req">*</span>
	            </label>
	            <input type="password"required name="password" autocomplete="off"/>
	        </div>
	        <button class="button button-block"/>Log In</button>
	        <ul class="tab">
		        <li><a href="http://localhost/myapps2/index.php/user/create">Sign Up</a></li>
		        <li style="text-align: right;"><a href="#login">Forgot Password ?</a></li>
		    </ul>
	          
		</form>
	</div>
</body>
</html>

<?php echo form_close(); ?>