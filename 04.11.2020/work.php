<?php
include './functions.php';

['string' => $str, 'function' => $func] = $_POST;
echo ($func($str));