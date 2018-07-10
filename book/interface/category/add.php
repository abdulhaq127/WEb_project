<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
    $id = mysqli_real_escape_string($mysqli, $_POST['category_id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['category_name']);
	
		
	// checking empty fields
	if(empty($id) || empty($name)) {
	    if(empty($id)) {
			echo "<font color='red'>ID field is empty.</font><br/>";
		}
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 	
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO `cs_forum`.`category_details` (`category_id`, `category_name`) VALUES ('$id', '$name');");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
