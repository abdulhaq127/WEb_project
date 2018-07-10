<html>
<head>
<script language="javascrpt" type="text/javascript">
function post_detail(d){
//alert("this is alert");
var xtp = new XMLHttpRequest();
xtp.onreadystatechange = function(){
if(xtp.readyState ==4){
//alert("ajax alert");
document.getElementById(d).innerHTML = xtp.responseText;
}
}
xtp.open('GET','show_details.php?id='+d);
xtp.send(null);
}
</script>
</head>	

<?php
//error_reporting(0);
include"../data/class.post_curd.php";
 $obj = new post_curd();
$posts =  $obj->list_posts();


foreach($posts as $post){?>
	<h2><?php echo $post['title']?></h2>
	<div id="<?php echo $post['id']?>"
	<p><?php echo substr($post['body'],0,10)."..." ?></p></div>
	<a href="update post.php=<?php echo $post['id']?>"> <button>Update post </button> </a>
	<a href="../data/delet_post.php?id=<?php echo $post['id']?>"> <button>Delet post </button> </a>
	<button onclick="post_detail(<?php echo $post['id']?>)"> More Information </button>
<?php
	}?>

<body>

<h1>this page is about computer science class activity</h1>
<div id="axtr" >if you wanto more information click button</div>
<button id="btn" onclick="post_detail()">more_info</button>
</body>
</html>