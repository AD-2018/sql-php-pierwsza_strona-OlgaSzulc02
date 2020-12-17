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
$sql = "select (biblAutor_biblTytul) as ID_TAB, autor, tytul, biblWypoz from biblAutor_biblTytul,biblAutor,biblTytul where biblAutor=biblAutor_id and biblTytul=biblTytul_id";
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);
echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>ID</th><th>Autor</th><th>Ksiazka</th><th>wyporzyczenia</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
  echo("<tr>");     
  echo("<tr>");   
                echo ('<td>'.$row["ID_TAB"].'</td><td>'.$row["autor"].'</td><td>'.$row["ksiazka"].'</td><td>'.$row["wypoz"].'</td>');
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?> 
