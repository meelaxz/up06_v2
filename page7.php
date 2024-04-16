<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая 7</title>
    <link rel="stylesheet" href="./main.css ">
</head>
<body>
    
<header>
<?
    include 'header.php';
?>
    <p>Практическая 7</p>
</header>




<div class="container">
<?
    $x=10;
    $y=5;
?>
    <div class="containerTop">
        <div>
            <h2>Операторы сравнения</h2>
            <h3>Задание 1</h3>
        </div>
        <p>x = 10 <br>
            y = 5</p>


    </div>
    <div class="containerImage">
        <img src="./images/page7ex1.png" alt="">
    </div>
    <div class="containerBottom">
            <p> Большее число - <?
            if($x > $y){ echo $x;}
            else{ echo $y; }?> </p>
        </div>
</div>

<div class="container">
<?
    $x=10;
    $y=5;
    $z=0;
    


?>
    <div class="containerTop">
        <div>
            <h2>Операторы сравнения</h2>
            <h3>Задание 2</h3>
        </div>
        <p>x = 10 <br>
            y = 5 <br>
            z = 0
        </p>


    </div>
    <div class="containerImage">
        <img src="./images/page7ex2.png" alt="">
    </div>
    <div class="containerBottom">
            <p><?
            if($x % 2 == 0)
            { echo $x .' - положительное';}
            elseif($x % 2 == 1)
            { echo $x; ' - отрицательное';}
            else{
                echo 'Равно нулю';
            }
            ?> </p>
            <p><?
            if($y % 2 == 0)
            { echo $y .' - положительное';}
            elseif($y % 2 == 1)
            { echo $y .' - отрицательное';}
            else{
                echo ' Равно нулю';
            }
            ?> </p>
            <p><?
            if($z % 2 == 0)
                if ($z == 0){
                    echo $z .' - равно нулю';
                }else{
                    { echo $z .' - положительное';}
                }
            elseif($z % 2 == 1)
            { echo $z .' - отрицательное';}
            elseif ($z == 0){
                echo $z .' - равно нулю';
            }
            ?> </p>
            
        </div>
</div>

<div class="container">
<?
    
?>
    <div class="containerTop">
        <div>
            <h2>Операторы сравнения</h2>
            <h3>Задание 3</h3>
        </div>
        <p>*login - Nit<br>
            *pass - номер группы</p>

    </div>

    <div class="containerImage">
        <img src="./images/page7ex3.png" alt="">
    </div>

    <div class="containerBottom">

    <form action="#" method="POST">
        <input type="text" id="" name="login" placeholder="login">
        <input type="text" id="" name="pass" placeholder="password">
        <input type="submit" id="submit" name="submit" value="Вход">

    </form>

            <?
                $login1 = 'Nit';
                $pass1 = '446';

                if(isset($_POST["submit"])){

                    $login = trim($_POST["login"]);
                    $pass = trim($_POST["pass"]);
                    if($login == $login1){
                        if($pass == $pass1){
                            echo"<p>Вход выполнен</p>";
                        }else{
                            echo"<p>Неверный пароль</p>";
                        }
                    }
                    else{
                        echo"<p>Неверный логин</p>";
                    }

                }
            ?>  

            </div>
</div>


    <div class="container Info">
    <div class="containerTop">
        <div>
            <h2>Контрольные вопросы</h2> 

            <div class="infoName">
                <h3>1 Что такое оператор в языках программирования?</h3> 
                <img src="./images/arrowButton.svg" alt="" onclick="showP1()">
            </div>
        
            <div class="answer" id='infoNameP1'>
                <p >Оператор в языках программирования - это конструкция, которая выполняет определенное действие или операцию. Операторы используются для управления потоком выполнения программы, выполнения арифметических операций, присваивания значений переменным, сравнения значений и многих других задач. Например, условные операторы (if, else), циклы (for, while).</p> 
                <img src="./images/arrowButton2.svg" alt="" onclick="noneP1()">
            </div>
            
            <div class="infoName">
                <h3>2 Какие операторы вам известны в РНР?</h3>   
                <img src="./images/arrowButton.svg" alt="" onclick="showP2()">
            </div>

            <div class="answer" id='infoNameP2'>
            <p  >Арифметические операторы: + (сложение), - (вычитание), * (умножение), / (деление), % (остаток от деления).
                Операторы присваивания: = (присваивание), +=, -= и другие.
                Операторы сравнения: == (равно), != (не равно), > (больше), < (меньше) и другие.
                Логические операторы: && (логическое И), || (логическое ИЛИ), ! (логическое НЕ).
                Операторы инкремента и декремента: ++ (инкремент), -- (декремент).
                Строковые операторы: . (конкатенация строк).
                Побитовые операторы: & (побитовое И), | (побитовое ИЛИ), ^ (побитовое исключающее ИЛИ) и другие.
                Оператор проверки типа: instanceof (проверка принадлежности объекта к классу).</p>                <img src="./images/arrowButton2.svg" alt="" onclick="noneP2()">
            </div>
            
            <div class="infoName">
                <h3>3 Что собой представляет условный оператор?</h3>  
                <img src="./images/arrowButton.svg" alt="" onclick="showP3()"> 
            </div>
            
            <div class="answer" id='infoNameP3'>
                <p  >Условный оператор в PHP представляет собой конструкцию, которая позволяет выполнять определенные действия в зависимости от выполнения определенного условия. Он используется для управления потоком выполнения программы. Например, с помощью условного оператора можно выполнить определенный код, если переменная имеет определенное значение.</p>
                <img src="./images/arrowButton2.svg" alt="" onclick="noneP3()">
            </div>

            <div class="infoName">
                <h3>4 Что собой представляет оператор варианта?</h3>    
                <img src="./images/arrowButton.svg" alt="" onclick="showP4()">
            </div>

            <div class="answer" id='infoNameP4'>
                <p >Оператор варианта в PHP представляет собой конструкцию switch, которая позволяет выбирать действие для выполнения из множества вариантов в зависимости от значения выражения. Он позволяет сравнивать выражение с различными вариантами (case) и выполнять соответствующий блок кода для первого совпадающего варианта. Оператор варианта включает в себя ключевые слова switch, case, break.
                </p>
                <img src="./images/arrowButton2.svg" alt="" onclick="noneP4()">
            </div>

            

            <div class="infoName">
                <h3>5 Конструкции в РНР для описания оператора варианта и условного оператора?</h3>    
                <img src="./images/arrowButton.svg" alt="" onclick="showP5()">
            </div>

            <div class="answer" id='infoNameP5'>
                <p >Условный оператор в PHP представлен конструкцией if, которая позволяет выполнять определенные действия в зависимости от выполнения определенного условия. В PHP также присутствует тернарный оператор, представленный конструкцией (Условие) ? (Выражение1) : (Выражение2), который возвращает значение Выражение1, если условие истинно, и значение Выражение2, если условие ложно.</p>
                <img src="./images/arrowButton2.svg" alt="" onclick="noneP5()">
            </div>
            
        </div>
        <script src="./main.js"></script>

    </div>
    </div>

</body>
</html>
