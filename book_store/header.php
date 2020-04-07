<?php

$header = <<<EOD
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Onlin Book Store</title>
  </head>
  <body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="./search_orders.php">Search order</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="./list_orders.php">Orders</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="./search_books.php">Search book</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="./list_books.php">Books</a>
				</li>
	    	</ul>
	  	</div>
	</nav>
EOD;

echo $header;
?>