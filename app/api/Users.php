<?php 

	Class Users  {
		function __construct() {
			$this->db = $this->getDB();
		}
		private function getDB() {
			$dbhost="localhost";
			$dbuser="root";
			$dbpass="";
			$dbname="test_join_db";
			$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
			$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $dbConnection;
		}
		public function getUsers() {
	 		$sql = "SELECT * FROM tb_persons ORDER BY firstname ASC";
	        $stmt = $this->db->query($sql); 
	        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
	        return $data;		
		}
		public function getUser($userID){
	        $sql = "SELECT * FROM tb_persons WHERE id=?";
	        $stmt = $this->db->prepare($sql); 
	        $stmt->execute(array($userID));
	        $data = $stmt->fetch(PDO::FETCH_OBJ);
	        return $data;
		}		
		public function addUser($firstname, $lastname, $position) {
	        $sql = "INSERT INTO tb_persons (firstname, lastname, position) VALUES (?,?,?)";
	        $stmt = $this->db->prepare($sql); 
	        $status = $stmt->execute(array($firstname, $lastname, $position));
	        return $status;		
		}
		public function updateUser($userID, $firstname, $lastname){
	        $sql = "UPDATE tb_persons SET firstname=?, lastname=? WHERE id=?";
	        $stmt = $this->db->prepare($sql); 
	        $status = $stmt->execute( array($firstname, $lastname, $userID) );
	        return $status;
		}		
		public function deleteUser($userID){
	        $sql = "DELETE FROM tb_persons WHERE id=?";
	        $stmt = $this->db->prepare($sql); 
	        $status = $stmt->execute(array($userID));
	        return $status;
		}		
	}

?>