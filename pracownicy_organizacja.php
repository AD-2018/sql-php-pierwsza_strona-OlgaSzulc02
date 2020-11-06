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
$sql ="select imie,nazwa_dzial from pracownicy,organizacja where id_org=dzial"; 
echo("<h3>Pracownicy z nazwą działu</h3>"); 
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa_dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
  
    $sql ="select imie from pracownicy where (dzial=1 or dzial=4)"; 
echo("<h3>Pracownicy tylko z działu 1 i 4</h3>"); 
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
    
    $sql ="select imie,nazwa_dzial from pracownicy,organizacja where id_org=dzial and imie like '%a'"; 
echo("<h3>Lista kobiet z nazwami działów</h3>"); 
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa_dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
    $sql ="select imie,nazwa_dzial from pracownicy,organizacja where id_org=dzial and imie not like '%a'"; 
echo("<h3>Lista mężczyzn z nazwami działów</h3>"); 
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>nazwa_dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?>
  </body>
</html>
