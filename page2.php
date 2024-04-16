<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая 2</title>
    <link rel="stylesheet" href="./main.css ">
</head>
<body>
    
<header>
<?
    include 'header.php';
?>
    <p>Практическая 2</p>
</header>


<div class="container">
<?
    $name = 'Bagurin Daniil';
    $group = '446';
    $school = 'GAPOY NIT';
    $otdelenie = 'АИТ';
    $komisia = 'ЦМК отделения АИТ';
    $predmet = 'Мдк 06';
    $class = '307';
    $professor = 'Imamov R.I';
?>

<div class="containerTop">
        <div>
        <h2>Выполнил: </h2>
        <h3><? echo $name; ?></h3>
        </div>
        <p>Web designer</p>
    </div>
    <div class='containerImage'>
    <img src="./images/Ellipse 12.png" alt="">
    </div>
    <hr>
    <div class="containerBottom">
        <p>Студент Группы - <?= $group; ?></p>
        <p>Обучаюсь - <?= $school; ?></p>
        <p>Преподователь - <?= $professor; ?></p>
        <p>Предмет - <?= $predmet; ?></p>
        <p>Кабинет - <?=$class;?></p>
        <p>Демартамент - <?=$komisia;?></p>
    </div>



</div>
</body>
</html>
