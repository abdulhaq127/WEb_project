<?php
error_reporting(0);
$id = $_GET['book_id'];
include_once"../../data/class.post_curd.php";
//include'layout/header.php';
$obj= new post_curd();
$post =$obj->get_post($id);  
?>
<h4><?php echo $post['book_id'];?></h4>
<h4> <?php echo $post['book_title'];?></h4>
<h4> <?php echo $post['language'];?></h4>
<h4> <?php echo $post['no_copies_actual'];?></h4>
<h4> <?php echo $post['no_copies_current'];?></h4>
<h4> <?php echo $post['category_id'];?></h4>
<h4> <?php echo $post['binding_id'];?></h4>
<h4> <?php echo $post['shelf_id'];?></h4>
<h4> <?php echo $post['author_id'];?></h4>
<h4> <?php echo $post['pub_id'];?></h4>
	
	//include 'layout/footer.php';
	