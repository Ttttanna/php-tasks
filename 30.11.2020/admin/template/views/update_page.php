<?php
//var_dump($_POST);
//var_dump($_FILES);
$sql = "UPDATE pages SET ";
foreach($_POST as $key => $value) {
	$sql .= "{$key} = '$value',";
};
if($_FILES['img']['size'] > 0) {
	$imgUrl = '/upload/'.$_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'], BASE_PATH.'/../upload/'.$_FILES['img']['name']);
	$sql .=" img = '$imgUrl' ";
	$sql .= ' where id=' .$_GET['id'];
} else {
	$sql = substr($sql, 0, -1);
	$sql .= ' where id=' .$_GET['id'];
}

//mysqli_query($connection, $sql);
$query = mysqli_prepare($connection, $sql);
mysqli_stmt_execute($query);


/*$id = $_GET['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$content = $_POST['content'];
$category = $_POST['category'];
if (isset($_FILES) && $_FILES['img']['size'] > 0) {
	  $imgUrl = '/upload/'.$_FILES['img']['name'];
		$stmt = mysqli_prepare($connection, "UPDATE pages SET title = ? , img = ? author = ? , content = ?, category = ? WHERE id = ?");
		mysqli_stmt_bind_param($stmt, "sssssd", $title, $imgUrl, $author, $content, $category, $id);
		mysqli_stmt_execute($stmt);
} else {
		$stmt = mysqli_prepare($connection, "UPDATE pages SET title = ? , author = ? , content = ?, category = ? WHERE id = ?");
		mysqli_stmt_bind_param($stmt, "ssssd", $title, $author, $content, $category, $id);
		mysqli_stmt_execute($stmt);
}*/

