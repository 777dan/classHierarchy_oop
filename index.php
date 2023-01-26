<?php
include "Person.php";
$person = new Person("Григорий", "Мужской");
$citizen = new Citizen("Григорий", "Мужской", "Украина", "Харьков");
$student = new Student("Григорий", "Мужской", "Украина", "Харьков", "Фармацевтический");
$employee = new Employee("Григорий", "Мужской", "Украина", "Харьков", "Адвокат");
include "output.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hierarchy</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <input type="submit" name="person" value="Человек">
        <input type="submit" name="citizen" value="Гражданин">
        <input type="submit" name="student" value="Студент">
        <input type="submit" name="employee" value="Сотрудник">
    </form>
</body>

</html>