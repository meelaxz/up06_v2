<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая 5</title>
    <link rel="stylesheet" href="./main.css ">
</head>
<body>
    
<header>
<?
    include 'header.php';
?>
    <p>Практическая 5</p>
</header>


<div class="container">
  <div class="containerTop">
    <div>
      <h2>Условие if</h2>
      <h3>Задание 1</h3>
    </div>
  </div>

  <div class='containerImage'>
    <img src="./images/page5.png" alt="">
  </div>

  <div class="containerBottom">
    <table>
      <tr>
        <?php
        $n = 4;
        for ($i = 1; $i < 11; $i++) {
          $iResult = $i * $n;
            if( $iResult %2 == 0 and $iResult < 40) {
                $html = "<td style = 'background-color: #bcbcbc; color:green;'>$iResult</td>";
                echo $html;
            }   
            elseif( $iResult %2 == 1 and $iResult < 40) {
                $html = "<td style = 'color:green;'>$iResult</td>";
                echo $html;
            }
            elseif( $iResult %2 == 0 and $iResult >= 75) {
                $html = "<td style = 'background-color: #bcbcbc; color:red; font-weight:600;'>$iResult</td>";
                echo $html;
            }
            elseif( $iResult %2 == 1 and $iResult >= 75) {
                $html = "<td style = 'color:red; font-weight:600;'>$iResult</td>";
                echo $html;
            }
            elseif($iResult %2 == 0){
                $html = "<td style = 'background-color: #bcbcbc;'>$iResult</td>";
                echo $html;
            }
            else {
                echo $html;
            }
 
        }
        ?>
      </tr>
      <tr>
        <?php
        $n = 5;
        for ($i = 1; $i < 11; $i++) {
          $iResult = $i * $n;
          
          $html = "<td>$iResult</td>";
            if( $iResult %2 == 0 and $iResult < 40) {
                $html = "<td style = 'background-color: #bcbcbc; color:green;'>$iResult</td>";
                echo $html;
            }   
            elseif( $iResult %2 == 1 and $iResult <= 40) {
                $html = "<td style = 'color:green;'>$iResult</td>";
                echo $html;
            }
            elseif( $iResult %2 == 0 and $iResult >= 75) {
                $html = "<td style = 'background-color: #bcbcbc; color:red; font-weight:600;'>$iResult</td>";
                echo $html;
            }
            elseif( $iResult %2 == 1 and $iResult >= 75) {
                $html = "<td style = 'color:red; font-weight:600;'>$iResult</td>";
                echo $html;
            }
            elseif($iResult %2 == 0){
                $html = "<td style = 'background-color: #bcbcbc;'>$iResult</td>";
                echo $html;
            }
            else {
                echo $html;
            }
        }
        ?>
      </tr>
      <tr>
        <?php
        $n = 6;
        for ($i = 1; $i < 11; $i++) {
          $iResult = $i * $n;
          
          $html = "<td>$iResult</td>";
            if( $iResult %2 == 0 and $iResult < 40) {
                $html = "<td style = 'background-color: #bcbcbc; color:green;'>$iResult</td>";
                echo $html;
            }   
            elseif( $iResult %2 == 1 and $iResult <= 40) {
                $html = "<td style = 'color:green;'>$iResult</td>";
                echo $html;
            }
            elseif( $iResult %2 == 0 and $iResult >= 75) {
                $html = "<td style = 'background-color: #bcbcbc; color:red; font-weight:600;'>$iResult</td>";
                echo $html;
            }
            elseif( $iResult %2 == 1 and $iResult >= 75) {
                $html = "<td style = 'color:red; font-weight:600;'>$iResult</td>";
                echo $html;
            }
            elseif($iResult %2 == 0){
                $html = "<td style = 'background-color: #bcbcbc;'>$iResult</td>";
                echo $html;
            }
            else {
                echo $html;
            }
        }
        ?>
      </tr>
      <tr>
        <?php
        $n = 7;
        for ($i = 1; $i < 11; $i++) {
          $iResult = $i * $n;
          
          $html = "<td>$iResult</td>";
            if( $iResult %2 == 0 and $iResult < 40) {
                $html = "<td style = 'background-color: #bcbcbc; color:green;'>$iResult</td>";
                echo $html;
            }   
            elseif( $iResult %2 == 1 and $iResult <= 40) {
                $html = "<td style = 'color:green;'>$iResult</td>";
                echo $html;
            }
            elseif( $iResult %2 == 0 and $iResult >= 75) {
                $html = "<td style = 'background-color: #bcbcbc; color:red; font-weight:600;'>$iResult</td>";
                echo $html;
            }
            elseif( $iResult %2 == 1 and $iResult >= 75) {
                $html = "<td style = 'color:red; font-weight:600;'>$iResult</td>";
                echo $html;
            }
            elseif($iResult %2 == 0){
                $html = "<td style = 'background-color: #bcbcbc;'>$iResult</td>";
                echo $html;
            }
            else {
                echo $html;
            }
        }
        ?>
      </tr>
      <tr>
        <?php
        $n = 8;
        for ($i = 1; $i < 11; $i++) {
          $iResult = $i * $n;
          
          $html = "<td>$iResult</td>";
            if( $iResult %2 == 0 and $iResult < 40) {
                $html = "<td style = 'background-color: #bcbcbc; color:green;'>$iResult</td>";
                echo $html;
            }   
            elseif( $iResult %2 == 0 and $iResult >= 75) {
                $html = "<td style = 'background-color: #bcbcbc; color:red; font-weight:600;'>$iResult</td>";
                echo $html;
            }
            elseif( $iResult %2 == 1 and $iResult >= 75) {
                $html = "<td style = 'background-color: #bcbcbc; color:red; font-weight:600;'>$iResult</td>";
                echo $html;
            }
            elseif( $iResult %2 == 1 and $iResult >= 75) {
                $html = "<td style = 'color:red; font-weight:600;'>$iResult</td>";
                echo $html;
            }
            elseif($iResult %2 == 0){
                $html = "<td style = 'background-color: #bcbcbc;'>$iResult</td>";
                echo $html;
            }
            else {
                echo $html;
            }
        }
        ?>
      </tr>
      <tr>
        <?php
        $n = 9;
        for ($i = 1; $i < 11; $i++) {
          $iResult = $i * $n;
          
          $html = "<td>$iResult</td>";
            if( $iResult %2 == 0 and $iResult < 40) {
                $html = "<td style = 'background-color: #bcbcbc; color:green;'>$iResult</td>";
                echo $html;
            }   
            elseif( $iResult %2 == 1 and $iResult <= 40) {
                $html = "<td style = 'color:green;'>$iResult</td>";
                echo $html;
            }
            elseif( $iResult %2 == 0 and $iResult >= 75) {
                $html = "<td style = 'background-color: #bcbcbc; color:red; font-weight:600;'>$iResult</td>";
                echo $html;
            }
            elseif( $iResult %2 == 1 and $iResult >= 75) {
                $html = "<td style = 'color:red; font-weight:600;'>$iResult</td>";
                echo $html;
            }
            elseif($iResult %2 == 0){
                $html = "<td style = 'background-color: #bcbcbc;'>$iResult</td>";
                echo $html;
            }
            else {
                echo $html;
            }
        }
        ?>
      </tr>
    </table>
  </div>
</div>
</body>
</html>
