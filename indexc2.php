<?php
	
	if($_POST){
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$handle = fopen("comments2.php","a");
		fwrite($handle, "<b><i>" . $name . "</b></i> said:<br />" . $comment . "<br /><br />" );
		fclose($handle);
	}
?>	
	
	


<!doctype html>
<html>
	<head>
		<title>Chat with Hospital Administartor</title>
		<meta charset="UTF-8">
	</head>	
	<body>
	
	
		<h1>Chat Page</h1>
		<form action="" method="POST">
			Name: <br /> <input type="text" name="name"> <br />
			Type Message Here: <br /><textarea rows="10" cols="30" name="comment"></textarea><br /><br />
			<input type="submit" value="Send Message">
			
		</form>
		<hr>
		<h1>Chats:</h1>
		<?php
			include "comments2.php";
		?>
		
	</body>	
		
	
</html>	
