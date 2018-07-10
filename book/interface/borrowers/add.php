<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
    $id = mysqli_real_escape_string($mysqli, $_POST['bor_id']);
	$startdate = mysqli_real_escape_string($mysqli, $_POST['bor_from_date']);
	$enddate = mysqli_real_escape_string($mysqli, $_POST['bor_to_date']);
	$days = mysqli_real_escape_string($mysqli, $_POST['act_ret_date']);
	$stuffid = mysqli_real_escape_string($mysqli, $_POST['stuff_id']);
		$bookid = mysqli_real_escape_string($mysqli, $_POST['book_id']);
		
	// checking empty fields
	if(empty($id) || empty($startdate) || empty($enddate) ||empty($days) || empty($stuffid)|| empty($bookid)) {
	    if(empty($id)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
				
		if(empty($startdate)) {
			echo "<font color='red'>startdate field is empty.</font><br/>";
		}
		
		if(empty($enddate)) {
			echo "<font color='red'>enddate field is empty.</font><br/>";
		}
		if(empty($days)) {
			echo "<font color='red'>days field is empty.</font><br/>";
		}
		
		if(empty($stuffid)) {
			echo "<font color='red'>stuffid field is empty.</font><br/>";
		}
		if(empty($bookid)) {
			echo "<font color='red'>bookid field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO `cs_forum`.`borrower_details` (`bor_id`, `bor_from_date`, `bor_to_date`, `act_ret_date`, `stuff_id`, `book_id`) VALUES ('$id', '$startdate', '$enddate', '$days', '$stuffid', '$bookid');");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
