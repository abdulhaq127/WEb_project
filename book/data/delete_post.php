<?php
include_once 'class.post_curd.php';
$post = new post_curd();
$id = $_GET['book_id'];
$post->delete_post($id);

?>