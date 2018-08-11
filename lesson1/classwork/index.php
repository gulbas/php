<?php
/**
 * Developed by: &nbsp;
 * Date: 11.08.2018
 */

$title = "say hello";
$hello = "Hello, <b>World!</b>";

$a = (int)(3 != 1);
$b = 2 === 2.0;
$c = 0xFF; //Шиснацетеричная система счисления

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
</head>
<body>
<?php
echo $hello;
var_dump($a);
var_dump($b);
var_dump($c);
echo " 1 - правда(true), 0 лож(false)";
?>
</body>
</html>


