<?php
error_reporting(0);
require_once("../headfootsidetop/Header.php");

?>

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <?php
            require_once("../headfootsidetop/TopBar.php");
        ?>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <?php
            require_once("../headfootsidetop/Sidebar.php");
        ?>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            

            <div>
                <!-- <ul class="breadcrumb">
                    <li>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                </ul> -->
            </div>

            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-star-empty"></i> Contents</h2>

                            <div class="box-icon">
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round btn-default"><i
                                        class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content">






<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM category_details ORDER BY binding_id DESC"); // using mysqli_query instead
?>


<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
	    <td>Category ID</td>
		<td>Name</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['category_id']."</td>";
		echo "<td>".$res['category_name']."</td>";
			
		echo "<td><a href=\"edit.php?id=$res[category_id]\">Edit</a> | <a href=\"delete.php?id=$res[category_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
				
	}
	?>
	</table>




	 <?php 
    require_once("../headfootsidetop/footer.php");
    ?>

<?php
require_once("../headfootsidetop/Js.php");
?>

</div>
</body>
</html>
