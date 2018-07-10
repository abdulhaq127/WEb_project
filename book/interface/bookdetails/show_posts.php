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
		<?php 
		include_once"../../data/class.post_curd.php";
		
		$obj= new post_curd();
		$posts =$obj->list_posts();  
		
		foreach ($posts as $post) {
		?>
		
		
		
		
		<div class="row-fluid blog">
                                <div class="span4">
                                   
                                </div>
                                <!-- <div class="span8">
                                    <div class="date">
                                        <p class="day">02</p>
                                        <p class="month">Dec</p>
                                    </div>
                                    <h2>
                                        <a href="blog_details.html"><?php echo $post['title'];?></a>
                                    </h2>
                                    <p>
                                        By <a href="javascript:;">Vector Lab</a>
                                    </p>
                                    <p>
                                        <?php echo $post['body'];?>
                                    </p>
                                    <ul>
                                        <li><a href="javascript:;"><i class="icon-comments-alt"></i> 55 Comments</a></li>
                                        <li><a href="javascript:;"><i class="icon-heart"></i> 342 Likes</a></li>
                                        <li><a href="javascript:;"><i class="icon-share"></i> 34 Shares</a></li> -->
                                        <p><?php echo $post['book_id']; ?></p>
                                         <p><?php echo $post['book_title']; ?></p>
                                          <p><?php echo $post['language']; ?></p>
                                           <p><?php echo $post['no_copies_actual']; ?></p>
                                            <p><?php echo $post['no_copies_current']; ?></p>
                                             <p><?php echo $post['category_id']; ?></p>
                                              <p><?php echo $post['binding_id']; ?></p>
                                               <p><?php echo $post['shelf_id']; ?></p>
                                                <p><?php echo $post['author_id']; ?></p>
                                                 <p><?php echo $post['pub_id']; ?></p>
                                        
										<a href="update_post.php?id=<?php echo $post['p_id']?>"><button>Update Post</button></a>
										<a href="../data/delete_post.php?id=<?php echo $post['p_id']?>"><button>Delete Post</button></a>
                                    </ul>
                                    <a href="show_details.php?id=<?php echo $post['p_id']?>" class="btn btn-info">Continue Reading</a>
                                </div>
                            </div>
                            <hr>
                            <?php }
                            
                            
                            require_once("../headfootsidetop/footer.php");
                            require_once("../headfootsidetop/Js.php");

                            ?>
                        </div>
	</body	
</html>

