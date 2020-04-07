<?php include "header.php" ?>

<?php
	include "base.php";

	$order_detail = array();
	$book_id = get_get_param("book_id");
	if($book_id != "") {
		$order_detail['book_id'] = $book_id;
		$order_detail['book_cnt'] = 1;

		$book = pdo(getConn(), "SELECT * FROM BOOK WHERE id = ?", [$book_id])->fetch();
		$order_detail['book_price'] = $book['price'];
	}

	$id = get_get_param("id");
	if($id != "") {
		$order_detail = pdo(getConn(), "SELECT * FROM ORDER_DETAIL WHERE id = ?", [$id])->fetch();
	}
?>

<!-- content -->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6">
			<form action="./action_order_detail.php" method="POST">
				<div class="form-group row">
					<label for="id" class="col-4">ID</label>
					<div class="col-8">
						<input type="text" class="form-control" id="id" name="id" readonly
							value="<?php show_item($order_detail, 'id'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="order_id" class="col-4">Order ID</label>
					<div class="col-8">
						<input type="text" class="form-control" id="order_id" name="order_id" readonly
							value="<?php show_item($order_detail, 'order_id'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="book_id" class="col-4">Book ID</label>
					<div class="col-8">
						<input type="text" class="form-control" id="book_id" name="book_id" readonly
							value="<?php show_item($order_detail, 'book_id'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="book_cnt" class="col-4">Count</label>
					<div class="col-8">
						<input type="text" class="form-control" id="book_cnt" name="book_cnt"
							value="<?php show_item($order_detail, 'book_cnt'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="book_price" class="col-4">Price</label>
					<div class="col-8">
						<input type="text" class="form-control" id="book_price" name="book_price" readonly
							value="<?php show_item($order_detail, 'book_price'); ?>">
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Add to shopping cart</button>
			</form>
		</div>
	</div>
</div>

<?php include "footer.php" ?>
