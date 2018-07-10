<?php
// including the database connection file
error_reporting(0);
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['bor_id']);
	
	$startdate = mysqli_real_escape_string($mysqli, $_POST['bor_from_date']);
	$enddate = mysqli_real_escape_string($mysqli, $_POST['bor_to_date']);
	$days = mysqli_real_escape_string($mysqli, $_POST['act_ret_date']);
	$stuffid = mysqli_real_escape_string($mysqli, $_POST['stuff_id']);	
	$bookid = mysqli_real_escape_string($mysqli, $_POST['book_id']);	
	
	// checking empty fields
	if(empty($startdate) || empty($enddate) ||empty($days) || empty($stuffid)|| empty($bookid)) {	
			
		if(empty($startdate)) {
			echo "<font color='red'>startdate field is empty.</font><br/>";
		}
		
		if(empty($enddate)) {
			echo "<font color='red'>Enddate field is empty.</font><br/>";
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
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE borrower_details SET id='$id', bor_from_date='$startdate',bor_to_date='$enddate',act_ret_date='$days',stuff_id='$stuffid',book_id='$bookid' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['bor_id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM borrower_details WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$id=$res['bor_id'];
	$startdate = $res['bor_from_date'];
	$enddate = $res['bor_to_date'];
	$days = $res['act_ret_date'];
	$stuffid = $res['stuff_id'];
	$bookid = $res['book_id'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
		    <tr> 
				<td>ID</td>
				<td><input type="text" name="bor_id" value="<?php echo $id;?>"></td>
			</tr>
			<tr> 
				<td>Start Date</td>
				<td><input type="text" name="bor_from_date" value="<?php echo $startdate;?>"></td>
			</tr>
			<tr> 
				<td>End Date</td>
				<td><input type="text" name="bor_to_date" value="<?php echo $enddate;?>"></td>
			</tr>
			<tr> 
				<td>Days</td>
				<td><input type="text" name="act_ret_date" value="<?php echo $days;?>"></td>
			</tr>
			<tr> 
				<td>Stuff ID</td>
				<td><input type="text" name="stuff_id" value="<?php echo $stuffid;?>"></td>
			</tr>
			<tr> 
				<td>Book ID</td>
				<td><input type="text" name="book_id" value="<?php echo $bookid;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['bor_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
