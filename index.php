<html>
<head>
<link rel="stylesheet" href="style.css">
        <title>Olga Szulc</title>
</head>
<body>
    <h1>Olga Szulc</h1>
  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-OlgaSzulc02">github</a>
  
    <div class="nav">
      <a href="pracownicy/pracownicy_organizacja.php">Pracownicy i organizacja</a><br>
      <a href="pracownicy/funkcje_agregujace.php">Funkcje Agregujące</a><br>
      <a href="pracownicy/data_i_czas.php">Data i Czas</a><br>
        <a href="formularz.html">Formularz</a><br>
        <a href="biblioteka/biblioteka.php">Biblioteka</a><br>
        <a href="pracownicy/danedobazy.php">Dodawanie i usuwanie</a><br>
      </div>

<?php 
require_once("connect.php");
echo("<h3>Lista pracowników</h3>");
$sql ="select * from pracownicy"; 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo ("<br>");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    echo("<h2>Podstawowe</h2>"); 
$sql ="select * from pracownicy"; 
echo("<h3>tabelka</h3>"); 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
  
    $sql ="select * from organizacja"; 
echo("<h3>tabelka organizacja</h3>"); 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>id_org</th><th>nazwa_dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['id_org']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
    echo("<h2>Zadania</h2>"); 
    
    $sql ="select imie from pracownicy where (dzial=2)"; 
echo("<h3>Pracownicy tylko z działu 2</h3>"); 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
        $sql ="select imie from pracownicy where (dzial=2 or dzial=3)"; 
echo("<h3>Pracownicy tylko z działu 2 i z działu 3</h3>"); 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
        $sql ="select imie from pracownicy where (zarobki<30)"; 
echo("<h3>Pracownicy tylko z zarobkami mniejszymi niż 30</h3>"); 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
  
?>
  </body>
</html>
