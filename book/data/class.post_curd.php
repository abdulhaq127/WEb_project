<?php
error_reporting(0);
include_once "class.db.php";
class post_curd extends db{
	
	function create_post(){
	$bk_id=$_POST['book_id'];
	$bk_title=$_POST['book_title'];
	$lan=$_POST['language'];
	$no_c_ac=$_POST['no_copies_actual'];
	$no_c_c=$_POST['no_copies_current'];
	$cat=$_POST['category_id'];
	$bind_id=$_POST['binding_id'];
	$shf_id=$_POST['shelf_id'];
	$aut_id=$_POST['author_id'];
	$pub_id=$_POST['pub_id'];
		$query = "INSERT INTO `cs_forum`.`book_details` (`book_id`, `book_title`, `language`, `no_copies_actual`, `no_copies_current`, `category_id`, `binding_id`, `shelf_id`, `author_id`, `pub_id`) VALUES ('$bk_id', '$bk_title', '$lan', '$no_c_ac', '$no_c_c', '$cat', '$bind_id', '$shf_id', '$aut_id', '$pub_id')";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		
	}
	function list_posts(){
		$query = "Select * from book_details";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		while ($post = mysqli_fetch_assoc($result)) {
			$data[]=$post;
		}
		return $data;
	}
	function get_post($id){
	    $query = "Select * from book_details where `id`= '$bk_id'";
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
		$post = mysqli_fetch_assoc($result);
		return $post;
	}
	function update_post($id,$data){
		//$title = $data['title'];
		//$body= $data['body'];
	$bk_id=$data['book_id'];
	$bk_title=$data['book_title'];
	$lan=$data['language'];
	$no_c_ac=$data['no_copies_actual'];
	$no_c_c=$data['no_copies_current'];
	$cat=$data['category_id'];
	$bind_id=$data['binding_id'];
	$shf_id=$data['shelf_id'];
	$aut_id=$data['author_id'];
	$pub_id=$data['pub_id'];
		$query = "update `book_details` set `book_id`= '$bk_id',`book_title`= '$bk_title',language='$lan',no_copies_actual='$no_c_ac',no_copies_current='$no_c_c',category_id='$cat',binding_id='$bind_id',shelf_id='$shf_id',author_id='$aut_id',pub_id='$pub_id' where `id`=$bk_id"; 
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
	}
	function delete_post($id){
		$query = "delete from `book_details` where `id`=$bk_id"; 
		$result = mysqli_query($this->con, $query);
		if (!$result) {
			echo "You have problem with your SQL Query:".mysqli_error($this->con);
		}
	}
}
$post = new post_curd();
$post->create_post();
//echo "<pre/>";
//print_r($post->list_posts());
//print_r($post->get_post(2));
?>