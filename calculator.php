<!DOCTYPE HTML>
<html lang="en-US">
<head>
 <meta charset="UTF-8">
 <title>Simple Calculator</title>
 <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
 <link rel="stylesheet" href="style.css">
</head>
<body>
 <form action="" method="post">
 <table>
 <center>
 <h1>Simple Calculator</h1>
 <tr><td>Izaberi prvu vrijednost</td><td><input type="text" name="Prva_Vrijednost" id="" /></td></tr>
 <tr><td>Izaberi drugu vrijednost</td><td><input type="text" name="Druga_Vrijednost" id="" /></td></tr>
 <tr><td>Izaberi Operator</td> 
 <td>
 <select name="operator" id="">
  <option value="static">Izaberi operator</option>
  <option value="+">Sabiranje</option>
  <option value="-">Oduzimanje</option>
  <option value="*">Mnozenje</option>
  <option value="/">Dijeljnje</option>
  </select></td></tr>
 
 <tr><td></td><td><input type="submit" name="submit" value="Izracunaj" /></td></tr>
 </center>
 </table>
 </form>
 
 <?php
 if(isset($_POST['submit'])){
  $Prva_Vrijednost= $_POST['Prva_Vrijednost'];
  $Druga_Vrijednost = $_POST['Druga_Vrijednost'];
  $operator = $_POST['operator'];
 ?>

 <div class="result-box">
 <h2>Rezultat je : 
  <?php
   switch($operator){ 
   case "+":
   echo $Prva_Vrijednost + $Druga_Vrijednost; 
   break;
   case "-":
   echo $Prva_Vrijednost - $Druga_Vrijednost; 
   break;
   case "*":
   echo $Prva_Vrijednost * $Druga_Vrijednost; 
   break;
   case "/":
   echo $Prva_Vrijednost / $Druga_Vrijednost; 
   break;
   default:
   echo "Samo brojevi dolaze u obzir";
   break;
  }
 }
 ?></h2>
</div>
<div class="footer">
  <p>Hvala sto koristite ovaj kalkulator <br> ®Calculator Technologies 2018</p>
   </div>
</body>
</html>