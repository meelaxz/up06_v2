<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая 3</title>
    <link rel="stylesheet" href="./main.css ">
</head>
<body>
    
<header>
<?
    include 'header.php';
?>
    <p>Практическая 3</p>
</header>


<div class="container">
<?
    $x=10;
    $y=5;
    $sum=$x+$y;
    $raz=$x-$y;
    $pro=$x*$y;
    $cha=$x/$y;
?>
    <div class="containerTop">
        <div>
            <h2>Математические функции в php</h2>
            <h3>Задание 1</h3>
        </div>

    </div>
    <div class="containerImage">
        <img src="./images/image1.png" alt="">
    </div>
    <div class="containerBottom">
            <p> <?=$x;?> + <?=$y;?> = <?=$sum;?></p>
            <p> <?=$x;?> - <?=$y;?> = <?=$raz;?></p>
        </div>
</div>

<div class="container">
<?
    $x=10;
    $x+=29;
    $y=5;
    $y+=6;
    $x2=10;
    $x2+=29;
    $y2=9;
    $y2+=5;
    $sum=$x+$y;
    $raz=$x-$y;
    $sum2=$x2+$y2;
    $raz2=$x2-$y2;
    $pro=$x*$y;
    $cha=$x/$y;
?>
    <div class="containerTop">
        <div>
            <h2>Математические функции в php</h2>
            <h3>Задание 2</h3>
        </div>

    </div>
    <div class="containerImage">
        <img src="./images/image2.png" alt="">
    </div>
    <div class="containerBottom">
            <p> <?=$x;?> + <?=$y;?> = <?=$sum;?></p>
            <p> <?=$x;?> - <?=$y;?> = <?=$raz;?></p>
            <hr class="bottom">
            <p> <?=$x2;?> + <?=$y2;?> = <?=$sum2;?></p>
            <p> <?=$x2;?> - <?=$y2;?> = <?=$raz2;?></p>
        </div>
</div>


<div class="container">
<?
    $a=10;
    $k=12;
    $sum=$x+$y;
    $raz=$x-$y;
    $pro=$a*2;
    $cha=$x/$y;
    $n2 = $k / 3 + 1;
    $S = intval(1 / 4 * pow($a, 2) * pow(M_SQRT3, 2 / 3));
    $maxNumber = max($pro, $n2, $S);
    $minNumber = min($pro, $n2, $S);


?>
    <div class="containerTop">
        <div>
            <h2>Математические функции в php</h2>
            <h3>Задание 3</h3>
            <p>a = <?=$a;?>; k = <?=$k?>;</p>
        </div>
    </div>

    <div class="containerImage">
        <img src="./images/image3.png" alt="">
    </div>

    <div class="containerBottom">
            <p> 1. b = <?=$a;?> * 2 = <?=$pro;?></p>
            <hr class="bottom">
            <p> 2. <?=$k;?> / 3 + 1 = <?=$n2;?></p>
            <hr class="bottom">
            <p> 3. S = 1/4 * a² * ∛ = <?=$S;?></p>
            <hr class="bottom">
            <p> 4. Минимальное число = <?=$minNumber;?>; Максимальное число = <?=$maxNumber;?>;
    </div>
</div>

    <div class="container Info">
    <div class="containerTop">
        <div>
            <h2>Контрольные вопросы</h2> 

            <div class="infoName">
                <h3>1 Что такое РНР?</h3> 
                <img src="./images/arrowButton.svg" alt="" onclick="showP1()">
            </div>
        
            <div class="answer" id='infoNameP1'>
                <p >это серверный скриптовый язык, используемый для создания динамических веб-страниц и веб-приложений.</p> 
                <img src="./images/arrowButton2.svg" alt="" onclick="noneP1()">
            </div>
            
            <div class="infoName">
                <h3>2 Что такое арифметическое выражение?</h3>   
                <img src="./images/arrowButton.svg" alt="" onclick="showP2()">
            </div>

            <div class="answer" id='infoNameP2'>
            <p  >Арифметическое выражение - это запись математической формулы, которая содержит константы, переменные, функции и знаки арифметических операций, таких как сложение, вычитание, умножение, деление, и возведение в степень</p>                <img src="./images/arrowButton2.svg" alt="" onclick="noneP2()">
            </div>
            
            <div class="infoName">
                <h3>3 Какие вы знаете арифметические операции?</h3>  
                <img src="./images/arrowButton.svg" alt="" onclick="showP3()"> 
            </div>
            
            <div class="answer" id='infoNameP3'>
                <p  >сложение (+), вычитание (-), умножение (*), деление (/), и возведение в степень (**)</p>
                <img src="./images/arrowButton2.svg" alt="" onclick="noneP3()">
            </div>

            <div class="infoName">
                <h3>4 Каким образом в РНР увеличивают и уменьшают числа на 1?</h3>    
                <img src="./images/arrowButton.svg" alt="" onclick="showP4()">
            </div>

            <div class="answer" id='infoNameP4'>
                <p >$a++; - эквивалентно $a = $a + 1; - увеличивает значение переменной $a на 1. <br>
                    $a--; - эквивалентно $a = $a - 1; - уменьшает значение переменной $a на 1.
                </p>
                <img src="./images/arrowButton2.svg" alt="" onclick="noneP4()">
            </div>

            

            <div class="infoName">
                <h3>5 Конструкции языка РНР похожи на конструкции языка…?</h3>    
                <img src="./images/arrowButton.svg" alt="" onclick="showP5()">
            </div>

            <div class="answer" id='infoNameP5'>
                <p >Конструкции языка PHP имеют сходства с конструкциями языка EXPRESS, задаваемых в рамках общей схемы построения.</p>
                <img src="./images/arrowButton2.svg" alt="" onclick="noneP5()">
            </div>
            
        </div>
        <script src="./main.js"></script>

    </div>
    </div>

</body>
</html>
