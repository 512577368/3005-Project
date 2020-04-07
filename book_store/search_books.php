<?php include "header.php" ?>

<!-- content -->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6">
			<form action="./list_books.php" method="POST">
				<div class="form-group">
					<label for="name">Book name</label>
					<input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="author">Author name</label>
					<input type="text" class="form-control" id="author" name="author">
				</div>
				<div class="form-group">
					<label for="isbn">ISBN</label>
					<input type="text" class="form-control" id="isbn" name="isbn">
				</div>
				<div class="form-group">
					<label for="genre">Genre</label>
					<input type="text" class="form-control" id="genre" name="genre">
				</div>
				<button type="submit" class="btn btn-primary">Find books</button>
			</form>
		</div>
	</div>
</div>

<?php include "footer.php" ?>
