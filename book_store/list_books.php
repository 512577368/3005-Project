<?php 
	include "base.php";
	include "header.php";
?>

<?php
	$dbh = getConn();

	$sql = "SELECT * FROM BOOK WHERE 1=1";
	$args = array();

	$arg = get_post_param('name');
	if($arg != "") {
		$sql = $sql." AND name like ?";
		array_push($args, "%".$arg."%");
	}

	$arg = get_post_param('author');
	if($arg != "") {
		$sql = $sql." AND author = ?";
		array_push($args, $arg);
	}

	$arg = get_post_param('isbn');
	if($arg != "") {
		$sql = $sql." AND isbn = ?";
		array_push($args, $arg);
	}

	$arg = get_post_param('genre');
	if($arg != "") {
		$sql = $sql." AND genre = ?";
		array_push($args, $arg);
	}
?>

	<!-- content -->
	<div class="container">
		<table class="table table-sm">
			<thead>
				<tr>
					<th>ID</th>
					<th>ISBN</th>
					<th>Name</th>
					<th>Author</th>
					<th>Price</th>
					<th>Count</th>
					<th colspan="3"></th>
				</tr>
			</thead>
			<tbody>
<?php
    	foreach(pdo($dbh, $sql, $args) as $row) {
?>				
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['isbn']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['author']; ?></td>
					<td><?php echo $row['price']; ?></td>
					<td><?php echo $row['book_cnt']; ?></td>
					<td>
						<a href="./edit_order_detail.php?book_id=<?php echo $row['id']; ?>">Add to shopping cart</a>&nbsp;&nbsp;
		<?php
			if(is_admin()) {
		?>
						<a href="./edit_book.php?id=<?php echo $row['id']; ?>">Modify</a><br/>
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
		<?php
			if(is_admin()) {
		?>
			<a href="./edit_book.php">New book</a>
		<?php
			}
		?>
	</div>

<?php include "footer.php" ?>
