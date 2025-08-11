<?php
	
	if($_POST){
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$handle = fopen("comments1.php","a");
		fwrite($handle, "<b><i>" . $name . "</b></i> said:<br />" . $comment . "<br /><br />" );
		fclose($handle);
	}
?>	
	
	


<!doctype html>
<html>
	<head>
		<title>Appointement System</title>
		<meta charset="UTF-8">
	</head>	
	<body>
	
	
		<h1>The appointments made by the patient's visiting the clinic</h1>
		<form action="" method="POST">
			Name of the patient: <br /> <input type="text" name="name"> <br />
			Time and treatment service needed: <br /><textarea rows="10" cols="30" name="comment"></textarea><br /><br />
			<input type="submit" value="Make Appointment">
			
		</form>
		<hr>
		<h1>Appointment's Records:</h1>
		<?php
			include "comments1.php";
		?>
		
	</body>	
		
	
