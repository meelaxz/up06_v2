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
    <a style="    text-decoration: underline;
" href="page8.php" >Задание 1</a>
    <a href="page8ex2.php" >Задание 2</a>
    <a href="page8ex3.php" >Задание 3</a>
</div>
<div class="container">
<?
    
?>
    <div class="containerTop">
        <div>
            <h2>Практическая 8</h2>
            <h3>Задание 1</h3>
        </div>

    </div>

    <div class="containerImage">
        <img src="./images/page8ex1.png" alt="">
    </div>

    <div class="containerBottom">

        <form method="post" action="#">

            <input type="text" name="name" id="name" placeholder="Имя" required>
            
            <input type="text" name="age" id="age" placeholder="Возраст" required>

            <select name="gender" id="gender" placeholder="Пол" required>
                <?php

                    $genders = ['Мужсой', 'Женский'];
                    foreach ($genders as $gender1) {
                        echo "<option value='$gender1'>$gender1</option>";
                    }
                    
                ?>
            </select>
            
            <input id="submit" type="submit" value="Отправить">
        </form>
    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];

            echo "Здравствуйте,  $name , Вы указали данные: Возраст   $age  и пол  $gender";
        }

?>
            </div>
            
</div>




</body>
</html>
