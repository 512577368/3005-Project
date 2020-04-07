<?php
	session_start();

	function getConn() {
		try {
			$dbh = new PDO('mysql:host=localhost;dbname=book_store;charset=utf8', 'root', '');
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $dbh;
		} catch(PDOException $e) {
			die();
		}
	}

	function pdo($pdo, $sql, $args = NULL) {
		if(!$args) {
			return $pdo->query($sql);
		}

		$stmt = $pdo->prepare($sql);
		$stmt->execute($args);
		return $stmt;
	}

	function get_get_param($param_name) {
		if(!isset($_GET[$param_name])) {
			return "";
		} else {
			return trim($_GET[$param_name]);
		}
	}

	function get_post_param($param_name) {
		if(!isset($_POST[$param_name])) {
			return "";
		} else {
			return trim($_POST[$param_name]);
		}
	}

	function show_item($items, $item_name) {
		if(!isset($items[$item_name])) {
			echo "";
		} else {
			echo $items[$item_name];
		}
	}

	function current_user() {
		return isset($_SESSION['user']) ? $_SESSION['user'] : NULL;
	}

	function set_current_user($user) {
		$_SESSION['user'] = $user;
	}

	function is_admin() {
		$user = current_user();
		return $user != NULL && $user['is_admin'] == "Y";
	}
?>
