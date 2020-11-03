<?php
//в строке оставить по одному пробелу между словами, обрезать пробелы в конце строки, если есть пробелы в начале - оставить. Если строка только из пробелов вывести пробелы

function trimmed($str) {
	if(ctype_space($str)) {
		return $str;
	} else {
		$str1 = ltrim($str);
		$pos = mb_strpos($str, $str1);

		while( strpos($str1,"  ")!==false) {
			$str1 = str_replace("  ", " ", $str1);
		}

		if($pos) {
			return str_repeat(" ", $pos).$str1;
		} else {
			return $str1;
		}
	}
}

//2 в произвольном тексте найти и вывести все слова длинна которых не менее трех и не более пяти символов
function findWords($string) {
	$arr = explode(" ", $string);

  foreach($arr as $index) {
      if (mb_strlen($index) >= 3 && mb_strlen($index) <=5 ) {
          return $index;
      }
  }
}

// 3 из строки удалить все пробелы, определить является ли она полиндромом
function isPalindrome($string) {
	$str1 = mb_strtolower(mb_str_replace(" ", "", $string));
	if ($str1 === strrev($str1)) {
		return "$str1 is  a palindrome";
	} else {
		return "$str1 is not a palindrome";
	}
}

// 4 найти самое длинное слово и вывести его на экран
function biggestWord($string) {
	$arr = explode(' ', $string);
	$biggest = $arr[0];
	foreach($arr as $index) {
		if (mb_strlen($index) > mb_strlen($biggest)) {
			$biggest = $index;
		}
	}
	return $biggest;
}

// 5 посчитать количество строчных и прописных букв
function countLetters($string) {
	$str1 = str_replace(" ", '', $string);
  $arr = str_split($str1);
  $upp = 0;
	$low = 0;
	
	foreach($arr as $index) {
    if(ctype_upper($index)) {
        $upp++;
    } else {
        $low++;
    }
    
 }
 return $upp.'<br/>'.$low;

}// работает только для латиницы

//для кириллицы и латиницы
function countUpperLower($str) {
	$str1 = preg_replace('/[А-ЯЁA-Z]/u', '', $str);
	$upper = mb_strlen($str) - mb_strlen($str1);
	$str2 = preg_replace('/[a-zа-яё]/u', '', $str);
	$lower = mb_strlen($str) - mb_strlen($str2);
	return "Прописных букв $upper"." строчных букв $lower";
}