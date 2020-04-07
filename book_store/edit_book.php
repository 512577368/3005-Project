<?php include "header.php" ?>

<?php
	include "base.php";

	$id = get_get_param("id");
	$book = array();
	if($id != "") {
		$book = pdo(getConn(), "SELECT * FROM BOOK WHERE id = ?", [$id])->fetch();
	}
?>

<!-- content -->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6">
			<form action="./action_book.php" method="POST">
				<div class="form-group row">
					<label for="id" class="col-4">Book ID</label>
					<div class="col-8">
						<input type="text" class="form-control" id="id" name="id" readonly
							value="<?php show_item($book, 'id'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-4">Book name</label>
					<div class="col-8">
						<input type="text" class="form-control" id="name" name="name"
							value="<?php show_item($book, 'name'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="author" class="col-4">Author name</label>
					<div class="col-8">
						<input type="text" class="form-control" id="author" name="author"
							value="<?php show_item($book, 'author'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="isbn" class="col-4">ISBN</label>
					<div class="col-8">
						<input type="text" class="form-control" id="isbn" name="isbn"
							value="<?php show_item($book, 'isbn'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="genre" class="col-4">Genre</label>
					<div class="col-8">
						<input type="text" class="form-control" id="genre" name="genre"
							value="<?php show_item($book, 'genre'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="publisher" class="col-4">Publisher</label>
					<div class="col-8">
						<input type="text" class="form-control" id="publisher" name="publisher"
							value="<?php show_item($book, 'publisher'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="share_to_pub" class="col-4">Share To Publisher</label>
					<div class="col-8">
						<input type="text" class="form-control" id="share_to_pub" name="share_to_pub"
							value="<?php show_item($book, 'share_to_pub'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="pages" class="col-4">Number of pages</label>
					<div class="col-8">
						<input type="text" class="form-control" id="pages" name="pages"
							value="<?php show_item($book, 'pages'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="price" class="col-4">Price</label>
					<div class="col-8">
						<input type="text" class="form-control" id="price" name="price"
							value="<?php show_item($book, 'price'); ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="book_cnt" class="col-4">Book Count</label>
					<div class="col-8">
						<input type="text" class="form-control" id="book_cnt" name="book_cnt"
							value="<?php show_item($book, 'book_cnt'); ?>">
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

<?php include "footer.php" ?>
