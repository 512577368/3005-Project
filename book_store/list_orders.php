<?php 
	include "header.php";
	include "base.php";
?>

<?php
	$dbh = getConn();

	$msg = "Orders for all users";
	$sql = "SELECT * FROM USER_ORDER WHERE 1=1";
	$args = array();

	if(!is_admin()) {
		$sql = $sql." AND user_id = ?";
		array_push($args, current_user()["id"]);
		$msg = "Orders for ".current_user()["email"];
	}

	$arg = get_post_param('id');
	if($arg != "") {
		$sql = $sql." AND id = ?";
		array_push($args, $arg);
	}
?>

	<!-- content -->
	<div class="container">
		<h3>
			<?php echo $msg; ?>
		</h3>
		<table class="table table-sm">
			<thead>
				<tr>
					<th>ID</th>
					<th>User ID</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Bank Account</th>
					<th>Money Paied</th>
					<th>Status</th>
					<th colspan="3"></th>
				</tr>
			</thead>
			<tbody>
<?php
    	foreach(pdo($dbh, $sql, $args) as $row) {
?>				
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['user_id']; ?></td>
					<td><?php echo $row['phone']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['bank_acc']; ?></td>
					<td><?php echo $row['pay_amnt']; ?></td>
					<td><?php echo $row['status']; ?></td>
					<td>
						<?php
							if($row['status'] == '00') {
						?>
						<a href="./edit_order.php?id=<?php echo $row['id']; ?>">Pay</a><br/>
						<?php
							}
						?>
						<a href="./list_order_detail.php?id=<?php echo $row['id']; ?>">Detail</a><br/>
					</td>
				</tr>
<?php
    	}
?>
			</tbody>
		</table>
	</div>

<?php include "footer.php" ?>
