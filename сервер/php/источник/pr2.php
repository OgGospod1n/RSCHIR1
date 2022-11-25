<!DOCTYPE html>
<html>
<head>
<title>Практика №2</title>
<link rel="stylesheet" href="style2.css" type="text/css"/>
<meta charset="utf-8" />
</head>
<body>
<h3>Задание 1: Круг</h3>
<form action="drawer.php" method="POST">
    <p>Радиус <input type="text" name="count" /></p>
    <input type="submit" value="Отправить данные радиуса">
</form>
<h3>Задание 2: Сортировка</h3>
<form action="sort.php" method="POST">
    <p>Массив через запятую <input type="text" name="str" /></p>
    <input type="submit" value="Начать Сортировку">
</form>
<h3>Задание 3: Командная строка</h3>
    <form action="comand.php" method="POST">
    <p>CMD<input type="text" name="command" /></p>
    <input type="submit" value="Отправить запрос">
</form>
</body>
</html>