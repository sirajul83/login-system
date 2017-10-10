<?php
	include "db.php";
	if(isset($_POST["sub"])){
		$sl=$_POST['sl'];
		$title = $_POST["title"];
		$author = $_POST["author"];
		$content = $_POST["content"];

		$sql = "UPDATE post SET Title = '$title', Author = '$author', Content = '$content'  WHERE SL='$sl' ";
		$result = $con->query($sql);
		if($con->query($sql)===TRUE){
			echo "Update";
		}else{
			echo "not update";
		}
	}

?>
<!DOCTYPE html>
	<html>
	<head>
		<title>update</title>
	</head>
	<body>
		<h2> Update Data</h2>
				<table>
					<form method="POST" action="update.php">
						<tr>
							<td>Serial :</td>
							<td>
								<input type="text" name="sl" >
							</td>
						</tr>
						<tr>
							<td>Title :</td>
							<td>
								<input type="text" name="title" >
							</td>
						</tr>
						<tr>
							<td>Author :</td>
						<td>
							<input type="text" name="author" >
						</td>
						</tr>
						<tr>
							<td>Delete :</td>
						<td>
							<textarea name="content" cols="40" rows="10">
							</textarea>
						</td>
						</tr>
						<tr>
							<td></td>
							<td>
							<input type="submit" name="sub" value="Update">
							<input type="reset" name="re" value="Reset">
						   </td>
						</tr>
					</form>
				</table>
			</section>
	</body>
</html>