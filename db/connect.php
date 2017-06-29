<?php 
	Class DB {
		private function getDB() {
			$dsn = 'mysql:dbname=test;host=127.0.0.1';
			$user = 'root';
			$password = '';
			try {
				$dbh = new PDO($dsn, $user, $password);
			} catch (PDOException $e) {
				echo 'Connection failed: ' . $e->getMessage();
			}
		}
	}
?>