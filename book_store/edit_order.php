<?php include "header.php" ?>

<?php
	include "base.php";

	$id = get_get_param("id");
	$order = array();
	if($id != "") {
		$order = pdo(getConn(), "SELECT * FROM USER_ORDER WHERE id = ?", [$id])->fetch();
	}
?>

<!-- content -->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6">
			<form action="./action_order.php" method="POST">
				<div class="form-group row">
					<label for="id" class="col-4">Order ID</label>
					<div class="col-8">
						<input type="text" class="form-control" id="id" name="id" readonly
							value="<?php show_item($order, 'id'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="phone" class="col-4">Phone</label>
					<div class="col-8">
						<input type="text" class="form-control" id="phone" name="phone"
							value="<?php show_item($order, 'phone'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="address" class="col-4">Address</label>
					<div class="col-8">
						<input type="text" class="form-control" id="address" name="address"
							value="<?php show_item($order, 'address'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="bank_acc" class="col-4">Bank Account</label>
					<div class="col-8">
						<input type="text" class="form-control" id="bank_acc" name="bank_acc"
							value="<?php show_item($order, 'bank_acc'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="pay_amnt" class="col-4">Pay Amount</label>
					<div class="col-8">
						<input type="text" class="form-control" id="pay_amnt" name="pay_amnt"
							value="<?php show_item($order, 'pay_amnt'); ?>">
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Pay</button>
			</form>
		</div>
	</div>
</div>

<?php include "footer.php" ?>
