<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
	  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-OlgaSzulc02">github</a><br>
	  <div class="nav">
      <a href="index.php">Strona Główna</a>
    </div>
<?php 
require_once("connect.php");
  echo("<h3>Tytuły</h3>"); 
$sql = "select * from biblTytul";
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);
echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>id</th><th>tytul</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
  echo("<tr>");     
  echo("<tr>");   
 echo ('<td>'.$row["id"].'</td><td>'.$row["tytul"].'</td>');
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?> 
