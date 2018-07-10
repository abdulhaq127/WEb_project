      <?php
require_once("../headfootsidetop/Header.php");



?>

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
<!--content-->
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
<!--start bookdetails-->
 <div class="box-content">
  
		
		<form action="../../data/class.post_curd.php" method="post">
			 <table class="table table-hover">
                            <tr>
                                <td>Book ID</td>
                                <td><input type="text" class="form-control" name="book_id" placeholder="Enter Book ID"></td>
                            </tr>
                            <tr>
                                <td>Book Name</td>
                                <td><input type="text" class="form-control" name="book_title" placeholder="Enter Book Name"></td>
                            </tr>
                            <tr>
                                <td>Language</td>
                                <td><input type="text" class="form-control" name="language" placeholder="Enter Book Language"></td>
                            </tr>
                            <tr>
                                <td>No_of_Actual</td>
                                <td><input type="text" class="form-control" name="no_copies_actual" placeholder="Enter actual book"></td>
                            </tr>
                            <tr>
                                <td>No_Of_Current</td>
                                <td><input type="text" class="form-control" name="no_copies_current" placeholder="Enter current Book"></td>
                            </tr>
                            <tr>
                                <td>Category_ID</td>
                                <td><input type="text" class="form-control" name="category_id" placeholder="Enter Book category"></td>
                            </tr>
                            <tr>
                                <td>copyed_ID</td>
                                <td><input type="text" class="form-control" name="binding_id" placeholder="Enter Book copyed_ID"></td>
                            </tr>
                            <tr>
                                <td>Shelf_id</td>
                                <td><input type="text" class="form-control" name="shelf_id" placeholder="Enter Book Shelf"></td>
                            </tr>
                            <tr>
                                <td>Author_id</td>
                                <td><input type="text" class="form-control" name="author_id" placeholder="Enter Book Author_ID"></td>
                            </tr>
                            <tr>
                                <td>Publisher_id</td>
                                <td><input type="text" class="form-control" name="pub_id" placeholder="Enter Book Publisher_ID"></td>
                            </tr>
				<tr>
					<td></td>
					<td><input type="submit" name="post" value="Create Post"/> </td>
				</tr>
			</table>
		</form>
		
	</div>
		
	        <?php 
    require_once("../headfootsidetop/footer.php");
    ?>

<?php
require_once("../headfootsidetop/Js.php");
?>