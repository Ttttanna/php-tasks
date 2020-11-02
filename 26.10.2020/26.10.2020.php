<?php
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