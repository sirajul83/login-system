<?php
	session_start();
	include "db.php";
	$sql ="SELECT * FROM post";
	$show=$con->query($sql);
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>|| Home</title>
		<style type="text/css">
			.content{
				width: 1000px;
				height: 500px;
				margin: 0 auto;
			}
			.content h3{
				color: green;
			}
			.content h4{
				color: #808000;
			}
			.content a{
				text-align: right;
				display: block;
				text-decoration: none;
			}
			.content a:hover{
				color: red;

			}
		</style>
	</head>
	<body>
		<div class="content">
			<a href="logout.php">Logout</a>
			<?php
			while($data=$show->fetch_assoc()){ ?>
				<h3><?php echo $data['Title']?></h1>
				<h4><?php echo $data['Author']?></h4>
				<p><?php echo  $data['Content']?></p>
			<?php } ?>
			<a href="more.php">View more</a>
		</div>
	</body>
</html>