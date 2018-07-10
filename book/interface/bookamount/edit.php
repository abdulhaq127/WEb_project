<?php
// including the database connection file
error_reporting(0);
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['binding_id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['bindind_name']);
		
	
	// checking empty fields
	if(empty($name)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
				
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE binding_details SET id='$id', name='$name' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['binding_id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM binding_details WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$id=$res['binding_id'];
	$name = $res['bindind_name'];
	
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
				<td><input type="text" name="binding_id" value="<?php echo $id;?>"></td>
			</tr>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="bindind_name" value="<?php echo $name;?>"></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['binding_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
