<?php
var_dump($_POST);
var_dump($_FILES);
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


$query = mysqli_prepare($connection, $sql);
mysqli_stmt_execute($query);

