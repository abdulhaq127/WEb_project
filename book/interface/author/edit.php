<?php
// including the database connection file
error_reporting(0);
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['author_id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$sex = mysqli_real_escape_string($mysqli, $_POST['sex']);
	$contact = mysqli_real_escape_string($mysqli, $_POST['contact']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// checking empty fields
	if(empty($name) || empty($sex) ||empty($contact) || empty($email)) {	
			
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
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE author SET id='$id', name='$name',sex='$sex',contact='$contact',email='$email' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['author_id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM author WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$id=$res['author_id'];
	$name = $res['name'];
	$sex = $res['sex'];
	$contact = $res['contact'];
	$email = $res['email'];
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
				<td><input type="text" name="author_id" value="<?php echo $id;?>"></td>
			</tr>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Sex</td>
				<td><input type="text" name="sex" value="<?php echo $sex;?>"></td>
			</tr>
			<tr> 
				<td>Contact</td>
				<td><input type="text" name="contact" value="<?php echo $contact;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['author_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
