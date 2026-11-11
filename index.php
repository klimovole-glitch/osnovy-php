<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Основы PHP - Задание 1</title>
</head>
<body>
    <h2>Мои данные:</h2>

    <?php
    // 1. Объявление переменных
    $name = "Олег"; 
    $age = 19; 
    $specialty = "Информационные системы и программирование"; 
    $college = "Новосибирский электромеханический колледж"; 
    
    // Собственная переменная
    $group = "ИСП-341"; 

    // Переменные для математики
    $a = 10;
    $b = 5;

    // 2. Вывод с помощью echo
    echo "<p><strong>Имя:</strong> " . $name . "</p>";
    echo "<p><strong>Возраст:</strong> " . $age . " лет</p>";
    echo "<p><strong>Специальность:</strong> " . $specialty . "</p>";
    echo "<p><strong>Колледж:</strong> " . $college . "</p>";
    echo "<p><strong>Группа:</strong> " . $group . "</p>";

    // 3. Математическое выражение
    echo "<p><strong>Математика:</strong> " . $a . " + " . $b . " = " . ($a + $b) . "</p>";
    ?>
</body>
</html>