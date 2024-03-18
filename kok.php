<!DOCTYPE html>
<html>
<head>
    <title>Проверка на четность</title>
</head>
<body>
<form method="post">
    <label>Введите число:</label><br>
    <input type="text" name="number"><br>
    <input type="submit" value="Проверить">
</form>

<?php
// Проверяем, было ли отправлено число из формы
if(isset($_POST['number'])) {
    // Получаем число из формы
    $number = $_POST['number'];

    // Проверяем, является ли число четным или нечетным
    if($number % 2 == 0) {
        echo "<p>$number - это четное число.</p>";
    } else {
        echo "<p>$number - это нечетное число.</p>";
    }
}
?>
</body>
</html>