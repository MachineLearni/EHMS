<?php
	
	if($_POST){
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$handle = fopen("comments.php","a");
		fwrite($handle, "<b><i>" . $name . "</b></i> said:<br />" . $comment . "<br /><br />" );
		fclose($handle);
	}
?>	
	
	


<!doctype html>
<html>
	<head>
		<title>Comment System</title>
		<meta charset="UTF-8">
	</head>	
	<body>
	
	
		<h1>Feedback From The Patients Visiting The Hospital:</h1>
		<form action="" method="POST">
			Name: <br /> <input type="text" name="name"> <br />
			Comment: <br /><textarea rows="10" cols="30" name="comment"></textarea><br /><br />
			<input type="submit" value="Post Patient Feedback">
			
		</form>
		<hr>
		<h1>Other Comments:</h1>
		<?php
			include "comments.php";
		?>
		
	</body>	
		
	
</html>	
