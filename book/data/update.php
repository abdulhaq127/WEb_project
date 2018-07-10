<?php
include_once 'class.post_curd.php';
$post = new post_curd();
$id = $_GET['book_id'];
$data = array(
	'book_id'=>$_POST['book_id'],
	'book_title'=>$_POST['book_title'],
	'language'=>$_POST['language'],
	'no of actual book'=>$_POST['no_copies_actual'],
	'no of current book'=>$_POST['no_copies_current'],
	'category'=>$_POST['category_id'],
	'binding'=>$_POST['binding_id'],
	'shelf'=>$_POST['shelf_id'],
	'author'=>$_POST['author_id'],
	'publisher'=>$_POST['pub_id'],
);
$post->update_post($id,$data);


?>