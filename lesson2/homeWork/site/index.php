<?php
/**
 * Created by PhpStorm.
 * User: nbsp
 * Date: 02.08.2018
 * Time: 20:12
 */

/*
5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи
встроенных функций PHP. Шаблон должен читаться из файла tpl, в нем не должно быть ни строчки php-кода.
Весь код в index.php.
*/

date_default_timezone_set("Europe/Moscow");
define("TEMPLATES_PATH", "./templates/");
define("IMG_PATH", "./images/");

// Подготивми пути к шаблонам
$site = file_get_contents(TEMPLATES_PATH . "site.tpl");
$footer = file_get_contents(TEMPLATES_PATH . "footer.tpl");

//Подготовим переменные
$Title = "Главная страница - страница обо мне";
$About = "Информация обо мне";
$Article = "Краткая биография обо мне
           Родился в 1985 году в городе Москва. Закончил в 2008 году МАИ.
           На данный момент работаю ведущим инженером в крупной авиакомпании.
           Поскольку я люблю авиацию, то хотел бы поделиться несколькими интересными 
           фотографиями на эту тему";
$image_name = "private_jet.jpg";
$Year = date("Y");
$Image = "<img src='" . IMG_PATH . $image_name . "' alt='Private Jet' >";

// Вставим главный шаблон
$site = str_replace("{{TITLE}}", $Title, $site);
$site = str_replace("{{ABOUT}}", $About, $site);
$site = str_replace("{{ARTICLE}}", $Article, $site);
$site = str_replace("{{IMAGE}}", $Image, $site);

// Вставим дату в шаблон footer.tpl
$footer = str_replace("{{YEAR}}", $Year, $footer);
// Вставим шаблон footer.tpl в главный шаблон
$site = str_replace("{{FOOTER}}", $footer, $site);


echo $site;


