<?php
/**
 * Created by PhpStorm.
 * User: nbsp
 * Date: 09.08.2018
 * Time: 21:43
 */

/*require "include.php";

echo "color = {$color}, fruits = {$fruits} </br>";

$name = $_GET['name'];
$age = $_GET['age'];

// Передаем данные в js
echo "<script>alert('Имя: {$name}, Возраст: {$age}')</script>";*/

$message = $_GET['chat'];
if (!empty($message)) {
    $file = fopen("chat.txt", "a");
    fputs($_SERVER[REMOTE_ADDR], $file, $message . "\r\n");
    header("Location: index.php");
}

?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Чат</title>
</head>
<body>
<form>
    <input type="text" name="chat" id="name">
    <input type="submit" value="Отправить">
</form>

<?php
$file = fopen("chat.txt", "r");
while (!feof($file))
    echo fgets($file) . "</br>";
?>

<script>
    document.getElementById("name").focus();
</script>
</body>
</html>
