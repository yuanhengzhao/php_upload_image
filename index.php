<html>

<div class = "container form-signin">
<h2>Enter Username and Password</h2> 
<div class = "container form-signin">
	<?php
		$msg = '';
		# This is a test for github.
		if (isset($_POST['login']) && !empty($_POST['username']) 
			&& !empty($_POST['password'])) {
			if ($_POST['username'] == 'test' && 
				$_POST['password'] == '1234') {
				$_SESSION['valid'] = true;
				$_SESSION['timeout'] = time();
				$_SESSION['username'] = 'test';
			echo 'login successfully';
			header("Location: upload.php");
		}else {
			$msg = 'Wrong username or password';
		}
	}
 ?>
</div> <!-- /container -->
<div class = "container">
  
	 <form class = "form-signin" role = "form" 
		action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
		?>" method = "post">
		<h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
		<input type = "text" class = "form-control" 
		   name = "username" placeholder = "username = test" 
		   required autofocus></br>
		<input type = "password" class = "form-control"
		   name = "password" placeholder = "password = 1234" required>
		<button class = "btn btn-lg btn-primary btn-block" type = "submit" 
		   name = "login">Login</button>
	 </form>
		
	 Click here to <a href = "logout.php" tite = "Logout">log out</a>.
</div> 
<?php

?>
</html>