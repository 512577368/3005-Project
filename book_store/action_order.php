<?php include "header.php" ?>
<?php
	include "base.php";

	$id = get_post_param("id");
	$phone = get_post_param("phone");
	$address = get_post_param("address");
	$bank_acc = get_post_param("bank_acc");
	$pay_amnt = get_post_param("pay_amnt");

	$sql = "UPDATE USER_ORDER SET phone=?, address=?, bank_acc=?, pay_amnt=?, sold_on=Now(), status='01' WHERE id=?";
	$args = [$phone, $address, $bank_acc, $pay_amnt, $id];

	$rowCount = pdo(getConn(), $sql, $args)->rowCount();

	$sql = "SELECT * FROM ORDER_DETAIL WHERE order_id = ?";
	foreach(pdo(getConn(), $sql, [$id]) as $detail) {
		$sql = "UPDATE BOOK SET book_cnt = book_cnt - ? WHERE id = ?";
		pdo(getConn(), $sql, [$detail["book_cnt"], $detail["book_id"]]);
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
