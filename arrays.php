<?php
//1
$arr = ['Acana', 'Purina', 'Farmina', 'Josera', 'Sanal'];
$arrReverse = array_reverse($arr);
print_r($arrReverse);

//2
$food = array_slice($arr, 0, 3);
print_r($food);

//3
$arr2 = ['123', '233', 5, '5', 5, '111', 111];
$unique = array_unique($arr2);
$uniq2 = array_unique($arr2, SORT_REGULAR);
print_r($unique);
print_r($uniq2);

//4
$arrMerge = array_merge($arr, $arr2);
print_r($arrMerge);

//5 
$arr3 = [
	'apple'=> 3,
	'orange' => 8,
	'garlic' => 1,
	'cherry' => 12,
	'onion' => 28,
];

var_dump( array_key_exists('apple', $arr3));


// Домашка за которую мне ноль за списывание
$products = [
	['name' => 'pencil', 'active'=> true, 'price'=>'5'],
	['name' => 'pen', 'active'=> false, 'price'=>'3'],
	['name' => 'rubber', 'active'=> true, 'price'=>'8'],
	['name' => 'bag', 'active'=> false, 'price'=>'6'],
	['name' => 'hat', 'active'=> false, 'price'=>'15'],
	['name' => 'skirt', 'active'=> true, 'price'=>'22'],
	['name' => 'shirt', 'active'=> true, 'price'=>'18'],
	['name' => 'trenchcoat', 'active'=> true, 'price'=>'139'],
	];
	$count = count($products);
	foreach($products as $product){
	
	if($product['active'] === true) {
		echo 'Товар '.$product['name'].' есть в наличии. Цена -  '.$product['price'].' руб'.'<br>';
	} else {
		echo 'Товар '.$product['name'].' отсутствует '.'<br>';
	}
	};

	for ( $i = 0; $i < $count; $i++) 
	{
		if ($products[$i]['active'] === true) {
			echo 'Товар '.$products[$i]['name'].' есть в наличии. Цена -  '.$products[$i]['price'].' руб'.'<br>';
		} else {
			echo 'Товар '.$products[$i]['name'].' отсутствует '.'<br>';
		}

	}

//