<?php 
	session_start();
	include "dblogin.php";
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$sql="SELECT user,pass FROM info";
		$result=$con->query($sql);
		while($data=$result->fetch_assoc()){
			$user=$data['user'];
			$pass =$data['pass'];
			if ($username===$user AND $password===$pass) {
				header("Location:index.php");
				$_session['user']=$user;
			}else{
				echo "Not mass";
			}
		}

	}
?>
<!DOCTYPE html>
	<html>
	<head>
		<title> Log in</title>
		<style type="text/css">
			body{
				background-color: ;
			}
			.login{
				width: 300px;
				height: 180px;
				background-color: #DCDCDC;
				margin: 0px auto;
				padding: 30px;
				margin-top: -10px;
				box-shadow: 0px 0px 10px insert gray;
			}
		</style>
	</head>
	<body>
		<div class="login">
			<form method="POST" action="loginform.php">
				
			<table>
				<h3>Login</h3>
				<tr>
					<td>Username :</td>
					<td><input type="text" name="username" required=""></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit">
						<input type="reset" name="re" value="Reset">
					</td>
				</tr>
			</table>
		</form>
		</div>
	</body>
</html>