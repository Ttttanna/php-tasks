<!DOCTYPE html>
<html>
<head>
 <title>Form</title>
 <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1 class="h1-func">Funny functions!</h1>
<div class="content-func">
<p>Strings are very interesting? but functions are the way more entertaining! There are five funny fiunctions  - 
<ul>
<li>Trimmed - deletes spaces from the string</li>
<li>Find words - looking for words with 3 or 5 length</li>
<li>Palindrome - defines the string as palindrome or not</li>
<li>Biggest word - finds the biggest word in the string</li>
<li>Count letters - counts uppercase and lowercase letters</li>
</ul>
</p>
<p>Write your string and choose a function and have fun!</p>

</div>




<form action="" method="POST">
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

<?php 
include 'functions.php';
['string' => $str, 'function' => $func] = $_POST;
$answer = $func($str);
?>

<h1 class="answer"><?=$answer?></h1>



</body>
</html>