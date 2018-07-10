
		<?php 
		include_once '../../data/class.post_curd.php';
		$id = $_GET['book_id'];
		$obj = new post_curd();
		$post = $obj->get_post($id);
	
		
		?>
		<form action="../../data/update.php?id=<?php echo $id; ?>" method="post">
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" value="<?php echo $post['book_id']; ?>" name="book_id"/> </td>
				</tr>
				<tr>
					<td>Title</td>
					<td><input type="text" value="<?php echo $post['book_title']; ?>" name="book_title"/> </td>
				</tr>
				<tr>
					<td>Language</td>
					<td><input type="text" value="<?php echo $post['language']; ?>" name="language"/> </td>
				</tr>
				<tr>
					<td>number of actual book</td>
					<td><input type="text" value="<?php echo $post['no_copies_actual']; ?>" name="no_copies_actual"/> </td>
				</tr>
				<tr>
					<td>current book</td>
					<td><input type="text" value="<?php echo $post['no_copies_current']; ?>" name="no_copies_current"/> </td>
				</tr>
				<tr>
					<td>category</td>
					<td><input type="text" value="<?php echo $post['category_id']; ?>" name="category_id"/> </td>
				</tr>
				<tr>
					<td>Binding ID</td>
					<td><input type="text" value="<?php echo $post['binding_id']; ?>" name="binding_id"/> </td>
				</tr>
				<tr>
					<td>Shelf</td>
					<td><input type="text" value="<?php echo $post['shelf_id']; ?>" name="shelf_id"/> </td>
				</tr>
				<tr>
					<td>Author</td>
					<td><input type="text" value="<?php echo $post['author_id']; ?>" name="author_id"/> </td>
				</tr>
				<tr>
					<td>publisher</td>
					<td><input type="text" value="<?php echo $post['pub_id']; ?>" name="pub_id"/> </td>
				</tr>
			
				<tr>
					<td></td>
					<td><input type="submit" name="update" value="Update Post"/> </td>
				</tr>
			</table>
		</form>
	