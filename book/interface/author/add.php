<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
    $id = mysqli_real_escape_string($mysqli, $_POST['author_id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$sex = mysqli_real_escape_string($mysqli, $_POST['sex']);
	$contact = mysqli_real_escape_string($mysqli, $_POST['contact']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// checking empty fields
	if(empty($id) || empty($name) || empty($sex) ||empty($contact) || empty($email)) {
	    if(empty($id)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($sex)) {
			echo "<font color='red'>sex field is empty.</font><br/>";
		}
		if(empty($contact)) {
			echo "<font color='red'>contact field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO `cs_forum`.`author` (`author_id`, `name`, `sex`, `contact`, `email`) VALUES (' $id', '$name', '$sex', '$contact', '$email')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
