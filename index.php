<?php session_start(); ?>

<?php 


	include 'inc/conn.php';
    
	if(isset($_SESSION['logged_in'])){		
		echo '<script> window.location = "index.php"; </script>';
	}

		if (isset($_POST['username'],$_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			if (empty($username) or empty($password)) {
				$Error = 'All fileds are required !';
			}else{
				$query = $con->prepare("SELECT * FROM admin WHERE username=? AND password=? ");
				$query->bindValue(1,$username);
				$query->bindValue(2,$password);
				$query->execute();
				$num = $query->rowcount();
				if($num==1){
					$_SESSION['logged_in'] = true;
					$_SESSION['user_name'] = $_POST['username'];
					echo '<script> window.location = "ruselt.php"; </script>';
					exit;
				}else{
					$Error= 'Worng Password';
				}
			}
		}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body style="background-color:#0B243B;" >
	<div class="logsingup">		
		<div class="lsfrom">
			<div class="user"><img src="img/user.png"></div>
			<form action="" method="post">				
				<input type="text" name="username" placeholder="&#9993; Username" >
				<input type="password" name="password" placeholder="&#x1F512; Password" >
				<input type="submit" name="login" value="Log In" >
			</form>
			
			<?php 
				if (isset($Error)) {
					echo "<p style='color:red'>".$Error."</p>";
				}
			?>


		</div>
	</div>
</body>
</html>



