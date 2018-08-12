<?php
/**
 * Developed by: &nbsp;
 * Date: 11.08.2018
 */

$auth = false;

if ($auth) {
    echo "Добро пожаловать";
} else {
    echo "Пожалуйста залогинтесь <input type='text'> </br>";
}

$x = 15;

$y = ($x > 25) ? print "да </br>" : print "нет </br>";

$q = 1;
$w = 2;

if ($q > $w) echo 1;
elseif ($q < $w) echo 2;
else echo 3;

echo "</br>";

$login = "Admin";
$password = "Черный властелин";

if ($login == "Admin" && $password == "Черный властелин")
    echo "Бобро пожаловать!";
else
    echo "Вход отменен!";

echo "</br>";

$name = "Вася";
sat_hello($name, 35);

function sat_hello($a, $s)
{
    echo "Привет меня зовут {$a} мне {$s} лет.  </br>";
}

$p = 4;
$o = 2;

echo euqal($p, $o);

function euqal($p, $o)
{
    $result = "";
    if ($p > $o) $result = "{$p} > {$o}";
    elseif ($p < $o) $result = "{$p} < {$o}";
    else  $result = "{$p} = {$o}";

    return $result;
}

echo "</br>";


function hhh($n, $a = 0)
{
    $a++;
    echo $a;
    if ($a < $n) hhh($n, $a);
}

hhh(5);
echo "</br>";
$random = rand(1, 15);
echo fff($random);

function fff($random)
{
    echo "{$random} </br>";
    if ($random == 15) {
        return false;
    }
    fff($random+ 1);
}