<div class="page-breadcrumb">
<?php 
if(!empty($_POST)) {
	if($_FILES['img']['size'] > 0) {
		$imgUrl = '/upload/'.$_FILES['img']['name'];
		move_uploaded_file($_FILES['img']['tmp_name'], BASE_PATH.'/../upload/'.$_FILES['img']['name']);
	}
}

/*$sql = "INSERT INTO `pages` (`title`, `img`, `content`, `author`, `category`)
    VALUES ('{$_POST['title']}', '{$imgUrl}', '{$_POST['content']}', '{$_POST['author']}', 
    '{$_POST['category']}')
";
mysqli_query($connection, $sql);*/
$title = $_POST['title'];
$picture = $imgUrl;
$content = $_POST['content'];
$author = $_POST['author'];
$category = $_POST['category'];
$stmt = mysqli_prepare($connection, "INSERT INTO pages (title, img, content, author, category) VALUES (?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, 'sssss', $title, $picture, $content, $author, $category);
mysqli_stmt_execute($stmt);
?>

</div>