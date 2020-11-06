<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Pracownicy i Organizacja</h1>
  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-OlgaSzulc02">github</a>
  
    <div class="nav">
      <a href="index.php">Strona Główna</a>
  </div>

<?php 
$servername = "sql7.freemysqlhosting.net"; 
$username = "sql7374844"; 
$password = "6cxJ7qTmxi"; 
$dbname = "sql7374844";  

$conn= new mysqli($servername,$username,$password,$dbname);  
$sql ="select * from pracownicy"; 
echo("<h3>tabelka</h3>"); 
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
?>
  </body>
</html>
