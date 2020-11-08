<!DOCTYPE html>
<html>
<head>
 <title>Form</title>
 <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<form action="" method="POST">
	<label>Write your text 
		<textarea name="text" cols="30" rows="10"></textarea>
</label>
	<button type="submit">Send</button>
</form>
<?php 
if($_POST['text']) {
	$string = $_POST['text'];
	print_r($string);
	$fd = fopen("write.php", 'a+') or die("не удалось открыть файл");
	fwrite($fd, $string);
}

?>

<p></p>

</body>
</html>