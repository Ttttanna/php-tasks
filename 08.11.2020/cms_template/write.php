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
	$string = $_POST['text'];
	$fd = fopen("text.txt", 'a+') or die("не удалось открыть файл");
	fwrite($fd, $string);
	fclose($fd);
	$content = file_get_contents("text.txt");
?>

<p><?=$content?></p>

</body>
</html>