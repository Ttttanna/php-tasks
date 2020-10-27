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

//Arrays
//1.Сумма положительных четных элементов массива
$array = [1,-2,-3, 10, 2,-1, 3, 13, 9];
$sum = 0;
foreach( $array as $num ){
    if ($num > 0 && $num % 2 === 0) {
        $sum+=$num;
    }
}

print_r($sum);

//2.Максимальное значение среди четных индексов
$maxElement = 0;
$count = count($array);
for ($i = 0; $i <= $count; $i++, $i++) {
    if ($array[$i] < $array[$i + 2]) {
        $maxElement = $array[$i+2];
    } else {
        $maxElement = $array[$i];
    }
}

print_r($maxElement); // выводится ошибка изза того что я обращаюсь к элементу массива которого нет

// 3.Элементы массива которые меньше среднеарифметического
$middleSum = array_sum($array)/$count;
foreach( $array as $index) {
    if ($index < $middleSum) {
        var_dump($index);
    }
}

// 4.два минимальных элемента массива
sort($array, SORT_NUMERIC);
var_dump($array[0]);
var_dump($array[1]);

//5.Cжать массив удалив элементы чье значение в интервале [0, 3], дополнить до длины нулями
for ($i = 0; $i < $count; $i++) {
	if($array[$i] >= 0 && $array[$i] <= 3) {
		array_splice($array, $i, 1);
		$i--;
	}
}
array_pad($array, $count, 0);