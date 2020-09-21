<?php 

class org{
	public function fetch_all(){
		global $con;
		$query = $con->prepare("SELECT * FROM organization");
		$query->execute();
		return $query->fetchAll();
	}	


	public function fetch_data($email){
		global $con;
		$query = $con->prepare("SELECT * FROM user WHERE  email=? ");
		$query->bindValue(1, $email);
		$query->execute();
		return $query->fetch();
	}

}

 ?>