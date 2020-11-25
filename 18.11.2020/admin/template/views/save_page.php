<div class="page-breadcrumb">
<?php 
if(!empty($_POST)) {
	if($_FILES['loaded']['size'] > 0) {
		$imgUrl = '/upload/'.$_FILES['loaded']['name'];
		move_uploaded_file($_FILES['loaded']['tmp_name'], BASE_PATH.'/../upload/'.$_FILES['loaded']['name']);
	}
}

$sql = "INSERT INTO `pages` (`title`, `img`, `content`, `author`, `category`, `loaded`)
    VALUES ('{$_POST['title']}', '{$_POST['img']}', '{$_POST['content']}', '{$_POST['author']}', 
    '{$_POST['category']}', '{$imgUrl}' )
";
mysqli_query($connection, $sql);
?>

</div>