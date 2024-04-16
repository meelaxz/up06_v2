<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая 4</title>
    <link rel="stylesheet" href="./main.css ">
</head>
<body>
    
<header>
<?
    include 'header.php';
?>

    <p>Практическая 4</p>
    
</header>


<div class="container">

  <div class="containerTop">
    <div>
      <h2>Цикл for</h2>
      <h3>Задание 1 </h3>
    </div>
  </div>

  <div class='containerImage'>
    <img src="./images/page4ex1.png" alt="">
  </div>

  <div class="containerBottom">
    <table>
        <tr></tr>
      <?php
        for ($i = 4; $i < 10; $i++) {
          $iResult = $i * $i;
          $html = "<tr><td>$iResult</td></tr>";
          echo $html;
        }
      ?>
    </table>
  </div>
</div>


<div class="container">
  <div class="containerTop">
    <div>
      <h2>Цикл for</h2>
      <h3>Задание 2</h3>
    </div>
  </div>

  <div class='containerImage'>
    <img src="./images/page4ex2.png" alt="">
  </div>

  <div class="containerBottom">
    <table>
      <tr>
        <?php
        $n = 4;
        for ($i = 1; $i < 11; $i++) {
          $iResult = $i * $n;
          
          $html = "<td>$iResult</td>";
          echo $html;
        }
        ?>
      </tr>
      <tr>
        <?php
        $n = 5;
        for ($i = 1; $i < 11; $i++) {
          $iResult = $i * $n;
          
          $html = "<td>$iResult</td>";
          echo $html;
        }
        ?>
      </tr>
      <tr>
        <?php
        $n = 6;
        for ($i = 1; $i < 11; $i++) {
          $iResult = $i * $n;
          
          $html = "<td>$iResult</td>";
          echo $html;
        }
        ?>
      </tr>
      <tr>
        <?php
        $n = 7;
        for ($i = 1; $i < 11; $i++) {
          $iResult = $i * $n;
          
          $html = "<td>$iResult</td>";
          echo $html;
        }
        ?>
      </tr>
      <tr>
        <?php
        $n = 8;
        for ($i = 1; $i < 11; $i++) {
          $iResult = $i * $n;
          
          $html = "<td>$iResult</td>";
          echo $html;
        }
        ?>
      </tr>
      <tr>
        <?php
        $n = 9;
        for ($i = 1; $i < 11; $i++) {
          $iResult = $i * $n;
          
          $html = "<td>$iResult</td>";
          echo $html;
        }
        ?>
      </tr>
    </table>
  </div>
</div>
</body>
</html>
