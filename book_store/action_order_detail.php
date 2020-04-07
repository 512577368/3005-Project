<?php include "header.php" ?>
<?php
	include "base.php";

	$flag = get_get_param("flag");

	if($flag == "delete") {
		$id = get_get_param("id");
		$rowCount = pdo(getConn(), "DELETE FROM ORDER_DETAIL WHERE id = ?", [$id])->rowCount();

	} else {
		$book_id = get_post_param("book_id");
		$book_cnt = get_post_param("book_cnt");
		$book_price = get_post_param("book_price");
		$user_id = current_user()["id"];

		$order = pdo(getConn(), "SELECT * FROM USER_ORDER WHERE user_id = ? and status = '00'", [$user_id])->fetch();
		if(!$order) {
			pdo(getConn(), "INSERT INTO USER_ORDER(user_id, status) VALUES(?, '00')", [$user_id]);
			$order = pdo(getConn(), "SELECT * FROM USER_ORDER WHERE user_id = ? and status = '00'", [$user_id])->fetch();
		}

		$detail = pdo(getConn(), "SELECT * FROM ORDER_DETAIL WHERE order_id = ? and book_id = ?", [$order['id'], $book_id])->fetch();

		if($detail) {
			$detail_id = $detail["id"];
			$orig_book_cnt = $detail['book_cnt'];
			$new_book_cnt = $orig_book_cnt + $book_cnt;

			$rowCount = pdo(getConn(), 
				"UPDATE ORDER_DETAIL SET book_cnt = ?, book_price =? WHERE id = ?", 
				[$new_book_cnt, $book_price, $detail_id])->rowCount();
		} else {
			$rowCount = pdo(getConn(), 
				"INSERT INTO ORDER_DETAIL(order_id, book_id, book_cnt, book_price) VALUES(?, ?, ?, ?)", 
				[$order['id'], $book_id, $book_cnt, $book_price])->rowCount();
		}
	}
?>
<!-- content -->
<div class="container">
	<?php
		if($rowCount > 0) {
			echo "Action successfully";
		} else {
			echo "Action fail";
		}
	?>
</div>

<?php include "footer.php" ?>
