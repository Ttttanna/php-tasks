<form action="" method="post" enctype="multipart/form-data">
	<label> Title
		<input type="text" name="title" />
</label>
		<br>
		<label>Image
		<input type="text" name="img" />
</label>
		<br>
		<label>Content
		<textarea name="content" id="" cols="30" rows="10"></textarea>
</label>
		<br>
		<label>Author
		<input type="text" name="author" />
</label>
		<br>
		<label>Category
		<input type="text" name="category" />
</label>
		<br>
		<input type="file" name="loaded" value />
    <button type="submit">Save</button>
</form>

<?php
require_once './db.php';

if ( $_FILES['loaded']['error'] == UPLOAD_ERR_OK ) {
	$uploaddir = 'upload/';
  $uploadfile = $uploaddir . basename($_FILES['loaded']['name']);
	move_uploaded_file( $_FILES['loaded']['tmp_name'], $uploadfile );
	}
if (!empty($_POST)){
   $sql = "INSERT INTO `pages` (`title`, `img`, `content`, `author`, `category`, `loaded`)
    VALUES ('{$_POST['title']}', '{$_POST['img']}', '{$_POST['content']}', '{$_POST['author']}', 
    '{$_POST['category']}', '{$uploadfile}' )
";
   mysqli_query($connection, $sql);
}
