<form action="" method="post">
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
    <button type="submit">Save</button>
</form>

<?php
require_once './db.php';
if (!empty($_POST)){
   $sql = "INSERT INTO `pages` (`title`, `img`, `content`, `author`, `category`)
    VALUES ('{$_POST['title']}', '{$_POST['img']}', '{$_POST['content']}', '{$_POST['author']}', 
    '{$_POST['category']}')
";
   mysqli_query($connection, $sql);
}
