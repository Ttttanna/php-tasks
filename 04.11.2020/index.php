<!DOCTYPE html>
<html>
<head>
 <title>Form</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="work.php" method="POST">
  <label for="str">Enter words!</label>
  <input type="text" id="str" name="string">
	<label for="1">Trimmed</label>
	<input type="radio" id="1" name="function" value="trimmed">
	<label for="2">find words</label>
	<input type="radio" id="2" name="function" value="findWords">
	<label for="3">Palindrome</label>
	<input type="radio" id="3" name="function" value="isPalindrome">
	<label for="4">biggest word</label>
	<input type="radio" id="4" name="function" value="biggestWord">
	<label for="5">count letters</label>
	<input type="radio" id="5" name="function" value="countUpperLower">
	<button type="submit">Send</button>

</form>
</body>
</html>