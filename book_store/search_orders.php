<?php include "header.php" ?>

<!-- content -->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6">
			<form action="./list_orders.php" method="POST">
				<div class="form-group">
					<label for="id">Order ID</label>
					<input type="text" class="form-control" id="id" name="id" required>
				</div>
				<button type="submit" class="btn btn-primary">Find Orders</button>
			</form>
		</div>
	</div>
</div>

<?php include "footer.php" ?>
