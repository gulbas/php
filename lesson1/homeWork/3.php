<?php
/**
 * Created by PhpStorm.
 * User: vladilenUstinov
 * Date: 28.07.2018
 * Time: 19:28
 */

/*
 * 3. Объяснить, как работает данный код:
 */

$a = 5;
$b = '05';
var_dump($a == $b); // было преобразовано к integer 5
var_dump((int)'012345'); // строка '012345' была преобразована к числу 12345
var_dump((float)123.0 === (int)123.0); // типы не равны
var_dump((int)0 === (int)'hello, world'); // строка была преобразована в число 0

