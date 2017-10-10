<?php
	include "db.php";
	if (isset($_POST['submit'])) {
		$title =$_POST['title'];
		$author =$_POST['author'];
		$content=$_POST['content'];
		$sql ="INSERT INTO post(Title,Author,Content) VALUES('$title','$author','$content')";
		$exe=$con->query($sql);
		if ($exe===TRUE) {
			echo "Data insert success";
		}else{
			echo "Not insert";
		}
	}
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>insert</title>
	</head>
	<body>
		<form method="POST" action="insert.php">
			<table>
				<tr>
					<td>Title :</td>
					<td><input type="text" name="title" required></td>
				</tr>
				<tr>
					<td>Author :</td>
					<td><input type="text" name="author" required></td>
				</tr>
				<tr>
					<td>Title :</td>
					<td><textarea name="content" required></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Insert">
						<input type="submit" name="re" value="Reset">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>