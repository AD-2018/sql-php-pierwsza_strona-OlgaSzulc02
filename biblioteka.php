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
  echo("<h3>Biblioteka</h3>"); 
$sql = "select biblAutor_biblTytul as id_at, autor, tytul, biblWypoz from biblAutor_biblTytul,biblAutor,biblTytul where autor=biblAutor_id and tytul=biblTytul_id";
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);
echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>id</th><th>autor</th><th>tytul</th><th>wypozyczenia</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
  echo("<tr>");     
  echo("<tr>");   
 echo ('<td>'.$row["id_at"].'</td><td>'.$row["autor"].'</td><td>'.$row["tytul"].'</td><td>'.$row["biblWypoz"].'</td>');
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?> 
