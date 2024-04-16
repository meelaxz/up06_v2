<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая 8</title>
    <link rel="stylesheet" href="./main.css ">
</head>
<body>
    
<header>
<?
    include 'header.php';
?>
    <p>Практическая 8</p>
</header>
<div class="ex">
    <a href="page8.php" >Задание 1</a>
    <a  style="    text-decoration: underline;
"   text-decoration: underline;
 href="page8ex2.php" >Задание 2</a>
    <a href="page8ex3.php" >Задание 3</a>
</div>

<div class="container">

    <div class="containerTop">
            <div>
                <h2>Практическая 8</h2>
                <h3>Задание 2</h3>
            </div>

        </div>

        <div class="containerImage">
            <img src="./images/page8ex2.png" alt="">
        </div>

        <div class="containerBottom">
            <form method="POST" action="#">
            <input type="number" name="num1" id="num1" placeholder="Число 1" required>
            
            <input type="number" name="num2" id="num2"  placeholder="Число 2" required>
            
            <input type="number" name="num3" id="num3"  placeholder="Число 3" required>
            
            <input type="submit" id="submit" value="Найти">
        </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $min = min($num1, $num2, $num3);
        $max = max($num1, $num2, $num3);
        $all = $num1 + $num2 + $num3;
        echo "<p>Вы ввели числа : $num1, $num2, $num3</p>";
        echo "<p>Наименьшее:</p>";
        echo "<p>$min</p>";
    }
    ?>
        </div>
</div>

</body>
</html>
