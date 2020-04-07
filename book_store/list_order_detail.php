<?php 
	include "header.php";
	include "base.php";
?>

<?php
	$dbh = getConn();

	$sql = "SELECT d.*, o.status
		FROM USER_ORDER o, ORDER_DETAIL d 
		WHERE 1=1 
		 AND o.id = d.order_id";
	$args = array();

	$arg = get_get_param('id');
	if($arg != "") {
		$sql = $sql." AND d.order_id = ?";
		array_push($args, $arg);
	}
?>

	<!-- content -->
	<div class="container">
		<table class="table table-sm">
			<thead>
				<tr>
					<th>ID</th>
					<th>Order ID</th>
					<th>Book ID</th>
					<th>Book Count</th>
					<th>Book Price</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php
    	foreach(pdo($dbh, $sql, $args) as $row) {
?>				
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['order_id']; ?></td>
					<td><?php echo $row['book_id']; ?></td>
					<td><?php echo $row['book_cnt']; ?></td>
					<td><?php echo $row['book_price']; ?></td>
					<td>
						<?php
							if( $row['status'] == '00' ) {
						?>
						<a href="action_order_detail.php?flag=delete&id=<?php echo $row['id']; ?>">Delete</a>
						<?php
							}
						?>
					</td>
				</tr>
<?php
    	}
?>
			</tbody>
		</table>
	</div>

<?php include "footer.php" ?>
