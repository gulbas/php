<?php
/**
 * Developed by: &nbsp;
 * Date: 12.08.2018
 */

$start = microtime(true);

$i = $y = $q = 1;

echo "<h3>GoTo</h3>";
start:
if ($i <= 10) {
    echo $i . "</br>";
    $i++;
    goto start;
}

echo "<h3>While</h3>";

while ($y <= 10) {
    echo $y . "</br>";
    $y++;
}

echo "<h3>Do...while</h3>";

do {
    echo $q . "</br>";
    $q++;
} while ($q <= 10);

echo "<h3>For</h3>";

for ($w = 1; $w <= 10; $w++)
    echo $w . "</br>";

echo "<h3>Html</h3>";

$table = "<table border='1' cellspacing='1' cellpadding='0'> ";

for ($w = 1; $w <= 10; $w++) {
    if ($w == 5) continue; // просто так break и continue тестируем
    $color = ($w % 2) ? "silver" : "white";
    $table = $table . "<tr style='background: {$color}'><td>{$w}</td><td>Данные</td></tr>";
}

$table .= "</table> </br>";

echo $table;

function deposit($money, $year, $pr)
{
    for ($i = 1; $i <= $year; $i++) {
        $profit = $money * $pr / 100;
        $money += $profit;
        $x = number_format($money);
        echo "За {$i} год ваша сумма сщставит <b>{$x} у. е.</b></br>";
    }
}

deposit(100000, 5, 5);

echo "<h3>Array</h3>";

$A = ["1", "2", "3", "4"];
$A[] = "E";
echo "Кол-во элементов в массиве" . count($A);
echo "<h4>Перебор for</h4>";
for ($i = 0; $i < count($A); $i++) {
    echo " {$i}  => {$A[$i]} </br>";
}
echo "<h4>Перебор foreach</h4>";
$B = [
    "black" => "черный",
    "white" => "белый",
    "red" => "красный",
    "orange" => "оранжевый",
    "yellow" => "желтый"
];
// Лучший вариант перебора
foreach ($B as $key => $item) {
    echo "Ключ {$key} => {$item} </br>";
}

echo "<h3>Перебор двемерного массива</h3>";

$P = [
    [1, 2],
    [3, 4]
];

foreach ($P as $key => $item)
    foreach ($item as $value2)
        echo "Ключ {$key} => {$value2} </br>";


echo "<h3>Перебор двемерного корзина</h3>";

$cart = [
    [
        "name" => "Кофеварка",
        "quantity" => 1,
        "price" => 100,
    ],
    [
        "name" => "Чайник",
        "quantity" => 2,
        "price" => 30,
    ]
];

function total($cart)
{
    $amount = 0;
    foreach ($cart as $value)
        $amount += $value["quantity"] * $value["price"];

    return $amount;
}

echo "Сумма = " . total($cart);

echo "</br>";

$F = [];
$value3 = 200;

while (true) {
    $n = rand(0, 200);
    if (!in_array($n, $F)) {
        $F[] = $n;
        if (count($F) == $value3) break;
    }
}

echo "<pre>";
print_r($F);
print_r($_SERVER);
echo "</pre>";

echo "<h3>Explode</h3>";

$text = "Белый, синий, красный";
$arr = explode(",", $text);
print_r($arr);
echo "</br>";
// Счетчик выполнения скрипта в сек.
echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 6) . ' сек.';
