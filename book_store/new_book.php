<?php include "header.php" ?>

<!-- content -->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6">
			<form action="./action_book.php" method="POST">
				<div class="form-group row">
					<label for="name" class="col-4">Book name</label>
					<div class="col-8">
						<input type="text" class="form-control" id="name" name="name">
					</div>
				</div>
				<div class="form-group row">
					<label for="author" class="col-4">Author name</label>
					<div class="col-8">
						<input type="text" class="form-control" id="author" name="author">
					</div>
				</div>
				<div class="form-group row">
					<label for="isbn" class="col-4">ISBN</label>
					<div class="col-8">
						<input type="text" class="form-control" id="isbn" name="isbn">
					</div>
				</div>
				<div class="form-group row">
					<label for="genre" class="col-4">Genre</label>
					<div class="col-8">
						<input type="text" class="form-control" id="genre" name="genre">
					</div>
				</div>
				<div class="form-group row">
					<label for="publisher" class="col-4">Publisher</label>
					<div class="col-8">
						<input type="text" class="form-control" id="publisher" name="publisher">
					</div>
				</div>
				<div class="form-group row">
					<label for="share_to_pub" class="col-4">Share To Publisher</label>
					<div class="col-8">
						<input type="text" class="form-control" id="share_to_pub" name="share_to_pub">
					</div>
				</div>
				<div class="form-group row">
					<label for="pages" class="col-4">Number of pages</label>
					<div class="col-8">
						<input type="text" class="form-control" id="pages" name="pages">
					</div>
				</div>
				<div class="form-group row">
					<label for="price" class="col-4">Price</label>
					<div class="col-8">
						<input type="text" class="form-control" id="price" name="price">
					</div>
				</div>
				<div class="form-group row">
					<label for="book_cnt" class="col-4">Book Count</label>
					<div class="col-8">
						<input type="text" class="form-control" id="book_cnt" name="book_cnt">
					</div>
				</div>
				<button type="submit" class="btn btn-primary">New Book</button>
			</form>
		</div>
	</div>
</div>

<?php include "footer.php" ?>
