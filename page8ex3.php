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
    <a style="" href="page8ex2.php" >Задание 2</a>
    <a style='    text-decoration: underline;
'href="page8ex3.php" >Задание 3</a>
</div>
<div class="container">
<?
    
?>
    <div class="containerTop">
        <div>
            <h2>Практическая 8</h2>
            <h3>Задание 3</h3>
        </div>

    </div>

    <div class="containerImage">
        <img src="./images/page8ex3.png" alt="">
    </div>

    <div class="containerBottom">
    <form method="post">
        <input type="text" name="inputString" id="inputString" placeholder="Введите текст" required>
        
        <input id="submit" type="submit" value="Изменить">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST['inputString'];   

        $outputString = str_replace(['а', 'к'], ['о', 'н'], $inputString);

        echo "<p>Оригинальный текст</p>";
        echo "<p>$inputString;</p>";
        
        echo "<p> Измененный текст </p>";
        echo "<p>$outputString ;</p";
    }
    ?>
    </div>
            
</div>




</body>
</html>
