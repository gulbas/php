<?php
/**
 * Created by PhpStorm.
 * User: nbsp
 * Date: 09.08.2018
 * Time: 21:43
 */

require "include.php";

echo "color = {$color}, fruits = {$fruits} </br>";

$name = $_GET['name'];
$age = $_GET['age'];

// Передаем данные в js
echo "<script>alert('Имя: {$name}, Возраст: {$age}')</script>";