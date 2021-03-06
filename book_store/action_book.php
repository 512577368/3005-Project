<?php include "header.php" ?>
<?php
	include "base.php";

	$id = get_post_param("id");
	$name = get_post_param("name");
	$author = get_post_param("author");
	$isbn = get_post_param("isbn");
	$genre = get_post_param("genre");
	$publisher = get_post_param("publisher");
	$share_to_pub = get_post_param("share_to_pub");
	$pages = get_post_param("pages");
	$price = get_post_param("price");
	$book_cnt = get_post_param("book_cnt");

	if($id == "") {
		$sql = "INSERT INTO `BOOK`(`name`, `author`, `isbn`, `genre`, `pages`, `price`, `book_cnt`, `publisher`, `share_to_pub`) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$args = [$name, $author, $isbn, $genre, $pages, $price, $book_cnt, $publisher, $share_to_pub];
	} else {
		$sql = "UPDATE `BOOK` SET `name`=?, `author`=?, `isbn`=?, `genre`=?, `pages`=?, `price`=?, `book_cnt`=?, `publisher`=?, `share_to_pub`=? 
		WHERE id=?";
		$args = [$name, $author, $isbn, $genre, $pages, $price, $book_cnt, $publisher, $share_to_pub, $id];
	}

	$rowCount = pdo(getConn(), $sql, $args)->rowCount();
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
