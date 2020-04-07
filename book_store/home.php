<?php include "header.php" ?>

	<!-- content -->
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-4">Hello, world!</h1>
			<p class="lead">This is a online book store, in which you can find and buy books that you like.</p>
			<hr class="my-4">
			<p></p>
			<div class="row justify-content-center">
				<div class="col-6">
					<form>
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

<?php include "footer.php" ?>
