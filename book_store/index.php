<?php 
	include "base.php";
	include "header.php";

	$action = get_post_param('action');
	$email = get_post_param('email');
	$password = get_post_param('password');
	if($action == "login" && $email != "" && $password != "") {
		$user = pdo(getConn()
					, "SELECT * FROM STORE_USER WHERE email = ? AND password = ?"
					, [$email, $password])->fetch();
		if($user) {
			set_current_user($user);
		} else {
			echo "Wrong email or password<br>";
		}
	}

	if($action == "logout") {
		set_current_user(NULL);
	}

	$user = current_user();
	if(!$user) {
?>
	<!-- content -->
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-4">Hello, world!</h1>
			<p class="lead">This is a online book store, in which you can find and buy books that you like.</p>
			<hr class="my-4">
			<p></p>
			<div class="row justify-content-center">
				<div class="col-6">
					<form method="post">
						<input type="hidden" name="action" value="login"/>
						<div class="form-group">
							<label for="email">Email address</label>
							<input type="email" class="form-control" id="email" name="email">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password">
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
					Haven't account? Please <a href="#" role="button">Register</a> first.
				</div>
			</div>
		</div>
	</div>
<?php
	} else {
?>
	<!-- content -->
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-4">Hello, <?php echo $user['email']; ?></h1>
			<p class="lead">This is a online book store, in which you can find and buy books that you like.</p>
			<form method="post">
				<input type="hidden" name="action" value="logout"/>
				<button type="submit" class="btn btn-primary">Logout</button>
			</form>
		</div>
	</div>
<?php
	}
?>

<?php include "footer.php" ?>
