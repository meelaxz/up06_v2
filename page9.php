<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая 9</title>
    <link rel="stylesheet" href="./main.css ">
</head>
<body>
    
<header>
<?
    include 'header.php';
?>
    <p>Практическая 9</p>
</header>

<div class="container">
<?
    
?>
    <div class="containerTop">
        <div>
            <h2>Практическая 9</h2>
            <h3></h3>
        </div>

    </div>

    <div class="containerImage">
        <img src="./images/page9ex1.png" alt="">
    </div>
  
</div>

<div class="containerBig">
<form method="post">
        <input type="text" name="name" id="name" placeholder="Имя" required>
        
        <input type="text" name="group" id="group" placeholder="Группа" required><br><br>
        
        <label for="gender">Gender:</label><br>
        <input type="radio" id="man" name="gender" value="male">

        <label for="male">Мужчина</label><br>
        <input type="radio" id="woomen" name="gender" value="female">

        <label for="female">Женщина</label><br><br>

        <label for="birthday">День:</label>
        <select name="birthday" id="birthday" required>
            <?php

            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }

            ?>
        </select><br><br>

        <label for="birthmonth">Месяц рождения:</label>
        <select name="birthmonth" id="birthmonth" required>
            <?php
            $months = ['Январь', 'Февраль', 'Март', 'Арель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'октябрь', 'Ноябрь', 'Декабрь'];
            foreach ($months as $month) {
                echo "<option value='$month'>$month</option>";
            }
            ?>
        </select><br><br>

        <label for="birthyear">Год рождения:</label>
        <select name="birthyear" id="birthyear" required>
            <?php
            $currentYear = date('Y');
            for ($year = $currentYear - 124; $year <= $currentYear - 3; $year++) {
                echo "<option value='$year'>$year</option>";
            }
            ?>
        </select><br><br>
        <label for="driver">Вы имеете водительское удостоверение?</label>
        <input type="checkbox" name="driver" id="driver"><br><br>

        <input type="submit" id = "submit"value="Расчитать">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $group = $_POST['group'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $birthmonth = $_POST['birthmonth'];
        $birthyear = $_POST['birthyear'];
        $driver = isset($_POST['driver']);

        $birthday = intval($birthday);
        $currentYear = date('Y');
        $age = $currentYear - $birthyear;
        $retirementAge = ($gender == 'male') ? 65 : 63;
        $yearsToRetirement = $retirementAge - $age;

        echo "<h2>Results:</h2>";
        echo "Имя: $name<br>";
        echo "Группа: $group<br>";
        echo "Гендер: $gender<br>";
        echo "Рождение: $birthday $birthmonth $birthyear<br>";
        echo "Возраст: $age<br>";
        echo "Лет до пенсии: $yearsToRetirement<br>";
        echo "Водительское удостоверение: " . ($driver ? 'Есть' : 'Нету');
    }
    ?>

</div>


</body>
</html>
